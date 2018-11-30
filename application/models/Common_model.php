<?php

class Common_model extends CI_Model {

    public function insertdata($tablename, $parameters) {

        $this->db->insert($tablename, $parameters);
        return $this->db->insert_id();
    }

    public function selectdata($tablename, $condition, $limit_value = 1) {

//$condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
        $this->db->select('*');
        $this->db->from("$tablename");
        $this->db->where($condition);
        $this->db->limit($limit_value);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getTableData($tablename, $cols, $where_cond = array(), $order_by = "", $order_col = "") {

//$condition = "user_name =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
        $this->db->select("$cols");
        $this->db->from("$tablename");
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

    public function updateProductInventoy($table = 'product', $parameters, $product_id) {
        // $this->attribute_type = $this->input->post('attribute_type'); // please read the below note
        $this->db->update('product', $parameters, array('product_id' => $product_id));
        return true;
    }

    public function update($table, $parameters, $where_cond) {

        /* $data = array(
          'title' => $title,
          'name' => $name,
          'date' => $date
          );

          $this->db->where('id', $id);
          $this->db->update('mytable', $data); */

        if ($table != '' && count($parameters) > 0 && count($where_cond) > 0) {
            foreach ($where_cond as $key => $val) {
                $this->db->where($key, $val);
            }
            // $this->attribute_type = $this->input->post('attribute_type'); // please read the below note
            $this->db->update($table, $parameters, $where_cond);
            return true;
        }
    }

    public function checkStockLevel($tablename, $product_id, $qty_value) {

//$condition = "inventory =" . "'" . $data['username'] . "' AND " . "user_password =" . "'" . $data['password'] . "'";
        $this->db->select('inventory');
        $this->db->from("product");
        $this->db->where('inventory >=', $qty_value);
        $this->db->where('product_id', $product_id);
        // $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function deleteTable($tablename, $table_id = '', $row_id) {
        if ($table_id != "" && $row_id > 0) {
            $this->db->where($table_id, $row_id);
            $this->db->delete($tablename);
            return true;
        } else {
            return false;
        }
    }

    public function get_category($id = 0, $is_parentID_given = 0, $category_type_id = 0, $only_parent_cat = 0, $show_in_navigation_menu = 0) {
        //echo $id;
        $this->db->select('category_id,category_name,parent_id,category_type_id,category_image,status,meta_title,meta_keywords,meta_description,menu_id,submenu_id');
        $this->db->from('category');
        if (isset($id) && $id > 0) {
            $this->db->where('category_id', $id);
        }
        if (isset($category_type_id) && $category_type_id > 0) {
            //  $this->db->where('category_type_id', $category_type_id);
        }
        if (isset($is_parentID_given) && $is_parentID_given > 0) {
            // $this->db->where('parent_id', $is_parentID_given);
            // $this->db->order_by('parent_id', $is_parentID_given);
        }
        if (isset($only_parent_cat) && $only_parent_cat > 0) {
            //  $this->db->where('parent_id', 2); //getting only parent is vechicles
        }
        if (isset($show_in_navigation_menu) && $show_in_navigation_menu > 0) {
            //  $this->db->where('show_in_navigation_menu', 1); //getting only parent is vechicles
        }
        $query = $this->db->get();

        return $query->result();
    }

    //Get all stores used in library 
    public function getStores($id = 0, $limit_num = 0, $new = 0) {
        //echo $id;
        $this->db->select('sl.name,s.store_id,s.store_name,s.store_slug,s.business_address,s.mobile_number,s.status,s.created_date,s.featured');
        $this->db->from('store s');
        $this->db->join('slider sl', 's.store_id=sl.store_id', 'LEFT');
        $this->db->join('admin a', 'a.store_id=s.store_id', 'LEFT');
        if (isset($id) && $id > 0) {
            $this->db->where('s.store_id', $id);
        }
        $this->db->where_not_in('s.store_id', 1);
        if (isset($limit_num) && $limit_num > 0) {
            $this->db->limit($limit_num);
        }

        if (isset($new) && $new > 0) {
            $date = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') - 15, date('Y')));
            //$this->db->where('s.created_date >',$date);
        }
        $this->db->group_by('s.store_id');

        $this->db->where('a.status', 1);

        $query = $this->db->get();

        return $query->result();
    }

    //to display category products products in home page
    public function get_tabedCatProducts1($order = '', $brand_id = 0) {
        $this->db->select("cat.category_id,cat.category_name,pimg.make_primary,pimg.image_path,prod.product_id,prod.name,prod.offer_price,prod.inventory,prod.full_description,prod.upload_date,prod.actual_price,prod.sku");
        $this->db->from('product prod');
        $this->db->join('product_images pimg', 'prod.product_id=pimg.product_id', 'INNER');
        $this->db->join('product_category pcat', 'prod.product_id=pcat.product_id', 'INNER');
        $this->db->join('category cat', 'cat.category_id=pcat.category_id', 'INNER');
        $this->db->join('brand b', 'b.brand_id = prod.brand_id', 'LEFT');

        if (isset($order) && $order != '') {
            $this->db->order_by('prod.upload_date', $order);
        }
        if (isset($brand_id) && $brand_id > 0) {
            $this->db->where('prod.brand_id', $brand_id);
        }
        // if (isset($cat_id) && $cat_id > 0) {
        //  $this->db->where('pimg.admin_uploaded', 1);// admin should aprove to view product image
        // }
        //$this->db->limit('8');
        $this->db->where('prod.archive', 0);
		//$this->db->where('pimg.make_primary', 1);
		//$this->db->where('pimg.admin_uploaded', 1);
        $this->db->group_by('prod.product_id');
        $query = $this->db->get();

//echo $this->db->last_query();
        return $query->result();
    }

    public function get_tabedCatProducts($order = '', $cat_id = 0,$menu_request=0) {
        $this->db->select("pimg.make_primary, pimg.childImage,b.name as brname,cat.category_id,cat.category_name,pimg.image_path,prod.product_id,prod.name,(prod.offer_price-prod.coupon_value) as offer_price,prod.inventory,prod.full_description,prod.upload_date,prod.actual_price,prod.sku,m.model_name as model,v.name as varient,my.manufacture_year as manf_year,prod.need_registration,prod.need_driving_license,prod.special_offer,prod.special_offer_text");
        $this->db->from('product prod');
        $this->db->join('product_images pimg', 'prod.product_id=pimg.product_id', 'INNER');
        $this->db->join('product_category pcat', 'prod.product_id=pcat.product_id', 'INNER');
        $this->db->join('category cat', 'cat.category_id=pcat.category_id', 'INNER');
        $this->db->join('brand b', 'b.brand_id = prod.brand_id', 'LEFT');
        $this->db->join('m_registration make', 'make.m_registration_id=prod.make_id', 'left'); // causing product_id ambiguous dont touch now
        $this->db->join('model m', 'prod.model_id=m.model_id', 'left'); // causing product_id ambiguous dont touch now
        $this->db->join('variant v', 'prod.variant_id=v.variant_id', 'left');
        $this->db->join('manufacture_year my', 'prod.manufacture_year_id=my.manufacture_year_id', 'left');
        if (isset($order) && $order != '') {
            $this->db->order_by('prod.upload_date', $order);
        }
        if (isset($cat_id) && $cat_id > 0) {
            $this->db->where('cat.category_id', $cat_id);
        }
         if (isset($menu_request) && $menu_request > 0) {
            $this->db->where('pimg.make_primary', 1);
       }
        // if (isset($cat_id) && $cat_id > 0) {
        //  $this->db->where('pimg.admin_uploaded', 1);// admin should aprove to view product image
        // }
        //$this->db->limit('8');
        $this->db->where('prod.archive', 0);
		$this->db->where('pimg.make_primary', 1);
		$this->db->where('pimg.admin_uploaded', 1);
        $this->db->group_by('prod.product_id');
        $query = $this->db->get();


        return $query->result();
    }

    //for product filter in front pages
    // Here $cat_id is top level parent of category id
    public function get_attributes($id = 0, $cat_id = 0, $cat_type = 0) {
        $this->db->select("GROUP_CONCAT(DISTINCT CONCAT(a.name,'~',a.attribute_id) SEPARATOR ', ') as name,GROUP_CONCAT(DISTINCT a.attribute_id) as attribute_id ,atm.*");
        $this->db->from('attribute_type_mas atm');
        $this->db->join('attributes a', 'atm.attribute_type_id=a.attribute_type_id', 'INNER');
        $this->db->join('product_attributes patr', 'a.attribute_id=patr.attribute_id', 'INNER'); //from here new one
        $this->db->join('product p', 'p.product_id=patr.product_id', 'INNER');
        $this->db->join('product_category pcat', 'p.product_id=pcat.product_id', 'INNER');
        $this->db->join('category cat', 'cat.category_id=pcat.product_category_id', 'INNER');

        if (isset($id) && $id > 0) {
            $this->db->where('a.attribute_id', $id);
        }
        if (isset($cat_type) && $cat_type > 0) {
            $this->db->where('a.category_type_id', $cat_type);
        }
        if (isset($_REQUEST['country']) && ($_REQUEST['country'] != '')) {
            $this->db->like('p.name', $_REQUEST['country']);
        }
        if (isset($cat_id) && $cat_id > 0) {
            $this->db->where("FIND_IN_SET('$cat_id',a.category_ids) !=", 0);
        }
        $this->db->group_by('atm.attribute_type_id');
        $this->db->order_by('atm.attribute_type_id');
        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->result();
    }

    public function get_stores($id = 0, $slider_category_id = 0) {
        $store_id = $this->session->userdata('admin_data')['store_id'];

        $this->db->select('slider_id,name,slider_text,link_to_category,slider_category_id');
        $this->db->from('slider');
        if (isset($slider_category_id) && $slider_category_id > 0) {
            $this->db->where('slider_category_id', $slider_category_id);
        }
        $this->db->order_by('display_order', 'ASC');
        if (isset($store_id) && ($store_id == 1)) {
            $this->db->where('store_id', $store_id);
        }
        $query = $this->db->get();

        return $query->result();
    }

    public function getAttrColumns() {


        $this->db->select('attribute_type,attribute_type_id');
        $this->db->from('attribute_type_mas');
        $this->db->order_by('attribute_type', 'ASC');

        $query = $this->db->get();

        return $query->result();
    }

    public function getAttrData() {
        $this->db->select('t.attribute_type,a.attribute_type_id,a.name,a.attribute_id');
        $this->db->from('attribute_type_mas t');
        $this->db->join('attributes a', 't.attribute_type_id=a.attribute_type_id', 'INNER');
        $query = $this->db->get();

        return $query->result();
    }

    public function getStoreBannerNLogo($slug = "") {
        $this->db->select('str.featured,sl.slider_category_id,sl.name,str.store_name,str.store_slug');
        $this->db->from('slider sl');
        $this->db->join('store str', 'sl.store_id= str.store_id', 'INNER');
        if (isset($slug) && ($slug != '')) {
            $this->db->where('str.store_slug', $slug);
        }
        $this->db->where('str.store_id !=', 1);
        $query = $this->db->get();

        return $query->result();
    }

    public function getTermDocs() {
        $this->db->select('a.*');
        $this->db->from('m_terms_docs a');
        $this->db->join('m_category b', 'a.m_category_id= b.m_category_id', 'INNER');

        $this->db->where('a.status', 1);
        $query = $this->db->get();

        return $query->result();
    }

    public function getBrands($cat_id) {
        $this->db->select('a.brand_id,a.name,a.status,cd.category_name');
        $this->db->from('brand a');
        $this->db->join('category cd', 'cd.category_id=a.category_id', 'inner');
        if (isset($cat_id) && $cat_id > 0) {
            $this->db->where('cd.category_id', $cat_id);
        }
        //  $this->db->where('a.status', 1);
        $query = $this->db->get();

        return $query->result();
    }

    public function check_email_registerd($email) {
        $this->db->where("username", $email);
        $query = $this->db->get('admin');

        return $query->num_rows();
    }

    public function updatePassword($newPassword, $email) {
        $this->db->set('password', $newPassword);
        $this->db->where("username", $email);
        $this->db->update("admin");
        return true;
    }

    public function updateAdminStatus($status, $email) {
        $this->db->set('status', $status);
        $this->db->where("username", $email);
        $this->db->update("admin");
    }

    public function checkForDuplicate($tablename, $cols, $where_cond = '', $type = '') {
        $this->db->select("$cols");
        $this->db->from("$tablename");
        if (is_array($where_cond) && !empty($where_cond)) {
            foreach ($where_cond as $key => $val) {
                $this->db->where($key, $val);
            }
        }

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            if ($type === "email") {
                echo 'EMAIL_EXISTS';
            } else if ($type === "mobile") {
                echo 'MOBILE_EXISTS';
            }
        } else {
            echo 'Valid';
        }
    }

    public function modelAction($table, $col, $id, $type,$table_id="") { // table name,update col name,$id value(ex:1 or 2),$type means act or deact,$table_id means table primary col id(ex:menu_id)
        if (isset($id) && ($id > 0)) {
            if (isset($table_id) && ($table_id !== "")) {
            $this->db->where($table_id, $id);
            }else{
                $this->db->where('id', $id);
            }
            $value = ($type === "activate") ? 1 : 0; //1 means archive
            $res = $this->db->update($table, array("$col" => $value));
            if ($res) {
                echo 1;
            } else {
                echo 0;
            }
        }
    }
      public function menuItems() {
        $this->db->select('m.menu_id,m.name as mainmenu,s.*,c.category_id');
        $this->db->from('submenu s');
        $this->db->join('menu m', 'm.menu_id= s.menu_id', 'LEFT');
       $this->db->join('category c', 'c.submenu_id= s.submenu_id', 'LEFT');
        
       $this->db->where('s.status',1);
      // $this->db->where('s.status',1);
      $this->db->group_by('s.submenu_id');
      //  $this->db->order_by('m.menuorder','ASC');
        $query = $this->db->get();

        return $query->result();
    }

}
