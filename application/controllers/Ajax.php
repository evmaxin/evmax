<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {
    /*public function __construct() {
        parent::__construct();
        if(!defined('MAIN_INCLUDED')){
        exit(1);
        }
    }*/
        /**
	 * @file        : Ajax.php
         * @type        : Controller
         * @author      : Nagender(Initiated)
         * @description : Ajax controller for LookPI 
         * @date        : 05/10/2017
	 *  
	 */

        /* Function filterResults for display Category results based on filters in lookpi
         */
	
        public function filterResults()
        {
             $this->load->library('pagination');
             // $this->load->library('session');
            $this->load->model(array('frontend/Ajax_model'=>'ajax','admin/Product_model'=>'product','admin/Category_model'=>'category'));
        
           $cat_id = $segmen_id = isset($_POST['segmen_id'])?$_POST['segmen_id']:0; //cat id from segment with ajax parameter
            $if_cat_id_empty = $this->uri->segment('3')?$this->uri->segment('3'):$segmen_id;
   //     $catgeroy_ids = $_POST['category_names'];
            //only when no data
            
              $childdata = $this->product->getChildCategories($cat_id);//Getting all child categery ids to display with parent and child cat when checkboxs are empty
         $with_parent_append = array();
            if(!empty($childdata[0]['child_ids'])) { $with_parent_append = explode(",", $childdata[0]['child_ids']);} else{ $with_parent_append = array(0=>$cat_id);}
            
             $cat_ids = isset($_POST['category_ids'])?$_POST['category_ids']:$with_parent_append; //if no result default is women category
   
            $this->session->set_userdata('cat_ids',$cat_ids);
            $session_cat_ids= $this->session->userdata('cat_ids')?$this->session->userdata('cat_ids'):$cat_ids;
          //print_r($session_cat_ids);
            
           /*For Pagination */
       
         $config = array();
        $config["base_url"] = base_url() . "c/women/".$segmen_id;
        //query changed from product to ajax model due to attribute id where in concept
        $contents['total_products'] = $this->ajax->get_product($id=0,$session_cat_ids);
        
        $config["total_rows"] = $contents['total_products']?count($contents['total_products']):0;
        $config["per_page"] = 9;
        $config["uri_segment"] = 4;

        $this->pagination->initialize($config);
        
        $page = isset($_POST['page'])?$_POST['page']:0;
        /*For Pagination ends  */
            
            
            
            $attribute_ids = isset($_POST['attribute_ids'])?$_POST['attribute_ids']:array();
			$make_value = isset($_POST['make'])?$_POST['make']:0;
			$model_value = isset($_POST['model'])?$_POST['model']:0;
			$variant_value = isset($_POST['variant'])?$_POST['variant']:0;
            //print_r($attribute_ids);
            $this->session->set_userdata('first_segment_value',$_POST['first_segment_value']);
            $this->session->set_userdata('second_segment_value',$_POST['second_segment_value']);
            $this->session->set_userdata('attribute_ids',$attribute_ids);
			$this->session->set_userdata('make',$make_value);
			$this->session->set_userdata('model',$model_value);
			$this->session->set_userdata('variant',$variant_value);
			$make = ($this->session->userdata('make')>0)?$this->session->userdata('make'):0;
			$model = ($this->session->userdata('model')>0)?$this->session->userdata('model'):0;
			$variant = ($this->session->userdata('variant')>0)?$this->session->userdata('variant'):0;
			//$make=195;
              $session_attribute_ids= $this->session->userdata('attribute_ids')?$this->session->userdata('attribute_ids'):$attribute_ids;

              //query changed from product to ajax model due to attribute id where in concept
             // getFilterResults($prod_id=0,$session_cat_ids,$session_attribute_ids,$config["per_page"], $page);
             //$catgeroy_ids is array from CATEGORIES check boxes need to implement ***
            $data['products'] = $this->ajax->getFilterResults($prod_id=0,$session_cat_ids,$session_attribute_ids,$config["per_page"], $page,$cat_ids,$make,$model,$variant);
            //$data['products'] = $this->product->get_product($prod_id=0,$session_cat_ids,$session_attribute_ids,$config["per_page"], $page);
            //$data["links"] = $this->pagination->create_links();
      
       // echo"<br>";
            $this->load->view('frontpages/partialviews/display_products', $data);
             //echo $this->db->last_query();
        }
        public function getSubMenu() {
        $this->load->model(array('Common_model','Common_model'));
        $brand_id = $_POST['cat_id'];
        $data['navmenu'] = $this->Common_model->get_tabedCatProducts($order="DESC",$brand_id,1);//$menu_request=1 means requesting from menu hover
       //  $data['brandlist'] = $this->Common_model->getBrands($brand_id);
       //echo $this->db->last_query();exit;
        $this->load->view('frontpages/partialviews/display_submenu', $data);
       
        }
        public function checkForDuplicate() {
        $this->load->model(array('Common_model','Common_model'));
       // $cat_id = $_POST['cat_id'];
        if($this->input->post('type')=== "email")
        {
        $condition = array(
           'email' =>$this->input->post('value'),
        );
        $res = $this->Common_model->checkForDuplicate($tablename = "m_enquiry", $cols = "*",$condition,$type="email");
        echo $res;
       
        }
        if($this->input->post('type')=== "mobile")
        {
        $condition = array(
           'mobile' =>$this->input->post('value'),
        );
        $res = $this->Common_model->checkForDuplicate($tablename = "m_enquiry", $cols = "*",$condition,$type="mobile");
        echo $res;
       
        }
        }
       
       
}
