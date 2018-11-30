<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BatteryBanks extends CI_Controller {

	/**
         * @file        : ChargingStation.php
         * @type        : Controller
         * @author      : Nagender
         * @description : All ChargingStation related operations will be performed here
         * @date        : 07/09/2018
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
            //$this->session->set_userdata('requestedForDeactivation',0);
           // $this->session->set_userdata('requestedForDeactivation',0);
            $data['title'] = "";
            //Product attributes will be appeared based on Category Type with AJAX
        $this->load->model(array('admin/Category_model' => 'category','Common_model' => 'common'));
        $data['datatable_path'] = "admin/BatteryBanks/ajax_list"; // must and should declare this value

        $data['categories'] = $this->category->get_category();
          $where_cond = array(
            'otp_status' => 1
        );
        $data['getMakes'] = $this->common->getTableData($tablename = "m_registration", $cols = "company_name,m_registration_id", $where_cond);
        $data['manufacture_years'] = $this->common->getTableData($tablename = "manufacture_year", $cols = "manufacture_year_id,manufacture_year");
        $template['content'] = $this->load->view('admin/batterybanks/index', $data, TRUE);
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
            $template['content'] = $this->load->view('admin/batterybanks/details',$data, TRUE);
            $this->load->view('admin/template',$template);//For data tables only template
            
	}
   
	public function add() {
            
         $this->load->model(array('Common_model' => 'common'));
            $store_id = 0;
            if($this->session->userdata('admin_data'))
            {
                $store_id = $this->session->userdata('admin_data')['store_id'];
            }
          

            $parameters = array(
                'name' => $this->input->post('name'),
                 'lat' => $this->input->post('lat'),
                'lng' => $this->input->post('lang'),
                 'cat_id' => $this->input->post('category'),
                'subcat_id' => $this->input->post('subCategories'),
                 'make_id' => $this->input->post('make'),
                'model_id' => $this->input->post('model'), // changes done on 18082018 without controller data passing
                'varient_id' => $this->input->post('variant'),
                'manfyear_id' => $this->input->post('manufacture_year'),
                'valid_from' => date('Y-m-d',strtotime($this->input->post('valid_from'))),
                'valid_to' => date('Y-m-d',strtotime($this->input->post('valid_to'))),
                'price' => $this->input->post('actual_price'),
                'selling_price' => $this->input->post('offer_price'),
                'discount' => $this->input->post('commission'),
                'discount_type' => ($this->input->post('chDiscount') != "")?"":$this->input->post('chDiscount11'),
                'commission' => $this->input->post('commission'),
                'commission_type' => ($this->input->post('chDiscount21') != "")?$this->input->post('chDiscount21'):$this->input->post('chDiscount11'),
                'notes' => $this->input->post('full_description'),
                'address' => $this->input->post('address'),
                'store_id' => $store_id,
               
                
            );
          $res = $this->common->insertdata($tablename = "batterybanks", $parameters);
            

             //image upload
    
             if ($res>0) {
            $this->session->set_flashdata('success', 'Battery bank added successfully');
             }
           redirect('/admin/BatteryBanks/');
        }
    
	public function edit($id)
	{   
           
             $this->input->post('target_tab');
                $models = array(
                            'admin/AttributeType_model' => 'attributetype',
                            'admin/Attribute_model' => 'attribute',
                            'admin/BatteryBanks_model' =>'product',
                            'admin/Category_model' =>'category'
                                );
                $this->load->model($models);
		if(!isset($_POST['update']))
		{
            $data['products'] = $this->product->get_product($id,$cat_id=array(),$attribute_ids=array(),$limit=0, $start=0,$from_home_page=0,$new_arrvial_flag=0,$child_img=1);
	//		$data['childImage']= $this->product->get_product_childImages($id);
           // echo $this->db->last_query(); exit;
           // $data['productimages'] = $this->product->get_productimages($id);
          //  $data['attributetype'] = $this->attributetype->get_attributetype();
           // $data['attributes'] = $this->attribute->get_attributes();
            $data['categories'] = $this->category->get_category($id=0);
          //  $template['extrascript'] = $this->load->view('admin/product/extrascript', $data, TRUE);
            $template['content'] = $this->load->view('admin/batterybanks/edit', $data, TRUE);
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
         //   $data['attributetype'] = $this->attributetype->get_attributetype();
	//$data['attributes'] = $this->attribute->get_attributes();
         //   $data['categories'] = $this->category->get_category();
      
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
        
        if ($this->input->post('full_description')) {
            $full_description = $this->input->post('full_description');
        }

        $parameters = array(
             'price' => $actual_price,
            'selling_price' => $offer_price,
            'notes' => $full_description,
            'lat' => $this->input->post('lat'),
            'lng' => $this->input->post('lang'),
            'price' => $this->input->post('actual_price'),
            'selling_price' => $this->input->post('offer_price'),
            'address' => $this->input->post('address'),
            'cat_id' => $this->input->post('category'),
            
        );
        
             $where_cond = array(
                            "id" => $id, 
                            
                        );
             $result = $this->common->update($table='batterybanks', $parameters, $where_cond);

            $target_tab =$this->input->post('target_tab')?$this->input->post('target_tab'):'1';
            $this->session->set_userdata('target_tab',$target_tab);
        if($result) { redirect('/admin/BatteryBanks/index/'); }
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
             $this->load->model('admin/BatteryBanksDT_model','alias');
		$list = $this->alias->get_datatables();
		//echo $this->db->last_query(); exit;
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $product) {
                        $full_url = base_url()."admin/BatteryBanks/edit/".$product->id;
                        $view_url = base_url()."admin/BatteryBanks/details/".$product->id;
			$no++;
			$row = array();
                       $row[] = $product->name;
                       $row[] = $product->lat;
                       $row[] = $product->lng;
                        $row[] = $product->merchant;
                        $row[] = "&#8377; ".$product->price;
                        $row[] = "&#8377; ".$product->selling_price;
                       // $row[] = $product->inventory;
                      // $row[] = ($product->archive == 1)?'Deactive':'Active';
                       $row[] = $product->make;
                        $row[] = $product->model;
                        $row[] = $product->varient;
                        $row[] = $product->manf_year;
                       // $row[] = ($product->need_registration==1)?'Yes':'No';
                       // $row[] = ($product->need_driving_license==1)?"Yes":"No";
                        $row[] = $product->valid_from." 00:00";
                        $row[] = $product->valid_to." 23:59";
                      $row[] = $product->commission;
                     $row[] = $product->discount;
                     $row[] = $product->address;
                      //  $row[] = $product->rrange;
                       // $row[] = $product->motor_output;
                       // $row[] = $product->batterytype;
                       // $row[] = $product->wheel_diameter;
                     
			//$row[] = "<a href='$full_url' class='btn green'> Edit</i> </a><a title='Deactivate' class='product_id marginleft delete red btn p$product->id' data-type='deactivate' data-pname='$product->name' data-id='$product->id'> Deactivate </a>";
                       

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
      
}
