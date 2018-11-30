<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
        
            public function __construct()
        {
                parent::__construct();
               $libraries = array(
           // 'Log_lib' => 'logger',
           // 'user_agent' =>'agent',
             'Common_lib'=>'Common_lib'      
                       );
              
               $this->load->library($libraries);
                $this->load->helper('log_helper');
    
               log_data();//helper function
             


        }
        /**
	 * @file        : Home.php
         * @type        : Controller
         * @author      : Nagender(Initiated)
         * @description : Home controller for LookPI 
         * @date        : 07/09/2017
	 *  
	 */
        /* Function index for display home page in lookpi
         */
	public function index()
	{
          
       // $template['title']="";
 $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
        
         $this->load->model(array('admin/Product_model'=>'product','admin/Category_model'=>'category','Common_model'=>'common'));
        $contents['sliderImages'] = $this->product->get_sliderimages($id=0,0);//Header Images with category type 
         //to display products in tabbed category
        $contents['products'] = $this->common->get_tabedCatProducts($order="DESC");//to get new products based on uploaded date time 
      //  echo $this->db->last_query();
       $contents['categories'] = $this->common->getTableData($tablename = "category", $cols = "category_id,category_name");//to get new products based on uploaded date time 
        //echo $this->db->last_query();
       $contents['cart_session'] = $this->session->userdata('cart_session');
        $template['content'] = $this->load->view('frontpages/index', $contents, TRUE);
        $this->load->view('frontpages/template', $template);

   
	}
        	public function battery()
	{
          
       // $template['title']="";
 $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
        
         $this->load->model(array('admin/Product_model'=>'product','admin/Category_model'=>'category','Common_model'=>'common'));
        $contents['sliderImages'] = $this->product->get_sliderimages($id=0,0);//Header Images with category type 
         //to display products in tabbed category
     //   $contents['products'] = $this->common->get_tabedCatProducts($order="DESC");//to get new products based on uploaded date time 
      //  echo $this->db->last_query();
       //$contents['categories'] = $this->common->getTableData($tablename = "category", $cols = "category_id,category_name");//to get new products based on uploaded date time 
        //echo $this->db->last_query();
       $contents['cart_session'] = $this->session->userdata('cart_session');
        $template['content'] = $this->load->view('frontpages/battery/index', $contents, TRUE);
        $this->load->view('frontpages/template', $template);

   
	}
          	public function membership()
	{
          
       // $template['title']="";
 $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
        
         $this->load->model(array('admin/Product_model'=>'product','admin/Category_model'=>'category','Common_model'=>'common'));
        $contents['sliderImages'] = $this->product->get_sliderimages($id=0,0);//Header Images with category type 
         //to display products in tabbed category
     //   $contents['products'] = $this->common->get_tabedCatProducts($order="DESC");//to get new products based on uploaded date time 
      //  echo $this->db->last_query();
       //$contents['categories'] = $this->common->getTableData($tablename = "category", $cols = "category_id,category_name");//to get new products based on uploaded date time 
        //echo $this->db->last_query();
       $contents['cart_session'] = $this->session->userdata('cart_session');
        $template['content'] = $this->load->view('frontpages/membership/index', $contents, TRUE);
        $this->load->view('frontpages/template', $template);

   
	}
           	public function digitalcredit()
	{
          
       // $template['title']="";
 $contents = array('meta_keywords'=>'',
                            'meta_description'=>'',
                            'meta_title'=>'');
        
         $this->load->model(array('admin/Product_model'=>'product','admin/Category_model'=>'category','Common_model'=>'common'));
        $contents['sliderImages'] = $this->product->get_sliderimages($id=0,0);//Header Images with category type 
         //to display products in tabbed category
     //   $contents['products'] = $this->common->get_tabedCatProducts($order="DESC");//to get new products based on uploaded date time 
      //  echo $this->db->last_query();
       //$contents['categories'] = $this->common->getTableData($tablename = "category", $cols = "category_id,category_name");//to get new products based on uploaded date time 
        //echo $this->db->last_query();
       $contents['cart_session'] = $this->session->userdata('cart_session');
        $template['content'] = $this->load->view('frontpages/digitalcredit/index', $contents, TRUE);
        $this->load->view('frontpages/template', $template);

   
	}
        
        
      
   
}
