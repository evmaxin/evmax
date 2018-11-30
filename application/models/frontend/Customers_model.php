<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers_model extends CI_Model {

	var $table = 'customers';
	var $column_order = array(null, 'firstname','lastname','phone','address','city','country'); //set column field database for datatable orderable
	var $column_search = array('id','firstname','lastname','phone','address','city','country'); //set column field database for datatable searchable 
	var $order = array('id' => 'asc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
        public function isCustomerAddressAdded($customer_id,$address_type_id=0) {
             if (isset($customer_id) && $customer_id > 0) {
        $this->db->select('*');
        $this->db->from('customer_address');
        $this->db->where('customer_id', $customer_id);
         if (isset($address_type_id) && $address_type_id > 0) {
            $this->db->where('address_type_id', $address_type_id); 
         }
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->result();
        } 
             }
        else {
            return false;
        }
        }
            public function getCustomerorders($customer_id=0) {
             if (isset($customer_id) && $customer_id > 0) {
                $this->db->select('od.date,p.name,c.id as id,c.firstname as firstname,o.order_number as order_number,o.order_id as order_id,sum(od.total_price) as total_price,sum(od.quantity) as quantity');
               $this->db->from("orders o");
               $this->db->join('customers c','c.id=o.customer_id','inner');
               $this->db->join('order_detail od','od.order_id=o.order_id','inner');
               $this->db->join('product p','p.product_id=od.product_id','inner');
               
        $this->db->where('c.id', $customer_id);
        $this->db->order_by('o.order_id','desc');
        $this->db->group_by('od.order_id');
        $query = $this->db->get();
        if ($query->num_rows()>0) {
            return $query->result();
        } 
             }
        else {
            return false;
        }
        }

    private function _get_datatables_query()
	{
		
		$this->db->from($this->table);

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
