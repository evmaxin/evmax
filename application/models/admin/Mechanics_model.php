<?php
class Mechanics_model extends CI_Model {
   //get product details, //$from_home_page to display all products in child catergories from home page
        public function get_details($id=0,$limit=0, $start=0) //$from_home_page to display all products in child catergories
        {                          
                              
                                $this->db->select("p.*,st.state_name,st.state_id");
				              $this->db->from('mechanics p');
                               
                                // $this->db->join('store s','s.store_id=prod.store_id','LEFT');
                                 $this->db->join('state st','st.state_id=p.state','left'); 
                                // $this->db->join('slider sl','st.store_id=sl.store_id','LEFT');
                               if(isset($id) && $id>0){
							$this->db->where('p.id', $id); 
                              //   $this->db->group_by('patr.attribute_type_id');
				}
                            if($this->uri->segment(1)=="store")
                              {
                                  $this->db->where('st.store_slug', $this->uri->segment(2)); 
                              }
                              if(isset($id) && ($id==0)){
                               $this->db->group_by('p.id');
                               //if($limit>0 && $start>0){
                               $this->db->limit($limit, $start);
                               }
                            
                               
                               
                               
                              //  }
				$query = $this->db->get();
                            
				
                return $query->result();
        }
	

}