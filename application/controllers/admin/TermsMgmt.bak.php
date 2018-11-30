<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class TermsMgmt extends CI_Controller {
    
	/**
	 * @file        : Sliders.php
         * @type        : Controller
         * @author      : Nagender
         * @description : slider management
         * @date        : 24/10/2017
	 *  
	 */
    public function __construct()
	{
            parent::__construct();
             if(!$this->session->userdata('admin_data'))
            {
                redirect("/admin/index/login");
            }
          
	//$this->session->set_userdata('store_id',1);	
	}
	public function index()
	{
            $this->session->userdata('admin_data')['store_id'];
            $this->load->model('admin/Slider_model','alias');
            $this->load->model('admin/Category_model','category');
            $data['title']='Sliders';
            //$data['totaldata'] = $this->attributetype->get_attributetype_array();
            $data['datatable_path']= "admin/Sliders/ajax_list";// must and should declare this value
           $data['slidercategories'] = $this->alias->get_category();
             $data['categories'] = $this->category->get_category();
            $template['content'] = $this->load->view('admin/sliders/index', $data, TRUE);
            $this->load->view('admin/template_DT',$template);//For data tables only template
	}
   private function set_upload_options()
    {   
        //upload an image options
        $config = array();
        $config['upload_path'] = './public/uploads/admin/sliders';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size']      = '0';
        $config['remove_spaces'] = TRUE;
        $config['overwrite']     = FALSE;
        $new_name = time().$_FILES["userfile"]['name'];
        $config['file_name'] = $new_name;

        return $config;
    }
	public function add() {
           // print_r($_FILES);
           // exit;
       $this->load->library('upload');
       $files = $_FILES;
       $cpt = count($_FILES['userfile']['name']);
       //Sliders adding with multiple images
            $slider_category_id = $this->input->post('slider_category')?$this->input->post('slider_category'):1;
            $category_id = $this->input->post('category')?$this->input->post('category'):1;
            
            $dis_order = $this->input->post('order')?$this->input->post('order'):0;
            //$slider_text = $this->input->post('slider_text')?$this->input->post('slider_text'):'';
            

            if ($cpt>0) {
                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                    $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

                    $this->upload->initialize($this->set_upload_options());
                    
                    $this->upload->do_upload();
                         $image_path = str_replace(' ', '_', time().$_FILES['userfile']['name']); // Replacing space with underscore in file uploads
                    $image_parameters_batch[] = array(
                        'slider_category_id' => $slider_category_id,
                        'name' => $image_path,
                        'display_order' => $dis_order,
                        'link_to_category' => $category_id,
                        'slider_text' => $this->input->post('caption'),
                        'store_id' => $this->session->userdata('admin_data')['store_id']
                    );
                 }
                // print_r($image_parameters_batch);
                // print_r($image_parameters_batch[0]['name']);
                 //exit;
                    if($image_parameters_batch[0]['name'] !='') //checking serverside validation
                 {
                    $this->db->insert_batch('slider', $image_parameters_batch);
                   // echo $this->db->last_query(); exit;
                    
                 }
                
            }
            redirect('/admin/sliders/');

	}
        public function update($id) {
              $this->load->library('upload');
            $this->load->model('admin/Slider_model','alias');
            if(isset($id) && ($id>0) && isset($_POST['update'])){
                $query_result = $this->alias->get_sliders($id);
                foreach($query_result as $row){
             if (file_exists("public/uploads/admin/sliders/$row->name")) {
                 unlink( "public/uploads/admin/sliders/$row->name" );
             //unlink(base_url()."public/uploads/admin/sliders/".$row->name);
                   // echo base_url()."public/uploads/admin/sliders/$row->name"; exit;
                }
            }
             $this->alias->destroySlider($id);
            }
     
       $files = $_FILES;
       //print_r($files); 
        $cpt = count($_FILES['userfile']['name']);
       //Sliders adding with multiple images
            $slider_category_id = $this->input->post('slider_category')?$this->input->post('slider_category'):1;
            $category_id = $this->input->post('category')?$this->input->post('category'):1;
            $dis_order = $this->input->post('order')?$this->input->post('order'):0;
            //$slider_text = $this->input->post('slider_text')?$this->input->post('slider_text'):'';
            

            if ($cpt>0) {
                for ($i = 0; $i < $cpt; $i++) {
                    $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                    $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

                    $this->upload->initialize($this->set_upload_options());
                    
                    $this->upload->do_upload();
                         $image_path = str_replace(' ', '_', time().$_FILES['userfile']['name']); // Replacing space with underscore in file uploads
                    if($_FILES['userfile']['name']!=''){     //checking serverside validation
                    $image_parameters_batch[] = array(
                        'slider_category_id' => $slider_category_id,
                        'name' => $image_path,
                        'display_order' => $dis_order,
                        'link_to_category' => $category_id
                    );
                    }
                 }
                 if($image_parameters_batch[0]['name'] !='') //checking serverside validation
                 {
                    $this->db->insert_batch('slider', $image_parameters_batch);
                 }
                 //print_r($image_parameters_batch);
                   //echo $this->db->last_query(); exit;
                
            }
            redirect('/admin/sliders/');

	}
        public function edit($id) {
             $this->load->model('admin/Slider_model','alias');
            $this->load->model('admin/Category_model','category');
            $data['title']='Sliders';
             $data['slidercategories'] = $this->alias->get_category();
             $data['categories'] = $this->category->get_category();
             $data['sliders'] =  $this->alias->get_sliders($id);
             //echo $this->db->last_query();
            $template['content'] = $this->load->view('admin/sliders/edit', $data, TRUE);
            $this->load->view('admin/template',$template);//For data tables only template
            
        }
  	 public function ajax_list()
	{
             $this->load->model('admin/SliderDT_model','alias');
		$list = $this->alias->get_datatables();
		//echo $this->db->last_query();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
                    $full_url = base_url()."admin/sliders/edit/".$customers->slider_id;
                    $image_url = "<img style='width: 20%;' src=".base_url()."public/uploads/admin/sliders/".$customers->name.">";
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $image_url;
                        $row[] = $customers->category_name;
                        $row[] = $customers->store_name;
                        $row[] = $customers->display_order;
                        //$row[] = "<div style='height: 150px;position: relative;overflow: scroll;'".$customers->slider_text."</div>";
			//$row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-edit'></i> </a> <a class='delete red btn'  data-cname='$customers->category_name' data-name='$customers->name' data-id='$customers->slider_id'> <i class='fa fa-trash'></i> </a>";
                        $row[] = "<a class='delete red btn'  data-cname='$customers->category_name' data-name='$customers->name' data-id='$customers->slider_id'> <i class='fa fa-trash'></i> </a>";

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
