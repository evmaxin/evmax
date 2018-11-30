<?php
class Category_model extends CI_Model {

        public $category_name;
        public $parent_id;
        public $store_id;
        public $category_image;

        public function get_category($id=0,$is_parentID_given=0)
        {
            //echo $id;
        $this->db->select('size_chart,category_id,category_name,parent_id,category_type_id,category_image,status,meta_title,meta_keywords,meta_description,menu_id,submenu_id');
        $this->db->from('category');
        if (isset($id) && $id > 0) {
            $this->db->where('category_id', $id);
        }
         if (isset($is_parentID_given) && $is_parentID_given > 0) {
            $this->db->where('parent_id', $is_parentID_given);
            $this->db->order_by('parent_id', $is_parentID_given);
        }
         
        $query = $this->db->get();

        return $query->result();
        }
     
         public function get_category_types($id=0)
        {
        $this->db->select('category_type,category_type_id');
        $this->db->from('category_type');
        if (isset($id) && $id > 0) {
            $this->db->where('category_type_id', $id);
        }
       
     
        $query = $this->db->get();

        return $query->result();
        }
        
        public function insert_entry()
        {
            
            $this->category_name = $_POST['category_name']; // please read the below note
            $this->parent_id = $_POST['parent_id'];
            $this->category_type_id = $_POST['category_type'];
            $this->meta_title = $_POST['title'];
            $this->meta_keywords = $_POST['keywords'];
            $this->meta_description = $_POST['description'];
            $this->size_chart = $_POST['size_chart'];
            $this->store_id = 0;
            $this->category_image = "";
            $this->show_in_navigation_menu = $_POST['show_in_navigation_menu'];
            $this->menu_id = $this->input->post('menu_id');
            $this->submenu_id = $this->input->post('submenu_id');
            $this->db->insert('category', $this);
            return true;
        }

        public function update_entry($id)
        {
            //print_r($_POST); exit;
            $this->category_name = $_POST['category_name']; // please read the below note
            //$this->parent_id = $_POST['parent_id'];
           // $this->category_type_id = $_POST['category_type'];
            $this->meta_title = $_POST['title'];
            $this->meta_keywords = $_POST['keywords'];
            $this->meta_description = $_POST['description'];
             $this->menu_id = $this->input->post('menu_id');
            $this->submenu_id = $this->input->post('submenu_id');
           // $this->size_chart = $_POST['size_chart'];
          //  $this->store_id = 0;
            $this->db->update('category', $this, array('category_id' => $id));
            return true;
        }
        //to get attribute filters we use this parent category as input in where in of get attributes function
         public function getTopLvelCategory($id)
        {
                   $query = $this->db->query("SELECT T2.category_id, T2.parent_id
FROM (
    SELECT
        @r AS _category_id,
        (SELECT @r := parent_id FROM category WHERE category_id = _category_id) AS parent_id,
        @l := @l + 1 AS lvl
    FROM
        (SELECT @r := $id, @l := 0) vars,
        category m
    WHERE @r <> 0) T1
JOIN category T2
ON T1._category_id = T2.category_id
where T2.parent_id=0 
ORDER BY T1.lvl DESC");
                
                return $query->result_array();
                
        }
		 

}