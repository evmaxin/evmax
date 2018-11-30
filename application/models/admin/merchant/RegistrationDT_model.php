<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*This Model only for Data tables , No opertaions will be performed on this this model
 */
class RegistrationDT_model extends CI_Model {

	var $table = ' m_registration';
	var $column_order = array(null,'company_name','address1','status'); //set column field database for datatable orderable
	var $column_search = array('surname','company_name','address1','city','pincode','person_email','business_email','name','phone'); //set column field database for datatable searchable 
	var $order = array('m_registration_id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		$this->db->select("st.state_name as state,group_concat(cat.category_name) as category_name,a.m_registration_id,a.surname as first_name,a.name as last_name,a.phone as mobile,a.company_name as company_name,a.address1 as website,a.person_address as address2,a.person_city as city,a.person_email as email,a.business_email as business_email,a.admin_approved as status,DATE_FORMAT(a.regDate, '%M %d %Y, %h:%m %p') as date,DATE_FORMAT(a.onBoardDate, '%M %d %Y, %h:%m %p') as onBoardDate");
		$this->db->from("$this->table a");
                 $this->db->join('m_reg_cat_interested cat_int','cat_int.m_registration_id=a.m_registration_id','inner');
                 $this->db->join('m_category cat','cat.m_category_id=cat_int.m_category_id','inner');
                 $this->db->join('state st','a.state_id=st.state_id','inner');
         if($this->input->post('status'))
        {
           // $this->db->like('status', $this->input->post('status'));
        }
	      $adminApproved=$this->session->userdata("adminApproved"); 
		  if($adminApproved!=null)
        {  
	       $this->db->where('a.admin_approved',$adminApproved);
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
                $this->db->group_by('a.m_registration_id');
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
