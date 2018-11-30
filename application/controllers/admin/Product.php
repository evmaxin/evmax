<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	/**
         * @file        : Product.php
         * @type        : Controller
         * @author      : Nagender
         * @description : All product related operations will be performed here
         * @date        : 19/07/2017
	 *  
	 */
       
        public function __construct()
	{
            parent::__construct();
             if(!$this->session->userdata('admin_data'))
            {
                redirect("/admin/index/login");
            }
        }
	public function index() {
            $this->session->set_userdata('requestedForDeactivation',0);
           // $this->session->set_userdata('requestedForDeactivation',0);
            $data['title'] = "Products";
            //Product attributes will be appeared based on Category Type with AJAX
        $this->load->model(array('admin/Attribute_model' => 'attribute', 'admin/Category_model' => 'category', 'admin/AttributeType_model' => 'attributetype', 'admin/Product_model' => 'product','Common_model' => 'common'));
        $data['datatable_path'] = "admin/Product/ajax_list"; // must and should declare this value
         //$data['ajax'] = $this->ajax->get_attributes();
       //  print_r($data['ajax']); exit;
        //$data['attributetype'] = $this->attributetype->get_attributetype();
       // $data['attributes'] = $this->attribute->get_attributes();
        $data['categories'] = $this->category->get_category();
        //$data['getMakes'] = $this->common->getTableData();
        $where_cond = array(
            'otp_status' => 1
        );
        $data['getMakes'] = $this->common->getTableData($tablename = "m_registration", $cols = "company_name,m_registration_id", $where_cond);
        $data['manufacture_years'] = $this->common->getTableData($tablename = "manufacture_year", $cols = "manufacture_year_id,manufacture_year");
        //$data['subcategories'] = $this->category->get_subcategory();
        //$data['categorytypes'] = $this->category->get_category_types();
        $template['content'] = $this->load->view('admin/product/index', $data, TRUE);
       // $template['ajaxscript'] = $this->load->view('admin/product/ajaxscript', $data, TRUE);
        $this->load->view('admin/template_DT', $template); //For data tables only template
         }
         public function requestedForDeactivation() {
             
             $this->session->set_userdata('requestedForDeactivation',1);
            $data['title'] = "Products- requestedForDeactivation";
            //Product attributes will be appeared based on Category Type with AJAX
        $this->load->model(array('admin/Attribute_model' => 'attribute', 'admin/Category_model' => 'category', 'admin/AttributeType_model' => 'attributetype', 'admin/Product_model' => 'product','Common_model' => 'common'));
        $data['datatable_path'] = "admin/Product/ajax_list"; // must and should declare this value
         //$data['ajax'] = $this->ajax->get_attributes();
       //  print_r($data['ajax']); exit;
        //$data['attributetype'] = $this->attributetype->get_attributetype();
       // $data['attributes'] = $this->attribute->get_attributes();
        $data['categories'] = $this->category->get_category();
        //$data['getMakes'] = $this->common->getTableData();
        $where_cond = array(
            'otp_status' => 1
        );
        $data['getMakes'] = $this->common->getTableData($tablename = "m_registration", $cols = "company_name,m_registration_id", $where_cond);
        $data['manufacture_years'] = $this->common->getTableData($tablename = "manufacture_year", $cols = "manufacture_year_id,manufacture_year");
        //$data['subcategories'] = $this->category->get_subcategory();
        //$data['categorytypes'] = $this->category->get_category_types();
        $template['content'] = $this->load->view('admin/product/index', $data, TRUE);
       // $template['ajaxscript'] = $this->load->view('admin/product/ajaxscript', $data, TRUE);
        $this->load->view('admin/template_DT', $template); //For data tables only template
         }


        public function details($id)
	{
		
              $models = array(
                //            'AttributeType_model' => 'attributetype',
               //             'Attribute_model' => 'attribute',
                            'admin/Product_model' =>'product',
                //            'Category_model' =>'category'
                                );
                $this->load->model($models);
		
           // $data['attributetype'] = $this->attributetype->get_attributetype();
            //$data['attributes'] = $this->attribute->get_attributes();
            //$data['categories'] = $this->category->get_category();
            $data['products'] = $this->product->get_product($id);
            $data['productimages'] = $this->product->get_productimages($id);
            $template['content'] = $this->load->view('admin/product/details',$data, TRUE);
            $this->load->view('admin/template',$template);//For data tables only template
            
	}
        private function set_upload_options()
    {   
        //upload an image options
        $config = array();
        $config['upload_path'] = './public/uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = '2048';
        $config['overwrite']     = FALSE;

        return $config;
    }
	public function add() {
               $config = array(
            array(
                'field' => 'product_gst',
                'label' => 'GST',
                'rules' => 'trim|required|numeric|min_length[1]'
            ),
           array(
                'field' => 'product_cgst',
                'label' => 'CGST',
                'rules' => 'trim|required|numeric|min_length[1]'
            ),
           array(
                'field' => 'product_sgst',
                'label' => 'SGST',
                'rules' => 'trim|required|numeric|min_length[1]|matches[product_cgst]'
            ),
        );

        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE) {
            $this->index();
        }else{
        //loading libraries
        $libraries = array(
            'Product_lib' => 'product_lib',
        );
        $this->load->library($libraries);
       
        
        
        
        //varibale initilization
        $sku ="";
        $name = "";
        $actual_price = 0;
        $offer_price = 0;
        $product_cost = 0;
        $inventory = 0;
        $special_offer = 0;
        $special_offer_text='';
        $full_description ="";
        $store_id = 0;
        $request_form = 'WEB';
        $request_format = "ARRAY";
        $response_format = "ARRAY";
        
         $this->load->model(array('admin/Attribute_model'=>'attribute','admin/Category_model'=>'category','admin/AttributeType_model'=>'attributetype','admin/Product_model'=>'product'));
         $data['attributetype'] = $this->attributetype->get_attributetype();
        
        if (!isset($_POST['add'])) {
              //loading models
           
            $data['attributes'] = $this->attribute->get_attributes();
            $data['categories'] = $this->category->get_category();
            $this->load->view('admin/product/add',$data);
        } else {
            $this->load->library('upload');
            $data['upload_data'] = '';
           
             
            if($this->session->userdata('admin_data'))
            {
                $sku = $this->session->userdata('admin_data')['store_id'].strtoupper(uniqid());
           } else {
              $sku = strtoupper(uniqid()); 
           }
            if($this->input->post('name'))
            {
                $name = $this->input->post('name');
            }
            if($this->input->post('actual_price'))
            {
                $actual_price = $this->input->post('actual_price');
            }
            if($this->input->post('offer_price'))
            {
                $offer_price = $this->input->post('offer_price');
            }
            
            if($this->input->post('inventory'))
            {
                $inventory = $this->input->post('inventory');
            }
            if($this->input->post('full_description'))
            {
                $full_description = $this->input->post('full_description');
            }
            if($this->session->userdata('admin_data'))
            {
                $store_id = $this->session->userdata('admin_data')['store_id'];
            }
            if($this->input->post('special_offer'))
            {
                $special_offer = $this->input->post('special_offer');
            }
            if($this->input->post('special_offer_text'))
            {
                $special_offer_text = $this->input->post('special_offer_text');
            }
          
//echo $this->input->post('valid_to');
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
         // We can use this array in multiple purposes like without direct touching post values to model layer we are insrerting
        // If we use mobile insert like $this->post('some_value'), then also we can  insert post values without touching model layer
            $parameters = array(
                'sku' => $sku,
                'name' => $name,
                'actual_price' => round($actual_price),
                'offer_price' => round($offer_price),
                //'product_cost' => $product_cost, // for internall purpose of admin
                'inventory' => $inventory,
                'full_description' => $full_description,
                'store_id' => $store_id,
                 'make' => $this->input->post('make'),
                'model_id' => $this->input->post('model'), // changes done on 18082018 without controller data passing
                'variant_id' => $this->input->post('variant'),
                'manufacture_year_id' => $this->input->post('manufacture_year'),
                'brand_id' => $this->input->post('brand_id'),
                'speed' => $this->input->post('speed'),
                'rrange' => $this->input->post('range'),
                'motor_output' => $this->input->post('motor_output'),
                'batterytype' => $this->input->post('batterytype'),
                'wheel_diameter' => $this->input->post('wheeldiameter'),
                'need_registration' => $this->input->post('need_registration'),
                'need_driving_license' => $this->input->post('need_driving_license'),
                'valid_from' => $this->input->post('valid_from'),
                'valid_to' => $this->input->post('valid_to'),
                'commission' => round($this->input->post('commission')),
                'special_offer' => $special_offer,
                'special_offer_text' => $special_offer_text,
                'exchange_benefit' => $this->input->post('exchange_benefit'),
                'exchange_note' => $this->input->post('exchange_note'),
                'offer_from_date' => $this->input->post('offer_from_date'),
                'offer_to_date' => $this->input->post('offer_to_date'),
                'exchange_from_date' => $this->input->post('exchange_from_date'),
                'exchange_to_date' => $this->input->post('exchange_to_date'),
                'delivery_charges' => $this->input->post('delivery_charges'),
                'voltage' => $this->input->post('voltage'),
                'warranty' => $this->input->post('warranty'),
                'am' => $this->input->post('am'),
                'product_gst' => $this->input->post('product_gst')?$this->input->post('product_gst'):0,
                'product_cgst' => $this->input->post('product_cgst')?$this->input->post('product_cgst'):0,
                'product_sgst' => $this->input->post('product_sgst')?$this->input->post('product_sgst'):0,
                'shipping_gst' => $this->input->post('shipping_gst')?$this->input->post('shipping_gst'):0,
                'shipping_cgst' => $this->input->post('shipping_cgst')?$this->input->post('shipping_cgst'):0,
                'shipping_sgst' => $this->input->post('shipping_sgst')?$this->input->post('shipping_sgst'):0,
                'handling_gst' => $this->input->post('handling_gst')?$this->input->post('handling_gst'):0,
                'handling_cgst' => $this->input->post('handling_cgst')?$this->input->post('handling_cgst'):0,
                'handling_sgst' => $this->input->post('handling_sgst')?$this->input->post('handling_sgst'):0,
                'delivery_cost' => $this->input->post('delivery_cost')?$this->input->post('delivery_cost'):0,
                'handling_cost' => $this->input->post('handling_cost')?$this->input->post('handling_cost'):0,
               
                
            );
            //print_r($parameters);exit;
            //checking images validations like size and dimentions
            for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                    //$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    //$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];
                    
                    list($width, $height) = getimagesize($_FILES['userfile']['tmp_name']);
                    
                    if($width < "400" || $height < "500") {
                        $this->session->set_flashdata('fail', 'Image '.$_FILES['userfile']['name'].' width or hieght less than mentioned measurements.');
                      redirect("admin/product");
                     }
                     //echo $_FILES['userfile']['size'];exit;
                     if($_FILES['userfile']['size']> "2190000") {
                        $this->session->set_flashdata('fail', 'Image '.$_FILES['userfile']['name'].' Size more than mentioned measurements.');
                      redirect("admin/product");
                     }
                     
                  
                }
            //Products adding from library for multiporuse  use like web, mobile
            $res = $this->product_lib->add($parameters,$request_form,$request_format, $response_format);
            
             //Dynamic attribute types and attributes data with post values extractions
             foreach ($data['attributetype'] as $type):
                $attribute_type = $type->attribute_type; // ex:Color
                if (isset($_POST["$attribute_type"])) {
                    foreach ($_POST["$attribute_type"] as $key => $val):
                        //      echo $key." ".$val."<br>";
                        $attributes_batch[] = array(
                            "product_id" => $res,
                            "attribute_type_id" => $type->attribute_type_id,
                            "attribute_id" => $val,
                            "price" => 0
                        );
                        //$this->product->insertattributes($attribute_parameters);
                    endforeach;
                }
            endforeach;
            
            
                 //single product may in Multiple categories

                if (isset($_POST["category"])) {
                    //foreach ($_POST["category"] as $key => $val):
                        //      echo $key." ".$val."<br>";
                        $category_batch = array(
                            "product_id" => $res,
                            "category_id" => $this->input->post('category'),
                            "sub_category_id" => $this->input->post('subCategories')?$this->input->post('subCategories'):0,
                            "category_type_id" => $this->input->post('category_type_id')
                               );
                 // endforeach;
                }
        
            /*
              * Need to add from LIBRARY , TAKE CARE ABOUT THIS two inserts
              */
             //Products Attributes adding from library for multiporuse  use like web, mobile 
        //     $this->product_lib->add_product_attributes($batch,$request_form,$request_format, $response_format);
           if(!empty($attributes_batch)){     
        $this->db->insert_batch('product_attributes', $attributes_batch);
           }
           if(!empty($category_batch)){
        $this->db->insert('product_category', $category_batch);
           }
        //echo $this->db->last_query(); 

             //image upload
            if ($res>0) {
                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['userfile']['name'] = time().$files['userfile']['name'][$i];
                    $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];
                    $this->upload->initialize($this->set_upload_options());
                    $this->upload->do_upload();
                    $image_path = str_replace(' ', '_', $_FILES['userfile']['name']); // Replacing space with underscore in file uploads
                    $is_admin =($this->session->userdata('admin_data')['admin_id'] === '1')?1:1;
                    $image_parameters = array(
                        'product_id' => $res,
                        'image_path' => $image_path,
                        'admin_uploaded' => $is_admin
                    );
                  $this->product->insert_product_images($image_parameters);
                }

                
            }
             if ($res>0) {
            $this->session->set_flashdata('success', 'Product and details added successfully');
             }
           redirect('/admin/product/');
        }
        }//if validation success
        
             }
	public function edit($id)
	{   
           
             $this->input->post('target_tab');
                $models = array(
                            'admin/AttributeType_model' => 'attributetype',
                            'admin/Attribute_model' => 'attribute',
                            'admin/Product_model' =>'product',
                            'admin/Category_model' =>'category',
                            'Common_model' => 'common'
                    
                                );
                $this->load->model($models);
		if(!isset($_POST['update']))
		{
            $data['products'] = $this->product->get_product($id,$cat_id=array(),$attribute_ids=array(),$limit=0, $start=0,$from_home_page=0,$new_arrvial_flag=0,$child_img=1);
			$data['childImage']= $this->product->get_product_childImages($id);
			 $data['productActive'] = $this->product->get_product_Subinfo($id);
           // echo $this->db->last_query(); exit;
           // $data['productimages'] = $this->product->get_productimages($id);
            $data['attributetype'] = $this->attributetype->get_attributetype();
            $data['attributes'] = $this->attribute->get_attributes();
            $data['categories'] = $this->category->get_category($id=0);
            $template['extrascript'] = $this->load->view('admin/product/extrascript', $data, TRUE);
             $where_cond = array(
            'otp_status' => 1
        );
        $data['getMakes'] = $this->common->getTableData($tablename = "m_registration", $cols = "company_name,m_registration_id", $where_cond);
        $data['manufacture_years'] = $this->common->getTableData($tablename = "manufacture_year", $cols = "manufacture_year_id,manufacture_year");
            $template['content'] = $this->load->view('admin/product/edit', $data, TRUE);
            $this->load->view('admin/template', $template);

		}
	}
        public function update($pid) {

        $id = ($this->uri->segment('4'))?$this->uri->segment('4'):$pid;  //product id 
        
        //varibale initilization
        $sku = "";
        $name = "";
        $actual_price = 0;
        $offer_price = 0;
        //$product_cost = 0;
        $inventory = 0;
        $full_description = "";
        $special_offer =0;
        $special_offer_text ='';
        $this->load->model(array('admin/Attribute_model'=>'attribute','admin/Category_model'=>'category','admin/AttributeType_model'=>'attributetype','admin/Product_model'=>'product','Common_model'=>'common'));
            $data['attributetype'] = $this->attributetype->get_attributetype();
	$data['attributes'] = $this->attribute->get_attributes();
            $data['categories'] = $this->category->get_category();
         if ($this->input->post('sku')) {
            $sku = $this->input->post('sku');
        }
        if ($this->input->post('name')) {
            $name = $this->input->post('name');
        }
        if ($this->input->post('actual_price')) {
            $actual_price = $this->input->post('actual_price');
        }
        if ($this->input->post('offer_price')) {
            $offer_price = $this->input->post('offer_price');
        }
       
        if ($this->input->post('inventory')) {
            $inventory = $this->input->post('inventory');
        }
        if ($this->input->post('full_description')) {
            $full_description = $this->input->post('full_description');
        }
        if($this->input->post('special_offer'))
            {
                $special_offer = ($this->input->post('special_offer')=='on')?1:0;
            }
            if($this->input->post('special_offer_text'))
            {
                $special_offer_text = $this->input->post('special_offer_text');
            }

        $parameters = array(
            //'sku' => $sku,
            //'name' => $name,
            'actual_price' => round($actual_price),
            'offer_price' => round($offer_price),
            //'product_cost' => $product_cost, // for internall purpose of admin
            'inventory' => $inventory,
            'full_description' => $full_description,
            'special_offer' => $special_offer,
            'special_offer_text' => $special_offer_text,
            'upload_date' => date('Y-m-d H:i:s'),
             'exchange_benefit' => $this->input->post('exchange_benefit'),
                'exchange_note' => $this->input->post('exchange_note'),
            'valid_from' => date('Y-m-d',strtotime($this->input->post('valid_from'))),
                'valid_to' => date('Y-m-d',strtotime($this->input->post('valid_to'))),
                'offer_from_date' => date('Y-m-d',strtotime($this->input->post('offer_from_date'))),
                'offer_to_date' => date('Y-m-d',strtotime($this->input->post('offer_to_date'))),
                'exchange_from_date' => date('Y-m-d',strtotime($this->input->post('exchange_from_date'))),
                'exchange_to_date' => date('Y-m-d',strtotime($this->input->post('exchange_to_date'))),
                'delivery_charges' => $this->input->post('delivery_charges'),
                'voltage' => $this->input->post('voltage'),
                'warranty' => $this->input->post('warranty'),
                'am' => $this->input->post('am'),
                'batterytype' => $this->input->post('batterytype'),
            'manufacture_year_id' => $this->input->post('manufacture_year'),
                'speed' => $this->input->post('speed'),
                'rrange' => $this->input->post('range'),
                'motor_output' => $this->input->post('motor_output'),
                'batterytype' => $this->input->post('batterytype'),
                'wheel_diameter' => $this->input->post('wheeldiameter'),
                'need_registration' => $this->input->post('need_registration'),
                'need_driving_license' => $this->input->post('need_driving_license'),
		'commission' => round($this->input->post('commission')),
                'coupon_value' => round($this->input->post('coupon_value')),
                'product_gst' => $this->input->post('product_gst')?$this->input->post('product_gst'):0,
                'product_cgst' => $this->input->post('product_cgst')?$this->input->post('product_cgst'):0,
                'product_sgst' => $this->input->post('product_sgst')?$this->input->post('product_sgst'):0,
                'shipping_gst' => $this->input->post('shipping_gst')?$this->input->post('shipping_gst'):0,
                'shipping_cgst' => $this->input->post('shipping_cgst')?$this->input->post('shipping_cgst'):0,
                'shipping_sgst' => $this->input->post('shipping_sgst')?$this->input->post('shipping_sgst'):0,
                'handling_gst' => $this->input->post('handling_gst')?$this->input->post('handling_gst'):0,
                'handling_cgst' => $this->input->post('handling_cgst')?$this->input->post('handling_cgst'):0,
                'handling_sgst' => $this->input->post('handling_sgst')?$this->input->post('handling_sgst'):0,
                'delivery_cost' => $this->input->post('delivery_cost')?$this->input->post('delivery_cost'):0,
                'handling_cost' => $this->input->post('handling_cost')?$this->input->post('handling_cost'):0
          
        );
        // Need to do once design comes
        $result = $this->product->update($parameters, $id);
           // echo $this->db->last_query(); exit;
            
            //redirect('/admin/Product/index/');
        
        	    //Dynamic attribute types and attributes data with post values extractions
             foreach ($data['attributetype'] as $type):
                $attribute_type = strtolower($type->attribute_type); // ex:Color
                if (isset($_POST["$attribute_type"])) {
                    foreach ($_POST["$attribute_type"] as $key => $val):
                            $attributes_batch[] = array(
                            "product_id" => $id, 
                            "attribute_type_id" => $type->attribute_type_id,
                            "attribute_id" => $val,
                            "price" => 0
                        );
                        //$this->product->insertattributes($attribute_parameters);
                    endforeach;
                }
            endforeach;
			
			  //single product may in Multiple categories
			  
	       if (isset($_POST["category"])) {
                   // foreach ($_POST["category"] as $key => $val):
                       //   echo $key." ".$val."<br>";
                        $category_batch = array(
                              "category_id" => $_POST["category"]
                               );
                  //endforeach;
                }
                if(isset($attributes_batch) && !empty($attributes_batch))
                {
                    $this->common->deleteTable($tablename='product_attributes',$table_id='product_id',$row_id=$id);
                }
                if(isset($category_batch) && !empty($category_batch))
                {
              
                    $this->product->updateCategory($category_batch,$id);
                    //$this->common->deleteTable($tablename='product_category',$table_id='product_id',$row_id=$id);
                }
                if(!empty($attributes_batch))
                {
	$this->db->insert_batch('product_attributes', $attributes_batch);
                }
        //$this->db->insert_batch('product_category', $category_batch);
        
	/*	$files = $_FILES;
            $cpt = count($_FILES['userfile']['name']);

		if ($id>0) {
                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                    $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

                    $this->upload->initialize($this->set_upload_options());
                    $this->upload->do_upload();
                    $image_path = str_replace(' ', '_', $_FILES['userfile']['name']); // Replacing space with underscore in file uploads
                    $image_parameters = array(
                        'product_id' => $id,
                        'image_path' => $image_path
                    );
                  $this->product->insert_product_images($image_parameters);
                }

                
            }*/
            $target_tab =$this->input->post('target_tab')?$this->input->post('target_tab'):'1';
            $this->session->set_userdata('target_tab',$target_tab);
        if($result) { redirect('/admin/product/index/'); }
    }
    public function updateMetaTags($id) {
        $this->load->model(array('admin/Product_model'=>'product'));
         $data = array(
        'meta_title' => $this->input->post('title')?$this->input->post('title'):'',
        'meta_keywords' => $this->input->post('keywords')?$this->input->post('keywords'):'',
        'meta_description' => $this->input->post('description')?$this->input->post('description'):''
    );

    $this->db->where('product_id', $id);
    $result = $this->db->update('product', $data);
    if($result) { redirect("/admin/product/edit/$id"); }
    }
   public function updateProductImages() {
      

                $this->load->library('upload');
              //  $data['upload_data'] = '';
                $this->load->model(array('admin/Product_model'=>'product'));
                $files = $_FILES;
                 $cpt = count($_FILES['userfile']['name']);
                 $product_id = $this->input->post('product_id')?$this->input->post('product_id'):'0';
		         $childImage = $this->input->post('childImage')?$this->input->post('childImage'):'0';
		 
	
		    
		if ($cpt>0) {
                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['userfile']['name'] = time().preg_replace('/\d/', '',$files['userfile']['name'][$i]);
                    $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];
//$img = preg_replace('/\d/', '',$_FILES['userfile']['name']);
 //$image_path = preg_replace('/\d/', '', $img );
                    $this->upload->initialize($this->set_upload_options());
                    $this->upload->do_upload();
                    $image_path = str_replace(' ', '_', $_FILES['userfile']['name']); // Replacing space with underscore in file uploads
                    $admin_uploaded = ($this->session->userdata('admin_data')['admin_id']==1)?1:0;
                    $image_parameters = array(
                        'product_id' => $product_id,
                        'image_path' => $image_path,
                        'admin_uploaded' => $admin_uploaded,
                        'childImage' =>$childImage,
                    );
                 $result = $this->product->insert_product_images($image_parameters);
                }

                
            }
            
            $target_tab =$this->input->post('target_tab')?$this->input->post('target_tab'):'1';
            $this->session->set_userdata('target_tab',$target_tab);
            
        if($result) { redirect("/admin/product/edit/$product_id"); }
    }
     public function ajax_list()
	{
             $this->load->model('admin/ProductDT_model','productDT');
		$list = $this->productDT->get_datatables();
		//echo $this->db->last_query(); exit;
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $product) {
                        $full_url = base_url()."admin/product/edit/".$product->product_id;
                        $view_url = base_url()."admin/product/details/".$product->product_id;
                        $date1 = date("d/m/Y", strtotime($product->valid_from));
                        $date2 = date("d/m/Y", strtotime($product->valid_to));
                        $date3 = date("d/m/Y", strtotime($product->offer_from_date));
                        $date4 = date("d/m/Y", strtotime($product->offer_to_date));
                        $date5 = date("d/m/Y", strtotime($product->exchange_from_date));
                        $date6 = date("d/m/Y", strtotime($product->exchange_to_date));
                        if($product->delivery_charges==="1")
                        {
                            $delivery_charges ="Included";
                        }else if($product->delivery_charges==="2")
                        {
                            $delivery_charges ="Excluded";
                        }else{
                            $delivery_charges ="Not Mentioned";
                        }
                        //$image_path = base_url()."public/uploads/".$product->image_path;
			$no++;
			$row = array();
			//$row[] = $no;
                        //$row[] = "<img width='100%' src=$image_path>";
                        //$row[] = $image_path;
                        $row[] = $product->name;
                        $row[] = $product->merchant;
                        //$row[] = $product->category_name;
                       //$row[] = $product->scatname;
			$row[] = "&#8377; ".$product->actual_price;
                        $row[] = "&#8377; ".$product->offer_price;
                        $row[] = $product->inventory;
                       $row[] = ($product->archive == 1)?'Deactive':'Active';
                       $row[] = $product->make;
                        $row[] = $product->model;
                        $row[] = $product->varient;
                        $row[] = $product->manf_year;
                        $row[] = ($product->need_registration==1)?'Yes':'No';
                        $row[] = ($product->need_driving_license==1)?"Yes":"No";
                        $row[] = ($date1 === '01/01/1970')?'-':$date1." 00:00";
                        $row[] = ($date2 === '01/01/1970')?'-':$date2." 23:59";
                        $row[] = $product->commission;
                        $row[] = $product->speed;
                        $row[] = $product->rrange;
                        $row[] = $product->motor_output;
                        $row[] = $product->batterytype;
                        $row[] = $product->wheel_diameter;
                        $row[] = $product->special_offer_text;// newly added 15/11/2018
                        $row[] = ($date3 === '01/01/1970')?'-':$date3." 00:00";
                        $row[] = ($date4 === '01/01/1970')?'-':$date4." 23:59";
                        $row[] = $product->exchange_benefit;
                        $row[] = $product->exchange_note;
                         $row[] = ($date5 === '01/01/1970')?'-':$date5." 00:00";
                        $row[] = ($date6 === '01/01/1970')?'-':$date6." 23:59";
                        
                       $row[] = $delivery_charges;
                        $row[] = $product->voltage;
                        $row[] = $product->warranty;
                        $row[] = $product->am;
                        
                        
                        if($product->archive==0){
                             if($this->session->userdata('admin_data')['admin_id'] === '1'){
			$row[] = "<a href='$full_url' class='btn green'> Edit</i> </a><a title='Deactivate' class='product_id marginleft delete red btn p$product->product_id' data-type='deactivate' data-pname='$product->name' data-id='$product->product_id'> Deactivate </a>";
                             } else {
                                 if($product->reqfordeactivate==='0')
                                 {
                               $row[] = "<a href='$full_url' class='btn green'> Edit</i> </a><a title='Deactivate' class='product_id marginleft delete red btn p$product->product_id' data-type='deactivate' data-pname='$product->name' data-id='$product->product_id'> Req. For Deactivate </a>";  
                                 }else{
                                     $row[] = "<a href='$full_url' class='btn green'> Edit</i> </a><span class='red btn marginleft p$product->product_id' > Requested for deactivation </span>";  
                                 }
                             }
                        }else{
                            if($this->session->userdata('admin_data')['admin_id'] === '1'){
                          $row[] = "<a href='$full_url' class='btn green'> Edit </a><a title='Activate' class='product_id marginleft activate green btn p$product->product_id' data-type='activate' data-pname='$product->name' data-id='$product->product_id'> Activate </a>";  
                          
                            }else{
                               $row[] = "<a href='$full_url' class='btn green'> Edit </a> <span class='red' style='border: 1px solid;padding: 5px;'>Deactivated</span>";   
                            }
                        }

			$data[] = $row;
		}
                
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->productDT->count_all(),
						"recordsFiltered" => $this->productDT->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
		
	}
       public function destroyImages($id) {
		
     if(isset($_POST['all_image_ids'])){
		   
           $pid=$id?$id:$this->uri->segment('4');
            $this->load->model('admin/product_model','product');
            
            $where_cond =$_POST['image_ids']?$_POST['image_ids']:array('0');
            //print_r($where_cond);exit;
               $query_result = $this->product->get_productimages($p_id=0,$where_cond);
                foreach($query_result as $row){
             if (file_exists("base_url().public/uploads/$row->image_path")) {
                 unlink( "base_url().public/uploads/$row->image_path" );
                   }
            }
            if($this->product->destroyImages($pid,$where_cond))
		    {
               // echo $this->db->last_query();
		     redirect('admin/product/edit/'.$pid);
		    }
        }
		
		   $oldSetPrimaryImage = $this->input->post('oldSetPrimaryImage')?$this->input->post('oldSetPrimaryImage'):'0';
	
		 if(isset($_POST['all_image_idsSet'])){
		
		
            $pid=$id?$id:$this->uri->segment('4');
            $this->load->model('admin/product_model','product');
            
            $imageId=$_POST['image_idsSet']?$_POST['image_idsSet']:0;
           // print_r($where_cond);exit;
                
				
		    $query_result = $this->product->set_primaryimages($pid,$imageId,$oldSetPrimaryImage);
              
				
            if($query_result)
		    {
             //  echo $this->db->last_query();
			  // exit;
		     redirect('admin/product/edit/'.$pid);
		   }
		   
		   
        }
		
		
    }
}
