<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

         public function get_ordersData($neworders=0,$order_value=0,$num_of_orders=0)
        {
             $store_id = $this->session->userdata('admin_data')['store_id'];
            $this->db->select("count(order_id) as total,sum(payment_amt) as order_val");
            $this->db->from("orders");
            
                          if(isset($neworders) && $neworders>0){
				$this->db->where('status', 0); 
                          }
                           if(isset($store_id) && ($store_id>1)){
				$this->db->where('store_id', $store_id); 
                          }
                         
                        
                       $query = $this->db->get();
          
				
                return $query->result();
        }
        public function ordersData($neworders=0,$order_value=0,$num_of_orders=0)
        {
             $store_id = $this->session->userdata('admin_data')['store_id'];
             //$this->db->distinct('');
            $this->db->select("count(order_id) as total,sum(total_price) as order_val");
            $this->db->from("order_detail");
            
                          if(isset($neworders) && $neworders>0){
				//$this->db->where('status', 0); 
                          }
                           if(isset($store_id) && ($store_id>1)){
				$this->db->where('store_id', $store_id); 
                          }
                         
                        
                       $query = $this->db->get();
          
				
                return $query->result();
        }
         public function get_outOfStockProducts($id=0,$cout_flag=0,$where_flag=0)
        {
              $store_id = $this->session->userdata('admin_data')['store_id'];
                    $cnt="";
                  if(isset($cout_flag) && $cout_flag>0){
                    $cnt="count(product_id) as outofstock_count,";
			  }
                          
            $this->db->select("$cnt name,product_id");
            $this->db->from("product");
            
                               if(isset($id) && $id>0){
				$this->db->where('product_id', $id); 
                          }
                          if(isset($where_flag) && $where_flag>0){
                  	$this->db->where('inventory', 0); 
                          }
                           if(isset($store_id) && ($store_id>1)){
				$this->db->where('store_id', $store_id); 
                          }
                          
                       // 
                       $query = $this->db->get();
          
				
                return $query->result();
        }
        public function getChartOrders()
        {
             $store_id = $this->session->userdata('admin_data')['store_id'];
            $this->db->select("DATE_FORMAT(date, '%M-%Y') AS date, SUM(quantity) as tot,SUM(total_price) as total_price");
            $this->db->from("order_detail");
             $this->db->join('orders','orders.order_id=order_detail.order_id','INNER');
            $this->db->group_by("DATE_FORMAT(date, '%M-%Y')");
            $this->db->order_by("orderdetail_id","ASC");
              if(isset($store_id) && ($store_id>1)){
				$this->db->where('store_id', $store_id); 
                          }            
                        
            $query = $this->db->get();
          
			//echo $this->db->query(); exit;	
             return $query->result_array();
        }
         public function getStoreData($username,$password)
        {
  
          $this->db->select('a.username,a.admin_id,s.store_name,a.password,a.store_id,a.first_visit,a.profile_pic');
           $this->db->from('admin a');
           $this->db->join('store s','a.store_id=s.store_id','inner');
		 //  $this->db->join('m_registration s','a.store_id=s.m_registration_id','inner');
		
           $this->db->where('a.username', $username);
            $this->db->where('a.password', $password);
            $this->db->where('a.status', 1);

         
        $query = $this->db->get();

        return $query->result();
        }
		 public function  updatePassword($username,$password)
		 {
			   $this->db->where("username",$username);
		       $this->db->set("password",$password);
                       $this->db->set("first_visit",1);
		       $this->db->update("admin");
		  
		 }
        
        
        
		 

}