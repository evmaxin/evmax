<?php
class Attribute_model extends CI_Model {

        public $attribute_type_id;
        public $name;

        public function get_attributes($id=0)
        {
                $this->db->select("GROUP_CONCAT(a.category_ids SEPARATOR '-') as atr_cat_ids,GROUP_CONCAT(CONCAT(a.name,'~',a.attribute_id) SEPARATOR ', ') as name,GROUP_CONCAT(a.attribute_id) as attribute_id ,atm.*");
                $this->db->from('attribute_type_mas atm');
                $this->db->join('attributes a','atm.attribute_type_id=a.attribute_type_id','inner');
                if (isset($id) && $id > 0) {
                    $this->db->where('a.attribute_id', $id);
                }
                $this->db->group_by('atm.attribute_type_id');
               $this->db->order_by('atm.attribute_type_id');
                $query = $this->db->get();
              // echo $this->db->last_query();
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
                   $this->attribute_type_id = $this->input->post('attribute_type');
                   $this->name = $this->input->post('attribute_name');// please read the below note
                   if($this->input->post('category_ids') != "" && is_array($this->input->post('category_ids')))
                {
                $this->category_ids = implode(",", $this->input->post('category_ids'));
                }
               	   $this->db->update('attributes', $this, array('attribute_id' => $id));
                  return true;
        }
        public function destroy($id)
        {
         	  $this->db->delete('attributes', array('attribute_id' => $id));
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