<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//This is same as category controller but problem with pagination
class Store extends CI_Controller {
        
      /**
	 * @file        : Store.php
         * @type        : Controller
         * @author      : Nagender(Initiated)
         * @description : Category controller for LookPI 
         * @date        : 25/01/2018
	 *  
	 */
         public function __construct()
        {
                parent::__construct();
               $libraries = array(
           // 'Log_lib' => 'logger',
           // 'user_agent' =>'agent',
             'Common_lib'=>'Common_lib'      
                       );
               $this->load->helper('log_helper');
               $this->load->library($libraries);
    
               log_data();//helper function
        }
        
       /* Function index for display category level items in lookpi
         */
	public function index()
	{
         //   print_r($this->session->userdata('cat_ids'));
            $this->load->library('pagination');
        $cat_id =   $this->uri->segment('3')?$this->uri->segment('3'):2;//if no 3rd segment we take women cat as cat_id for get attributes & categories in sidebar
        $this->load->model(array('admin/Product_model'=>'product','admin/Category_model'=>'category','admin/Attribute_model' => 'attribute','Common_model' => 'common'));
        $contents['childdata'] = $childdata = $this->product->getChildCategories($cat_id);//Getting all child categery ids to display with parent and child cat
        //To get the product results from child categories
        $with_parent_append = array();
        if(!empty($childdata[0]['child_ids'])) { $with_parent_append = explode(",", $childdata[0]['child_ids']);} else{ $with_parent_append = array(0=>$cat_id);}
        //$child_ids = !empty($childdata[0]['child_ids'])?$childdata[0]['child_ids']:$cat_id;
         $category_parent_id = $this->category->getTopLvelCategory($cat_id);
         //echo $this->db->last_query();

        /*For Pagination */
       
         $config = array();
        $config["base_url"] = base_url() . "store/".$this->uri->segment(2)."/".$this->uri->segment(3);
        
        $contents['total_products'] = $this->product->get_product($id=0,$with_parent_append);
        
        $config["total_rows"] = $contents['total_products']?count($contents['total_products']):0;
        $config["per_page"] = 9;
        $config["uri_segment"] = 4;
        
        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        /*For Pagination ends  */
        $from_home_page  = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;// for getting all child products in parent category
        $contents['products'] = $this->product->get_product($id=0,$with_parent_append,$attribute_ids=array(),$config["per_page"], $page,$from_home_page);//parameters =>product_id,category_id's
      //echo $this->db->last_query();
         $slug = ($this->uri->segment(1) == "store")?$this->uri->segment(2): '';
        $contents['stores'] = $this->common->getStoreBannerNLogo($slug);
        //echo $this->db->last_query();
         if($this->uri->segment(1) =="store")
         {
        $cat_type=2;//getting category type of category - clothes category default
         }else
         {
         $cat_type=($this->uri->segment(2)) ? substr($this->uri->segment(2), strpos($this->uri->segment(2), "_")+1) : 1;//getting category type of category
         
         }
          //$cat_type=($this->uri->segment(2)) ? substr($this->uri->segment(2), strpos($this->uri->segment(2), "_")+1) : 1;//getting category type of category
        $contents['attributes'] = $this->common->get_attributes($vals=0,intval($category_parent_id[0]['category_id']),$cat_type); // For sidebar filters
        
        
        
          //echo $this->db->last_query();
        $contents["links"] = $this->pagination->create_links();
        $contents['cart_session'] = $this->session->userdata('cart_session');
        
     
       
       //Common view for all data filters like size, color,category
        $template['content'] = $this->load->view('frontpages/category/index', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
	}
        public function detail($id)
	{
        $id = $this->uri->segment('3')?$this->uri->segment('3'):1;
        $this->load->model(array('admin/Product_model' => 'product','admin/Attribute_model' => 'attribute','admin/AttributeType_model' => 'attributetype'));
      //  $contents['productimages'] = $this->product->get_productimages($id);// Need to optimize query in main query
        $contents['products'] = $this->product->get_product($id);
        $contents['similar_products'] = $this->product->getSimilarProducts($id);
        //echo $this->db->last_query();
        $template['productattributes'] = $contents['productattributes'] = $this->attribute->get_productattributes($id);// product_attributes tbl values for this product
        $contents['attributetype'] = $this->attributetype->get_attributetype();
        
        $contents['cart_session'] = $this->session->userdata('cart_session');
        //$template['productattributes'] = $this->attribute->get_productattributes($id);
        $this->product->updateviewcount($id);
        $template['content'] = $this->load->view('frontpages/category/detail', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
    }
  
        
}
