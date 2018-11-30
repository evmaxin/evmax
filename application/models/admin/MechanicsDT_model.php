<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*This Model only for Data tables , No opertaions will be performed on this this model
 */
class MechanicsDT_model extends CI_Model {

	var $table = 'mechanics';
	var $column_order = array(null,'p.company_name','s.person_name'); //set column field database for datatable orderable
	var $column_search = array('p.id','p.company_name','p.person_name'); //set column field database for datatable searchable 
	var $order = array('p.id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		$store_id = $this->session->userdata('admin_data')['store_id'];
                $this->db->select("p.company_name,p.id,p.person_name,p.lang,p.lat,p.plot_flat,p.address1,p.address2,p.city,p.store_id,p.state as state,p.pincode,p.status,p.cont_number,p.cont_email,st.state_name");
		$this->db->from("mechanics p");
                if(isset($store_id) && ($store_id>1)){
                    $this->db->where('p.store_id', $store_id); 
                 }      
             //   $this->db->join('store s','s.store_id=p.store_id','inner'); // causing product_id ambiguous dont touch now
                $this->db->join('state st','st.state_id=p.state','left'); // causing product_id ambiguous dont touch now
              
                
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
