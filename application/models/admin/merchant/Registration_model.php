<?php
class Registration_model extends CI_Model {

        public $attribute_type;
        public $store_id;

        public function get_attributetype($id=0)
        {
            	$this->db->select('attribute_type_id,attribute_type,status,store_id');
				$this->db->from('attribute_type_mas');
				if(isset($id) && $id>0){
				$this->db->where('attribute_type_id', $id); 
				}
				$query = $this->db->get();
				//echo $this->db->last_query();
                return $query->result();
        }
         public function get_attributeTypeWithAttr($id=0)
        {
            	$this->db->select('t.attribute_type_id,t.attribute_type,t.status,t.store_id');
				$this->db->from('attribute_type_mas t');
                                $this->db->join('attributes a','t.attribute_type_id=a.attribute_type_id','inner');
				if(isset($id) && $id>0){
				$this->db->where('t.attribute_type_id', $id); 
				}
                                $this->db->group_by('t.attribute_type_id', $id);
				$query = $this->db->get();
				//echo $this->db->last_query();
                return $query->result();
        }
         public function get_attributetype_array($id=0)
        {
            	$this->db->select('attribute_type_id,attribute_type,status,store_id');
				$this->db->from('attribute_type_mas');
				if(isset($id) && $id>0){
				$this->db->where('attribute_type_id', $id); 
				}
				$query = $this->db->get();
				//echo $this->db->last_query();
                return $query->result_array();
        }

        public function insert_entry()
        {
                                $this->attribute_type = str_replace(' ', '_', $this->input->post('attribute_type'));// please read the below note
				$this->store_id  = 0;
                                $this->db->insert('attribute_type_mas', $this);
				return true;
        }

        public function update_entry($id)
        {
           
                   $this->attribute_type = $this->input->post('attribute_type'); // please read the below note
               	    $this->db->update('attribute_type_mas', $this, array('attribute_type_id' => $id));
                  return true;
        }
         function row_delete($id)
        {
         $this->db->where('attribute_type_id', $id);
         $this->db->delete('attribute_type_mas'); 
         return 1;
        }
        public function approveStatus($approveStatus,$approvedId)
        {
				 if($approveStatus==1)
				 { 
				  $this->db->set('admin_approved',$approveStatus);
                                  $this->db->set('onBoardDate',date('Y-m-d H:i:s'));
				  $this->db->where("m_registration_id",$approvedId);
				  $this->db->update("m_registration");
				 }
		    
		}
		
		
		 function getUserDetails($id)
     	 {
			  
			   $adminApproved=$this->session->userdata("adminApproved"); 
			   if($adminApproved==1)
				{     
						$this->db->select('st.state_name as state,st1.state_name as persnoal_state,a.*,group_concat(cat.category_name) as category_name,ct.company_type,adn.admin_id,adn.status');
						$this->db->join('admin adn','adn.store_id=a.m_registration_id','inner');
			    }
				else
				{
					$this->db->select('st.state_name as state,st1.state_name as persnoal_state,a.*,group_concat(cat.category_name) as category_name,ct.company_type');
				  
				}
				  
				  
		          $this->db->from(" m_registration a");
                  $this->db->join('m_reg_cat_interested cat_int','cat_int.m_registration_id=a.m_registration_id','inner');
                  $this->db->join('m_category cat','cat.m_category_id=cat_int.m_category_id','left');
                  $this->db->join('state st','a.state_id=st.state_id','left');
				  $this->db->join('state st1','a.person_state_id=st1.state_id','left');
				  $this->db->join('m_company_type ct','ct.m_company_type_id=a.m_company_type_id','left');
				  $this->db->where("a.m_registration_id",$id);
				  
				  
				  
				  
				   $query = $this->db->get();
                //  echo $this->db->last_query();
	    	return $query->result();
		
	   }

}