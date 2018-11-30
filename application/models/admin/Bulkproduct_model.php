<?php
class Bulkproduct_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insertCSV($data)
            {
                $this->db->insert('product', $data);
                return $this->db->insert_id();
            }
	public function insertProductCategory($data)
            {
                $this->db->insert('product_category', $data);
                return $this->db->insert_id();
            }
			public function insertProductImages($data)
            {
                $this->db->insert('product_images', $data);
                return $this->db->insert_id();
            }
			public function insertProductAttributes($data)
            {
                $this->db->insert('product_attributes', $data);
                return $this->db->insert_id();
            }



	public function view_data(){
        $query=$this->db->query("SELECT im.*
                                 FROM product im 
                                 ORDER BY im.product_id DESC
                                 limit 100");
        return $query->result_array();
    }
	public function get_attributes()
        {
                $this->db->select("a.*");
                $this->db->from('attributes a');
                
                if (isset($id) && $id > 0) {
                    $this->db->where('a.attribute_type_id', $id);
                }
                
               $this->db->order_by('a.attribute_type_id');
                $query = $this->db->get();
                return $query->result();
        }
		public function get_attributetypes($id=0)
        {
                $this->db->select("at.*");
                $this->db->from('attribute_type_mas at');
                
                if (isset($id) && $id > 0) {
                    $this->db->where('at.attribute_type_id', $id);
                }
                
               $this->db->order_by('at.attribute_type_id');
                $query = $this->db->get();
                return $query->result();
        }


}