<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*This Model only for Data tables , No opertaions will be performed on this this model
 */
class SliderDT_model extends CI_Model {

	var $table = 'slider';
	var $column_order = array(null, 'ss.name','c.category_name'); //set column field database for datatable orderable
	var $column_search = array('ss.slider_id','ss.name','c.category_name'); //set column field database for datatable searchable 
	var $order = array('ss.slider_id' => 'DESC'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		
            $store_id = $this->session->userdata('admin_data')['store_id'];
            
		$this->db->select("pban.name as product_banner_type,ss.*,cat.category_name as pcategory_name,str.store_id,str.store_name,c.category_name as category_name");
                $this->db->from("slider ss");
                $this->db->join('slider_category c','c.slider_category_id=ss.slider_category_id','left');
                $this->db->join('category cat','cat.category_id=ss.product_category_id','left');
                $this->db->join('product_banner_type pban','pban.product_banner_type_id=ss.product_banner_type_id','left');
                $this->db->join('store str','str.store_id=ss.store_id','inner');
               // $this->db->where('ss.store_id',7);
		$i = 0;
	if($store_id != 1)
            {
                $this->db->where('str.store_id',$store_id );
            }
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
                if($this->session->userdata("productBanners") == 1){
                    $this->db->where('ss.product_banner', 1); 
                }else{
                     $this->db->where('ss.product_banner', 0); 
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
