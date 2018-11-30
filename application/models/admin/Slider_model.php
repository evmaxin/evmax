<?php
class Slider_model extends CI_Model {

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
        public function get_sliders($id=0,$slider_category_id=0)
        {
                                $this->db->select('name,slider_category_id,slider_text,slider_id,display_order,link_to_category,link_url');
				$this->db->from('slider');
                               if(isset($slider_category_id) && $slider_category_id>0){
				$this->db->where('slider_category_id', $slider_category_id); 
                                }
                                if(isset($id) && $id>0){
				$this->db->where('slider_id', $id); 
                                }
                                
                         $query = $this->db->get();
          
				
                return $query->result();
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
        public function destroySlider($id) {
            if(isset($id)&&($id>0))
            {
            $this->db->delete('slider', array('slider_id' => $id));
            return true;
            }
            
        }
        
        
		 

}