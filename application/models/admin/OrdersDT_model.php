<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*This Model only for Data tables , No opertaions will be performed on this this model
 */
class OrdersDT_model extends CI_Model {

	var $table = 'orders';
	var $column_order = array(null,'firstname','total_price','order_number','quantity'); //set column field database for datatable orderable
	var $column_search = array('id','firstname','total_price','order_number','quantity'); //set column field database for datatable searchable 
	var $order = array('order_id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
            $store_id = $this->session->userdata('admin_data')['store_id'];
             if(isset($store_id) && ($store_id>1)){
				$this->db->where('p.store_id', $store_id); 
                 }  
               $this->db->select('a.username as admin_email,c.email as cust_email,o.status,p.store_id,s.store_name,c.id as id,c.firstname as firstname,o.order_date,sum(od.tax+od.shipping_gst+od.handling_gst) as tax,o.order_number as order_number,o.order_id as order_id,sum(od.total_price+od.handling_cost+od.delivery_cost) as total_price,sum(od.quantity) as quantity,p.full_description,od.coupon_value');
               $this->db->from("orders o");
               $this->db->join('customers c','c.id=o.customer_id','inner');
               $this->db->join('order_detail od','od.order_id=o.order_id','inner');
               $this->db->join('product p','p.product_id=od.product_id','inner');
               $this->db->join('store s','s.store_id=p.store_id','inner');
                $this->db->join('admin a','a.store_id=s.store_id','inner');
               //add custom filter here
        
        if($this->input->post('order_id'))
        {
            $this->db->like('o.order_number', $this->input->post('order_id'));
        }
        if($this->input->post('startdate') && $this->input->post('enddate'))
        {
            $this->db->where('o.order_date >=', $this->input->post('startdate'));
            $this->db->where('o.order_date <=', $this->input->post('enddate'));
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
                        $this->db->group_by('od.order_id');
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
