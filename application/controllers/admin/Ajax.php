<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	/**
         * @file        : Ajax.php
         * @type        : Controller
         * @author      : Nagender
         * @description : 
         * @date        : 14/09/2017
	 *  
	 */
        public function __construct()
        {
                parent::__construct();
               // $this->session->set_userdata('store_id',1);
        }
	public function getAllAttributes()
	{
        $this->load->model(array('admin/Ajax_model'=>'ajax','admin/Attribute_model' => 'attribute', 'admin/Category_model' => 'category', 'admin/AttributeType_model' => 'attributetype'));
        $data = array();
        $int_category_id = 0; //to read cat id
        if ($this->input->post('categorytype_id'))
            $int_category_id = $this->input->post('categorytype_id');
        //variable declaration...
        $data['attributetype'] = $this->attributetype->get_attributeTypeWithAttr();
        $data['getAttributeTypesList'] = $this->ajax->get_attributes($int_category_id); //to store the values which will be passed to the view 

        $this->load->view('admin/partial_views/showAllAttributes', $data);
	}
        public function getAllAttributesByCategory()
	{
        $this->load->model(array('admin/Ajax_model'=>'ajax','admin/Attribute_model' => 'attribute', 'admin/Category_model' => 'category', 'admin/AttributeType_model' => 'attributetype'));
        $data = array();
        $int_category_id = 0; //to read cat id
        if ($this->input->post('category_id'))
        {
            $int_category_id = $this->input->post('category_id');
        }
        if ($this->input->post('category_type_id'))
        {
            $int_categorytype_id = $this->input->post('category_type_id');
        }
        //variable declaration...
        $data['attributetype'] = $this->attributetype->get_attributetype();
        $data['getAttributeTypesList'] = $this->ajax->get_attributesbycategory($int_category_id,$int_categorytype_id); //to store the values which will be passed to the view 

        $this->load->view('admin/partial_views/showAllAttributes', $data);
	}
        public function eventOnProduct() {
             $this->load->model(array('admin/Ajax_model'=>'ajax','admin/product_model'=>'product'));
             $product_id = 0; //to read prod id
        if ($this->input->post('product_id'))
        {
            $product_id = $this->input->post('product_id');
            $type = $this->input->post('typeofAction');
            $res = $this->ajax->productAction($product_id,$type); 
        }
        echo $res;
        }
         public function eventOnERickshaw() {
             $this->load->model(array('admin/Ajax_model'=>'ajax','admin/product_model'=>'product'));
             $product_id = 0; //to read prod id
        if ($this->input->post('product_id'))
        {
            $product_id = $this->input->post('product_id');
            $type = $this->input->post('typeofAction');
            $res = $this->ajax->eRickshawAction($product_id,$type); 
        }
        echo $res;
        }
        public function eventOnBattery() {
             $this->load->model(array('admin/Ajax_model'=>'ajax','admin/Battery_model'=>'product'));
             $product_id = 0; //to read prod id
        if ($this->input->post('product_id'))
        {
            $product_id = $this->input->post('product_id');
            $type = $this->input->post('typeofAction');
            $res = $this->ajax->BatteryAction($product_id,$type); 
        }
        echo $res;
        }
         public function eventOnContlr() {
             $this->load->model(array('Common_model' => 'common'));
             $id = 0; //to read prod id
        if ($this->input->post('id'))
        {
            $id = $this->input->post('id');
            $type = $this->input->post('typeofAction');
            $res = $this->common->modelAction($table="pickup_location",$col="status",$id,$type); 
        }
        echo $res;
        }
        public function deleteAttrType() {
             $this->load->model(array('admin/Ajax_model'=>'ajax'));
             $id = 0; //to read prod id
        if ($this->input->post('id'))
        {
            $id = $this->input->post('id');
            $res = $this->ajax->destroyAttrType($id); 
        }
        echo $res;
        }
        
         public function deleteAttrtibute() {
             $this->load->model(array('admin/Ajax_model'=>'ajax'));
             $id = 0; //to read prod id
        if ($this->input->post('id'))
        {
            $id = $this->input->post('id');
            $res = $this->ajax->destroyAttributes($id); 
        }
        echo $res;
        }
         public function deleteSliderImages() {
             $this->load->model('admin/Slider_model','ajax1');
             $id = 0; //to read prod id
        if ($this->input->post('id'))
        {
            $id = $this->input->post('id');
            
            if(isset($id) && ($id>0)){
                $query_result = $this->ajax1->get_sliders($id);
                foreach($query_result as $row){
             if (file_exists("public/uploads/admin/sliders/$row->name")) {
                 unlink( "public/uploads/admin/sliders/$row->name" );
                }
            }
             $res = $this->ajax1->destroySlider($id);
             if($res)
             {
                 echo 1;
             }
            }
          
        }
       
        }
          public function deleteERickshawImages() {
             $this->load->model('admin/ERickshawFactory_model','ajax1');
             $id = 0; //to read prod id
        if ($this->input->post('id'))
        {
            $id = $this->input->post('id');
            
            if(isset($id) && ($id>0)){
                $query_result = $this->ajax1->get_sliders($id);
                foreach($query_result as $row){
             if (file_exists("public/uploads/admin/erickshawfactory/$row->manufacturer_logo")) {
                 unlink( "public/uploads/admin/erickshawfactory/$row->manufacturer_logo" );
                }
                if (file_exists("public/uploads/admin/erickshawfactory/$row->brand_logo")) {
                 unlink( "public/uploads/admin/erickshawfactory/$row->brand_logo" );
                }
                if (file_exists("public/uploads/admin/erickshawfactory/$row->brand_banner")) {
                 unlink( "public/uploads/admin/erickshawfactory/$row->brand_banner" );
                }
            }
             $res = $this->ajax1->destroyERickshaw($id);
             if($res)
             {
                 echo 1;
             }
            }
          
        }
       
        }
        public function deleteTermsDocs() {
             $this->load->model('admin/merchant/TermsMgmt_model','ajax1');
             $id = 0; //to read prod id
        if ($this->input->post('id'))
        {
            $id = $this->input->post('id');
            
            if(isset($id) && ($id>0)){
                //$query_result = $this->ajax1->get_sliders($id);
             
             $res = $this->ajax1->destroy($id);
             if($res)
             {
                 echo 1;
             }
            }
          
        }
       
        }
         /* admin category delete from ajax from category view */
         public function deleteCategory() {
             $this->load->model(array('admin/Ajax_model'=>'ajax'));
             $id = 0; //to read prod id
        if ($this->input->post('id'))
        {
            $id = $this->input->post('id');
            $res = $this->ajax->deleteCategory($id); 
        }
        echo $res;
        }
        public function getSubCategories() {
               $this->load->model(array('admin/Ajax_model'=>'ajax'));
            // $id = 0; //to read prod id
        if ($this->input->post('cat_id'))
        {
            $cat_id = $this->input->post('cat_id');
            $data['subCat'] = $this->ajax->getSubCategory($cat_id); 
            //echo $this->db->last_query();exit;
            $this->load->view('admin/partial_views/showSubCat', $data);
        }
       //echo $res;
        }
        public function getBrands() {
               $this->load->model(array('admin/Ajax_model'=>'ajax'));
            // $id = 0; //to read prod id
        if ($this->input->post('cat_id'))
        {
            $cat_id = $this->input->post('cat_id');
            $data['brands'] = $this->ajax->getBrands($cat_id); 
       //   echo $this->db->last_query();exit;
            $this->load->view('admin/partial_views/showBrands', $data);
        }
       //echo $res;
        }
	//to get models from make
        public function getDependecies() {
               $this->load->model(array('admin/Ajax_model'=>'ajax'));
            // $id = 0; //to read prod id
        if ($this->input->post('value'))
        {
            $value = $this->input->post('value');
            $data['subCat'] = $this->ajax->getModelDependecies($value); 
           //echo $this->db->last_query();exit;
            $this->load->view('admin/partial_views/showModel', $data);
        }
     
        }
        //to get models from make
        public function getVarientDependecies() {
               $this->load->model(array('admin/Ajax_model'=>'ajax'));
            // $id = 0; //to read prod id
        if ($this->input->post('value'))
        {
            $value = $this->input->post('value');
            $data['subCat'] = $this->ajax->getVarientDependecies($value); 
            //echo $this->db->last_query();exit;
            $this->load->view('admin/partial_views/showVarients', $data);
        }
     
        }
        public function AdminApproveImage() {
			 
			 
			 
             $this->load->model(array('admin/Ajax_model'=>'ajax'));
             $image_id = 0; //to read prod id
			 
			 
          if ($this->input->post('image_id'))
          {  
	         $product_id = $this->input->post('product_id');
              $image_id = $this->input->post('image_id');
              $type = $this->input->post('typeofAction');
              $res = $this->ajax->AdminApproveImage($product_id,$image_id,$type); 
			//  log_message('error',$this->db->last_query());
			 // log_message('error','nag');
			  log_message('debug', 'Some variable was correctly set'.date("H:i:s") .$this->db->last_query());
         }
        echo $res;
		
		
		
        }
        public function getDeliveryLocations() {
          $this->load->model(array('Common_model' => 'common'));
             $id = 0; //to read prod id
               
        if ($this->input->post('pincode'))
        {
            $pincode = $this->input->post('pincode');
            $where_cond = array(
                            "pincode" => $pincode, 
                        );
            //$id = $this->input->post('id');
            $data['delivery_locations'] = $this->common->getTableData($tablename="delivery_location", $cols="*",$where_cond); 
       // echo $this->db->last_query();exit;
            $this->load->view('admin/partial_views/showdeliveryLocations', $data);
        }
      //echo $res;
        }
      public function getPickupLocations() {
               $this->load->model(array('Common_model' => 'common'));
             $id = 0; //to read prod id
               
        if ($this->input->post('id'))
        {
            $id = $this->input->post('id');
            $where_cond = array(
                            "id" => $id, 
                        );
            //$id = $this->input->post('id');
            $data['pickup_locations'] = $this->common->getTableData($tablename="pickup_location", $cols="*",$where_cond); 
       // echo $this->db->last_query();exit;
            $this->load->view('admin/partial_views/showpickups', $data);
        }
      //echo $res;
        }
              public function updatePickupLocation() {
               $this->load->model(array('Common_model' => 'common'));
             $id = 0; //to read prod id
               
        if ($this->input->post('id'))
        {
            $id = $this->input->post('id');
            $order_id = $this->input->post('order_id');
            $where_cond = array(
                            "order_id" => $order_id, 
                        );
            $parameters = array(
                            "pickup_location_id" => $id, 
                        );
            //$id = $this->input->post('id');
             $res = $this->common->update($tablename="orders", $parameters,$where_cond); 
      // echo $this->db->last_query();exit;
           // $this->load->view('admin/partial_views/showpickups', $data);
        }
      echo $res;
        }
        /* getSubMenu on 26/10/2018 in category view */
         public function getSubMenu() {
               $this->load->model(array('Common_model' => 'common'));
            // $id = 0; //to read prod id
        if ($this->input->post('menu_id'))
        {
            $menu_id = $this->input->post('menu_id');
            $where_cond = array(
                            "menu_id" => $menu_id, 
                        );
            $data['submenus'] = $this->common->getTableData("submenu","submenu_id,name",$where_cond); 
            //$data['subCat'] = $this->ajax->getSubCategory($cat_id); 
            //echo $this->db->last_query();exit;
            $this->load->view('admin/partial_views/showSubMenu', $data);
        }
       //echo $res;
        }
        
        
}
