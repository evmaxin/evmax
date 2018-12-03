<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*This Model only for Data tables , No opertaions will be performed on this this model
 */
class IndexDT_model extends CI_Model {

	var $table = 'm_enquiry';
	var $column_order = array(null,'company_name','address1','status'); //set column field database for datatable orderable
	var $column_search = array('first_name','company_name','address1','address2','city','pincode','landline','email','business_email','last_name','mobile'); //set column field database for datatable searchable 
	var $order = array('m_enquiry_id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		$this->db->select("st.state_name as state,group_concat(cat.category_name SEPARATOR ', <br>') as category_name,a.m_enquiry_id,a.first_name as first_name,a.last_name as last_name,a.mobile as mobile,a.company_name as company_name,a.address1 as website,a.address2 as address2,a.city as city,a.email as email,a.business_email as business_email,a.landline as landline,a.status as status,DATE_FORMAT(a.dateOfEnq, '%M %d %Y, %h:%m %p') as enquiry_date,a.archive");
		$this->db->from("$this->table a");
                 $this->db->join('m_cat_interested cat_int','cat_int.m_enquiry_id=a.m_enquiry_id','inner');
                 $this->db->join('m_category cat','cat.m_category_id=cat_int.cat_id','inner');
                 $this->db->join('state st','a.state_id=st.state_id','inner');
                  if($this->input->post('status'))
        {
            $this->db->like('a.status', $this->input->post('status'));
        }
		$i = 0;
		foreach ($this->column_search as $item) // loop column 
		{
			if($_POST['search']['value']) // if datatable send POST for search
			{
				
				if($i===0) // first loop
				{
					$this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
					$this->db->like($item, $_POST['search']['value']);
				}
				else
				{
					$this->db->or_like($item, $_POST['search']['value']);
				}

				if(count($this->column_search) - 1 == $i) //last loop
					$this->db->group_end(); //close bracket
			}
			$i++;
		}
		
		if(isset($_POST['order'])) // here order processing
		{
			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		} 
		else if(isset($this->order))
		{
			$order = $this->order;
			$this->db->order_by(key($order), $order[key($order)]);
		}
                $this->db->group_by('a.m_enquiry_id');
                 $this->db->where('a.archive',0);
                //s$this->db->like('a.status', $this->input->post('status'));
	}

	function get_datatables()
	{
		$this->_get_datatables_query();
		if($_POST['length'] != -1)
		$this->db->limit($_POST['length'], $_POST['start']);
		$query = $this->db->get();
              //  echo $this->db->last_query();
		return $query->result();
		
	}

	function count_filtered()
	{
		$this->_get_datatables_query();
		$query = $this->db->get();
		return $query->num_rows();
	}

	public function count_all()
	{
		$this->db->from($this->table);
		return $this->db->count_all_results();
	}

}
