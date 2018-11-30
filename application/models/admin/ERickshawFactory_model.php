<?php
class ERickshawFactory_model extends CI_Model {

        public function get_category($id=0)
        {
                                $this->db->select('category_name,slider_category_id');
				$this->db->from('slider_category');
                               if(isset($id) && $id>0){
				$this->db->where('slider_category_id', $id); 
                          }
                                
                         $query = $this->db->get();
          
				
                return $query->result();
        }
        public function get_sliders($id=0)
        {
                                $this->db->select('*');
				$this->db->from('erickshaw_factory');
                              
                                if(isset($id) && $id>0){
				$this->db->where('id', $id); 
                                }
                                
                         $query = $this->db->get();
          
				
                return $query->result();
        }
            public function getTableData($tablename, $cols,$where_cond=array(),$order_by="",$order_col="") {

//$condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
        $this->db->select("$cols,s.state_name");
        $this->db->from("$tablename a");
        $this->db->join('state s', 's.state_id=a.state_id', 'LEFT');
         if (is_array($where_cond) && !empty($where_cond)) {
        foreach ($where_cond as $key => $val) {
                $this->db->where($key, $val);
            }
         }
         if (isset($order_by) && $order_by !== "") {
             if (isset($order_col) && $order_col !== "") {
             $this->db->order_by($order_col, $order_by);
             }
         }
        //$this->db->where($condition);
        //  $this->db->limit($limit_value);
        $query = $this->db->get();
        //$rowcount = $query->num_rows();
        //if ($rowcount > 0) {
            return $query->result();
        //}
    }

        public function get_productimages($id=0)
        {
            	$this->db->select('image_path,product_id');
				$this->db->from('product_images');
                                if(isset($id) && $id>0){
				$this->db->where('product_id', $id); 
				}
                           $query = $this->db->get();
                           	
                return $query->result();
        }
        public function destroyERickshaw($id) {
            if(isset($id)&&($id>0))
            {
            $this->db->delete('erickshaw_factory', array('id' => $id));
            return true;
            }
            
        }
        
        
		 

}