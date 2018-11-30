<?php
class Index_model extends CI_Model {

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
        public function updateStatus($updateStatus,$m_enquiry_id)
        {
		  $this->db->set('status',$updateStatus);
		  $this->db->where("m_enquiry_id",$m_enquiry_id);
		  $this->db->update("m_enquiry");
		}
		 

}