<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ERickshaws extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $libraries = array(
         'Common_lib' => 'Common_lib'
        );

        $this->load->library($libraries);
        $this->load->helper('log_helper');

        log_data(); //helper function
    }

    /**
     * @file        : ERickshaws.php
     * @type        : Controller
     * @author      : Nagender(Initiated)
     * @description : 
     * @date        : 01/10/2018
     *  
     */
    /* Function index for display home page in lookpi
     */
    public function index() {
        $this->load->model(array('admin/Product_model'=>'product','Common_model' => 'common'));
        $template['title'] = "e-Rickshaw factory ";
        $contents = array('meta_keywords' => 'evmax – e-Rickshaw factory ',
            'meta_description' => 'evmax – e-Rickshaw factory ',
            'meta_title' => 'evmax – e-Rickshaw factory ');
        $contents['sliderImages'] = $this->product->get_sliderimages($id=0,0);//Header Images with category type 
        $contents['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status",array(),"asc","state_name");
        $template['content'] = $this->load->view('frontpages/erickshaws/index', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
    }
    public function buyers() {
 $contents = array('meta_keywords' => 'evmax – e-Rickshaw factory ',
            'meta_description' => 'evmax – e-Rickshaw factory',
            'meta_title' => 'evmax – e-Rickshaw factory ');
         $this->load->model(array('admin/Product_model'=>'product','admin/ERickshawFactory_model'=>'e','Common_model'=>'common'));
        $contents['sliderImages'] = $this->product->get_sliderimages($id=0,0);//Header Images with category type 
        $where_cond = array(
              'a.status' => 1,
               );
        $contents['erickshaws'] = $this->e->getTableData($tablename = "erickshaw_factory", $cols = "manufacturer_logo,brand_logo,brand_banner,url,catalog,country,city,address,contact_number",$where_cond,"DESC","id");
        $template['title'] = "e-Rickshaw factory ";
        $template['content'] = $this->load->view('frontpages/erickshaws/buyers', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
    }
     
	public function add() {
           // print_r($_FILES);
           // exit;
       $this->load->library('upload');
       $this->load->model(array('Common_model' => 'common'));
       $files = $_FILES;
       $cpt = count($_FILES['userfile']['name']);
      
            
            
            $manufacturer_logo="";
        $brand_logo ="";
          $brand_banner="";
          $catalog = "";
            if ($cpt>0) {
                for ($i = 0; $i < 4; $i++) {
                    $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                    $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

                    $this->upload->initialize($this->set_upload_options());
                    
                    $this->upload->do_upload();
                    if($i===0){
                         $manufacturer_logo = str_replace(' ', '_', time().$_FILES['userfile']['name']); // Replacing space with underscore in file uploads
                    }
                    if($i===1){
                         $brand_logo = str_replace(' ', '_', time().$_FILES['userfile']['name']);
                     }
                     if($i===2){
                         $brand_banner = str_replace(' ', '_', time().$_FILES['userfile']['name']);
                     }
                     if($i===3){
                         $catalog = str_replace(' ', '_', time().$_FILES['userfile']['name']);
                     }
                         
                 }
                 $company_name = $this->input->post('company_name')?$this->input->post('company_name'):'';
                 $city = $this->input->post('city')?$this->input->post('city'):'';
                 $state_id = $this->input->post('state_id')?$this->input->post('state_id'):0;
                 $country = $this->input->post('country')?$this->input->post('country'):'';
                 $contact_number = $this->input->post('contact_number')?$this->input->post('contact_number'):'';
                 $url = $this->input->post('url')?$this->input->post('url'):'';
                 $address = $this->input->post('address')?$this->input->post('address'):'';
            
           /* $data = array(
                        'manufacturer_logo' => $manufacturer_logo,
                        'brand_logo' => $brand_logo,
                        'brand_banner' => $brand_banner,
                'catalog' => $catalog,
                        'company_name' => $company_name,
                'address' => $address,
                    'city' => $city,
                'state_id' => $state_id,
                'country' => $country,
                'contact_number' => $contact_number,
                'url' => $url
                
                    );*/
                         //$insert_id = $this->common->insertdata($tablename = "erickshaw_factory", $data);
                
            }
             $msg = "Thanks for listing your e-Rickshaw details here.";
            //email starts here
            emailConfigHelper();
            $body="";
            $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
            $this->email->to($this->config->item('config_from_email')); //customer email
            $body .= "Company Name :".$company_name."<br>";
            $body .= "Contact number :".$contact_number."<br>";
            $body .= "City :".$city."<br>";
            $body .= "State :".$state_id."<br>";
             $body .= "Country :".$country."<br>";
            $body .= "Website :".$url."<br>";
            //$a. = "World!";
			//$body = $this->load->view('admin/email_templates/sendProposal', $contents, TRUE);
            $this->email->subject('Erickshaw details from '.$this->input->post('company_name'));
            $this->email->message($body);
            if($manufacturer_logo !==""){
            $this->email->attach(base_url()."public/uploads/admin/erickshaw_email_imgs/".$manufacturer_logo);
            }
             if($brand_logo !==""){
            $this->email->attach(base_url()."public/uploads/admin/erickshaw_email_imgs/".$brand_logo);
            }
             if($brand_banner !==""){
            $this->email->attach(base_url()."public/uploads/admin/erickshaw_email_imgs/".$brand_banner);
            }
             if($catalog !==""){
            $this->email->attach(base_url()."public/uploads/admin/erickshaw_email_imgs/".$catalog);
            }
           

            $this->email->send();
             redirect(base_url()."erickshaw?q=success&msg=$msg");
            //redirect('/erickshaw');

	}
         private function set_upload_options()
    {   
        //upload an image options
        $config = array();
        $config['upload_path'] = './public/uploads/admin/erickshaw_email_imgs/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size']      = '0';
        $config['remove_spaces'] = TRUE;
        $config['overwrite']     = FALSE;
        $new_name = time().$_FILES["userfile"]['name'];
        $config['file_name'] = $new_name;

        return $config;
    }
    public function battery() {
      //  $this->load->model(array('Common_model' => 'common'));
        $template['title'] = "battery ";
        $contents = array('meta_keywords' => 'battery ',
            'meta_description' => 'battery ',
            'meta_title' => 'battery ');
       // $contents['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status",array(),"asc","state_name");
        $template['content'] = $this->load->view('frontpages/erickshaws/index', $contents, TRUE);
        $this->load->view('frontpages/template_buyersguide', $template);
    }
    public function membership() {
       // $this->load->model(array('Common_model' => 'common'));
        $template['title'] = "membership ";
        $contents = array('meta_keywords' => 'membership ',
            'meta_description' => 'membership ',
            'meta_title' => 'membership');
        //$contents['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status",array(),"asc","state_name");
        $template['content'] = $this->load->view('frontpages/erickshaws/index', $contents, TRUE);
        $this->load->view('frontpages/template_buyersguide', $template);
    }

    

}
