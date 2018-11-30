<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*This Model only for Data tables , No opertaions will be performed on this this model
 */
class BatteryDT_model extends CI_Model {

	var $table = 'product';
	var $column_order = array(null,'p.name','s.store_name','s.store_id'); //set column field database for datatable orderable
	var $column_search = array('p.name','s.store_name','s.store_id'); //set column field database for datatable searchable 
	var $order = array('p.battery_id' => 'desc'); // default order 

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	private function _get_datatables_query()
	{
		$store_id = $this->session->userdata('admin_data')['store_id'];
                $this->db->select("sc.name as scatname,p.battery_id,p.name,p.actual_price,p.offer_price,p.inventory,s.store_name as merchant,p.store_id,m.model_name as model,v.name as varient,my.manufacture_year as manf_year,p.archive as archive,DATE_FORMAT(p.valid_from, '%M %d %Y') as valid_from,DATE_FORMAT(p.valid_to, '%M %d %Y') as valid_to,p.status,make.company_name as make,p.commission,c.category_name,p.warranty,p.am,p.voltage,p.suitablevehicles,p.batterytype");
		$this->db->from("battery p");
                if(isset($store_id) && ($store_id>1)){
                    $this->db->where('p.store_id', $store_id); 
                 }      
                $this->db->join('store s','s.store_id=p.store_id','inner'); // causing product_id ambiguous dont touch now
                $this->db->join('m_registration make','make.m_registration_id=p.make_id','left'); // causing product_id ambiguous dont touch now
                $this->db->join('model m','p.model_id=m.model_id','left'); // causing product_id ambiguous dont touch now
                $this->db->join('variant v','p.variant_id=v.variant_id','left');
                $this->db->join('manufacture_year my','p.manufacture_year_id=my.manufacture_year_id','left');
              //  $this->db->join('product_category pc','pc.product_id = p.product_id','left');
                $this->db->join('category c','p.category_id = c.category_id','left');
                $this->db->join('sub_category sc','p.subcategory_id = sc.sub_category_id','left');
                
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
                        //$this->db->order_by('p.product_id', 'desc'); //tweeked for customization on 2nd nov 2017
                       
		}
               
                $this->db->where('make.otp_status', 1); 
               //echo $this->db->last_query(); exit;
                 //$this->db->where('p.archive', 0); //0 means not-archived, 1 means archieved
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
