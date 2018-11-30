<?php
class Order_model extends CI_Model {



        public function insert($product_id,$custmer_id)
        {
            $parameters = array(
                'customer_id' =>$custmer_id,
                'store_id' =>1
           );
                    
           // $this->db->insert('orders', $parameters);
            //return $this->db->insert_id();
        }
       
        
		 

}