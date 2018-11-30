<?php
class Add_Model extends CI_Model {

        public $make_id;
        public $model_name;

     public function get_attributes($id=0)
        {
                $this->db->select("a.*");
                $this->db->from('model a');
              
                if (isset($id) && $id > 0) {
                    $this->db->where('a.model_id', $id);
                }
               
                $query = $this->db->get();
              // echo $this->db->last_query();
                return $query->result();
        }
      public function insertdata($tablename, $parameters) {

        $this->db->insert($tablename, $parameters);
        return $this->db->insert_id();
       }
        public function get_attributetype($id=0)
        {
            	$this->db->select('m_registration_id,company_name');
				$this->db->from('m_registration');
				if(isset($id) && $id>0){
				$this->db->where('m_registration_id', $id); 
				}
				$query = $this->db->get();
				//echo $this->db->last_query();
                return $query->result();
        }
        public function insert_entry($val)
        {
                $this->attribute_type_id = $this->input->post('attribute_type');
                $this->category_type_id = $this->input->post('categorytype_id');
                $this->name = $val;
                if($this->input->post('category_ids') != "" && is_array($this->input->post('category_ids')))
                {
                $this->category_ids = implode(",", $this->input->post('category_ids'));
                }
                $this->db->insert('attributes', $this);
                return $this->db->insert_id();
        }

		
        public function insert_attribute_category($attribute_id)
        {
                $data['attribute_id'] = $attribute_id;
                $data['category_id'] = $this->input->post('category_id')?$this->input->post('category_id'):0;
                $data['category_type_id'] = $this->input->post('categorytype_id');
                
                $this->db->insert('attributes_category_type', $data);
                return true;
        }

        public function update_entry($id)
        {
                   $this->make_id = $this->input->post('attribute_type');
                   $this->model_name = $this->input->post('attribute_name');// please read the below note
               
               	   $this->db->update('model', $this, array('model_id' => $id));
                  return true;
        }
        public function destroy($id)
        {
         	  $this->db->delete('model', array('model_id' => $id));
                  return true;
        }
        public function get_productattributes($id=0)
        {
            	$this->db->select('atm.visible_on_detail_page,atm.attribute_type,GROUP_CONCAT(at.name) as name,pa.attribute_type_id,GROUP_CONCAT(pa.attribute_id) as attribute_id,pa.price');
				$this->db->from('product_attributes pa');
                                $this->db->join('attribute_type_mas atm','atm.attribute_type_id=pa.attribute_type_id','LEFT');
                                 $this->db->join('attributes at','at.attribute_id=pa.attribute_id','LEFT');
                                if(isset($id) && $id>0){
				$this->db->where('pa.product_id', $id); 
				}
                               $this->db->group_by('pa.attribute_type_id', $id); 
                           $query = $this->db->get();
                     	// echo $this->db->last_query();
                return $query->result();
        }
		 

}