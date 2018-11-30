<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Battery extends CI_Controller {

	/**
         * @file        : Battery.php
         * @type        : Controller
         * @author      : Nagender
         * @description : All Battery related operations will be performed here
         * @date        : 15/09/2017
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
          
        $data['title'] = "Battery";
            //Product attributes will be appeared based on Category Type with AJAX
        $this->load->model(array('admin/Attribute_model' => 'attribute', 'admin/Category_model' => 'category', 'admin/AttributeType_model' => 'attributetype', 'admin/Product_model' => 'product','Common_model' => 'common'));
        $data['datatable_path'] = "admin/Battery/ajax_list"; // must and should declare this value
        
        $data['categories'] = $this->category->get_category();
       
        $where_cond = array(
            'otp_status' => 1
        );
        $data['getMakes'] = $this->common->getTableData($tablename = "m_registration", $cols = "company_name,m_registration_id", $where_cond);
        $data['manufacture_years'] = $this->common->getTableData($tablename = "manufacture_year", $cols = "manufacture_year_id,manufacture_year");
        $template['content'] = $this->load->view('admin/battery/index', $data, TRUE);
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
        $config['upload_path'] = './public/uploads/admin/battery/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = '2048';
        $config['overwrite']     = FALSE;

        return $config;
    }
	public function add() {
            
       
        
        
        
        //varibale initilization
        $name = "";
        $actual_price = 0;
        $offer_price = 0;
        //$product_cost = 0;
        $inventory = 0;
        $full_description ="";
        $store_id = 0;
        $request_form = 'WEB';
        $request_format = "ARRAY";
        $response_format = "ARRAY";
        
         $this->load->model(array('admin/Attribute_model'=>'attribute','admin/Category_model'=>'category','admin/AttributeType_model'=>'attributetype','Common_model' => 'common'));
         $data['attributetype'] = $this->attributetype->get_attributetype();
        
        if (!isset($_POST['add'])) {
              //loading models
           
            $data['attributes'] = $this->attribute->get_attributes();
            $data['categories'] = $this->category->get_category();
            $this->load->view('admin/product/add',$data);
        } else {
            $this->load->library('upload');
            $data['upload_data'] = '';
           
             
           
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
          
//echo $this->input->post('valid_to');
        $files = $_FILES;
        $cpt = count($_FILES['userfile']['name']);
         // We can use this array in multiple purposes like without direct touching post values to model layer we are insrerting
        // If we use mobile insert like $this->post('some_value'), then also we can  insert post values without touching model layer
            $parameters = array(
          
                'name' => $name,
                'actual_price' => $actual_price,
                'offer_price' => $offer_price,
                'inventory' => $inventory,
                'full_description' => $full_description,
                'store_id' => $store_id,
                 'make_id' => $this->input->post('make'),
                'model_id' => $this->input->post('model'), // changes done on 18082018 without controller data passing
                'variant_id' => $this->input->post('variant'),
                'manufacture_year_id' => $this->input->post('manufacture_year'),
                'voltage' => $this->input->post('voltage'),
                'warranty' => $this->input->post('warranty'),
                'am' => $this->input->post('am'),
                'batterytype' => $this->input->post('batterytype'),
                'suitablevehicles' => $this->input->post('suitablevehicles'),
                'valid_from' => $this->input->post('valid_from'),
                'valid_to' => $this->input->post('valid_to'),
                'commission' => $this->input->post('commission'),
                'category_id' => $this->input->post('category'),
                'subcategory_id' => $this->input->post('subCategories')
             );
            
             $insert_id = $this->common->insertdata($tablename = "battery", $parameters);
            //print_r($parameters);exit;
            //checking images validations like size and dimentions
            for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                    //$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    //$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];
                    
                    list($width, $height) = getimagesize($_FILES['userfile']['tmp_name']);
                    
                    if($width < "100" || $height < "100") {
                        $this->session->set_flashdata('fail', 'Image '.$_FILES['userfile']['name'].' width or hieght less than mentioned measurements.');
                      redirect("admin/Battery");
                     }
                     //echo $_FILES['userfile']['size'];exit;
                     if($_FILES['userfile']['size']> "2190000") {
                        $this->session->set_flashdata('fail', 'Image '.$_FILES['userfile']['name'].' Size more than mentioned measurements.');
                      redirect("admin/Battery");
                     }
                     
                  
                }
       


             //image upload
            if ($insert_id>0) {
                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['userfile']['name'] = time().$files['userfile']['name'][$i];
                    $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];
                    $this->upload->initialize($this->set_upload_options());
                    $this->upload->do_upload();
                    $image_path = str_replace(' ', '_', $_FILES['userfile']['name']); // Replacing space with underscore in file uploads
                 // $is_admin =($this->session->userdata('admin_data')['admin_id'] === '1')?1:0;
                    $image_parameters = array(
                        'battery_id' => $insert_id,
                        'image_path' => $image_path
                   
                    );
               $this->common->insertdata($tablename = "battery_images", $image_parameters);
                  //$this->product->insert_product_images($image_parameters);
               //echo $this->db->last_query(); 
                }

                
            }
             if ($insert_id>0) {
            $this->session->set_flashdata('success', 'Battery details added successfully');
             }
           redirect('/admin/Battery/');
        }
    }
	public function edit($id)
	{   
           
             $this->input->post('target_tab');
                $models = array(
                            'admin/AttributeType_model' => 'attributetype',
                            'admin/Attribute_model' => 'attribute',
                            'admin/Battery_model' =>'battery',
                            'admin/Category_model' =>'category'
                                );
                $this->load->model($models);
		if(!isset($_POST['update']))
		{
            $data['products'] = $this->battery->get_product($id,$cat_id=array(),$attribute_ids=array(),$limit=0, $start=0,$from_home_page=0,$new_arrvial_flag=0,$child_img=1);
            $data['childImage']= $this->battery->get_product_childImages($id);
           // echo $this->db->last_query(); exit;
           // $data['productimages'] = $this->product->get_productimages($id);
         //   $data['attributetype'] = $this->attributetype->get_attributetype();
          //  $data['attributes'] = $this->attribute->get_attributes();
            $data['categories'] = $this->category->get_category($id=0);
            //$template['extrascript'] = $this->load->view('admin/product/extrascript', $data, TRUE);
            $template['content'] = $this->load->view('admin/battery/edit', $data, TRUE);
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
        $product_cost = 0;
        $inventory = 0;
        $full_description = "";
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
        if ($this->input->post('product_cost')) {
            //$product_cost = $this->input->post('product_cost');
        }
        if ($this->input->post('inventory')) {
            $inventory = $this->input->post('inventory');
        }
        if ($this->input->post('full_description')) {
            $full_description = $this->input->post('full_description');
        }

        $parameters = array(
             'actual_price' => $actual_price,
            'offer_price' => $offer_price,
            'inventory' => $inventory,
            'full_description' => $full_description,
            'upload_date' => date('Y-m-d H:i:s'),
             'category_id' => $this->input->post('category'),
        );
        
             $where_cond = array(
                            "battery_id" => $id, 
                            
                        );
             $result = $this->common->update($table='battery', $parameters, $where_cond);
        // Need to do once design comes
        //$result = $this->product->update($parameters, $id);
            
            
            //redirect('/admin/Product/index/');
    
			
			  //single product may in Multiple categories
			  
	
               
             
	//$this->db->insert_batch('product_attributes', $attributes_batch);
       
            $target_tab =$this->input->post('target_tab')?$this->input->post('target_tab'):'1';
            $this->session->set_userdata('target_tab',$target_tab);
        if($result) { redirect('/admin/Battery/index/'); }
    }
    public function updateMetaTags($id) {
        $this->load->model(array('admin/Battery_model'=>'product'));
         $data = array(
        'meta_title' => $this->input->post('title')?$this->input->post('title'):'',
        'meta_keywords' => $this->input->post('keywords')?$this->input->post('keywords'):'',
        'meta_description' => $this->input->post('description')?$this->input->post('description'):''
    );

    $this->db->where('battery_id', $id);
    $result = $this->db->update('battery', $data);
    if($result) { redirect("/admin/Battery/edit/$id"); }
    }
   public function updateProductImages() {
      

                $this->load->library('upload');
              //  $data['upload_data'] = '';
                $this->load->model(array('admin/Battery_model'=>'product'));
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
                        'battery_id' => $product_id,
                        'image_path' => $image_path,
                        'admin_uploaded' => $admin_uploaded,
                        'childImage' =>$childImage,
                    );
                 $result = $this->product->insert_product_images($image_parameters);
                }

                
            }
            
            $target_tab =$this->input->post('target_tab')?$this->input->post('target_tab'):'1';
            $this->session->set_userdata('target_tab',$target_tab);
            
        if($result) { redirect("/admin/Battery/edit/$product_id"); }
    }
     public function ajax_list()
	{
             $this->load->model('admin/BatteryDT_model','alias');
		$list = $this->alias->get_datatables();
		//echo $this->db->last_query(); exit;
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $product) {
                        $full_url = base_url()."admin/Battery/edit/".$product->battery_id;
                        $view_url = base_url()."admin/Battery/details/".$product->battery_id;
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
                        $row[] = $product->valid_from." 00:00";
                        $row[] = $product->valid_to." 23:59";
                        $row[] = $product->commission;
                        $row[] = $product->warranty;
                        $row[] = $product->am;
                        $row[] = $product->voltage;
                        $row[] = $product->batterytype;
                        $row[] = $product->suitablevehicles;
                        if($product->archive==0){
			$row[] = "<a href='$full_url' class='btn green'> Edit</i> </a><a title='Deactivate' class='product_id marginleft delete red btn p$product->battery_id' data-type='deactivate' data-pname='$product->name' data-id='$product->battery_id'> Deactivate </a>";
                        }else{
                          $row[] = "<a href='$full_url' class='btn green'> Edit </a><a title='Activate' class='product_id marginleft activate green btn p$product->battery_id' data-type='activate' data-pname='$product->name' data-id='$product->battery_id'> Activate </a>";  
                        }

			$data[] = $row;
		}
                
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->alias->count_all(),
						"recordsFiltered" => $this->alias->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
		
	}
       public function destroyImages($id) {
		
     if(isset($_POST['all_image_ids'])){
		   
           $pid=$id?$id:$this->uri->segment('4');
            $this->load->model('admin/Battery_model','product');
            
            $where_cond =$_POST['image_ids']?$_POST['image_ids']:array('0');
            //print_r($where_cond);exit;
               $query_result = $this->product->get_productimages($p_id=0,$where_cond);
                foreach($query_result as $row){
             if (file_exists("public/uploads/$row->image_path")) {
                 unlink( "public/uploads/$row->image_path" );
                   }
            }
            if($this->product->destroyImages($pid,$where_cond))
		    {
               // echo $this->db->last_query();
		     redirect('admin/Battery/edit/'.$pid);
		    }
        }
		
		   $oldSetPrimaryImage = $this->input->post('oldSetPrimaryImage')?$this->input->post('oldSetPrimaryImage'):'0';
	
		 if(isset($_POST['all_image_idsSet'])){
		
		
            $pid=$id?$id:$this->uri->segment('4');
            $this->load->model('admin/Battery_model','product');
            
            $imageId=$_POST['image_idsSet']?$_POST['image_idsSet']:0;
           // print_r($where_cond);exit;
                
				
		    $query_result = $this->product->set_primaryimages($pid,$imageId,$oldSetPrimaryImage);
              
				
            if($query_result)
		    {
             //  echo $this->db->last_query();
			  // exit;
		     redirect('admin/Battery/edit/'.$pid);
		   }
		   
		   
        }
		
		
    }
}
