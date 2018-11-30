<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
        
      /**
	 * @file        : Category.php
         * @type        : Controller
         * @author      : Nagender(Initiated)
         * @description : Category controller for LookPI 
         * @date        : 13/09/2017
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
        
        if(isset($_REQUEST['country'])&&($_REQUEST['country']!=""))
        {
            searchLog();
        }
        
        }
        
       /* Function index for display category level items in lookpi
         */
	public function index()
	{
         //   print_r($this->session->userdata('cat_ids'));
            $this->load->library('pagination');
        $cat_id =   $this->uri->segment('3');
       
        $this->load->model(array('admin/Product_model'=>'product','admin/Category_model'=>'category','admin/Attribute_model' => 'attribute','Common_model' => 'common'));
        $contents['childdata'] = $childdata = $this->product->getChildCategories($cat_id);//Getting all child categery ids to display with parent and child cat
       $contents['category_metadata'] = $this->common->get_category($cat_id);//for meta tags info
        $contents['sliderImages'] = $this->product->get_sliderimages($id=0,0);
       //echo $this->db->last_query();
        //To get the product results from child categories
    // echo "<pre>";print_r($childdata);echo "</pre>";exit;
        $with_parent_append = array();
        if(!empty($childdata[0]['child_ids'])) { $with_parent_append = explode(",", $childdata[0]['child_ids']);} else{ $with_parent_append = array(0=>$cat_id);}
        $child_ids = !empty($childdata[0]['child_ids'])?$childdata[0]['child_ids']:$cat_id;
         $category_parent_id = $this->category->getTopLvelCategory($cat_id);
         //$category_parent_id =0;
         //echo $this->db->last_query();

        /*For Pagination */
       
         $config = array();
        $config["base_url"] = base_url() . "c/".$this->uri->segment(2)."/".$this->uri->segment(3);
        
        $contents['total_products'] = $this->product->get_product($id=0,$with_parent_append);
        
        $config["total_rows"] = $contents['total_products']?count($contents['total_products']):0;
        $config["per_page"] = 9;
        $config["uri_segment"] = 4;
        
        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        /*For Pagination ends  */
        
        $from_home_page  = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;// for getting all child products in parent category
        //$contents['products'] = $this->product->get_product($id=0,$with_parent_append,$attribute_ids=array(),$config["per_page"], $page,$from_home_page);//parameters =>product_id,category_id's
       //echo $this->db->last_query();
         if($this->uri->segment(1) =="store")
         {
        $cat_type=2;//getting category type of category
         }else
         {
         $cat_type=($this->uri->segment(2)) ? substr($this->uri->segment(2), strpos($this->uri->segment(2), "_")+1) : 1;//getting category type of category
         
         }
         $where_cond = array(
            'otp_status' => 1
        );
        $contents['getMakes'] = $this->common->getTableData($tablename = "m_registration", $cols = "company_name,m_registration_id", $where_cond);
        if($this->session->userdata('model') !== 0){
            $where_cond1 = array(
            'model_id' => $this->session->userdata('model')
        );
            $contents['model'] = $this->common->getTableData($tablename = "model", $cols = "model_name,model_id",$where_cond1,"asc","model_name");
        }
       if($this->session->userdata('variant') !== 0){
           $where_cond2 = array(
            'variant_id' => $this->session->userdata('variant')
        );
       $contents['variant'] = $this->common->getTableData($tablename = "variant", $cols = "variant_id,name",$where_cond2,"asc","name");
       }
          //$cat_type=($this->uri->segment(2)) ? substr($this->uri->segment(2), strpos($this->uri->segment(2), "_")+1) : 1;//getting category type of category
        $contents['attributes'] = $this->common->get_attributes(0,intval($category_parent_id[0]['category_id']),$cat_type); // For sidebar filters
        
       //echo $this->db->last_query();exit;
        
        //  echo $this->db->last_query();
        $contents["links"] = $this->pagination->create_links();
        $contents['cart_session'] = $this->session->userdata('cart_session');
        
     
       
      
        $template['content'] = $this->load->view('frontpages/category/index', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
	}
        //Product Detailed in frontpage
        public function detail($id)
	{
        $id = $this->uri->segment('2')?$this->uri->segment('2'):1;// takes from seo frindly url's otherwise $this->uri->segment('2')
         $this->load->model(array('admin/Product_model' => 'product','admin/Attribute_model' => 'attribute','admin/AttributeType_model' => 'attributetype','Common_model' => 'common'));
      //  $contents['productimages'] = $this->product->get_productimages($id);// Need to optimize query in main query
	  
         $contents['products'] = $this->product->get_product($id);
		 $contents['productActive'] = $this->product->get_product_Subinfo($id);
		 
        //echo $this->db->last_query();
        
        //$contents['delivery_locations'] = $this->common->getTableData($tablename = "delivery_location", $cols = "*",$delivery_condition);
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
        public function one($id)
  {
        $id = $this->uri->segment('2')?$this->uri->segment('2'):1;// takes from seo frindly url's otherwise $this->uri->segment('2')
         $this->load->model(array('admin/Product_model' => 'product','admin/Attribute_model' => 'attribute','admin/AttributeType_model' => 'attributetype','Common_model' => 'common'));
      
         $contents['products'] = $this->product->get_product($id);
     $contents['productActive'] = $this->product->get_product_Subinfo($id);
     
        
        $contents['similar_products'] = $this->product->getSimilarProducts($id);
        
        $template['productattributes'] = $contents['productattributes'] = $this->attribute->get_productattributes($id);// product_attributes tbl values for this product
        $contents['attributetype'] = $this->attributetype->get_attributetype();
        
        $contents['cart_session'] = $this->session->userdata('cart_session');
        
        $this->product->updateviewcount($id);
        $template['content'] = $this->load->view('frontpages/category/one', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
    }
    public function three($id)
  {
        $id = $this->uri->segment('2')?$this->uri->segment('2'):1;// takes from seo frindly url's otherwise $this->uri->segment('2')
         $this->load->model(array('admin/Product_model' => 'product','admin/Attribute_model' => 'attribute','admin/AttributeType_model' => 'attributetype','Common_model' => 'common'));
      
         $contents['products'] = $this->product->get_product($id);
     $contents['productActive'] = $this->product->get_product_Subinfo($id);
     
        
        $contents['similar_products'] = $this->product->getSimilarProducts($id);
        
        $template['productattributes'] = $contents['productattributes'] = $this->attribute->get_productattributes($id);// product_attributes tbl values for this product
        $contents['attributetype'] = $this->attributetype->get_attributetype();
        
        $contents['cart_session'] = $this->session->userdata('cart_session');
        
        $this->product->updateviewcount($id);
        $template['content'] = $this->load->view('frontpages/category/three', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
    }
    public function four($id)
  {
        $id = $this->uri->segment('2')?$this->uri->segment('2'):1;// takes from seo frindly url's otherwise $this->uri->segment('2')
         $this->load->model(array('admin/Product_model' => 'product','admin/Attribute_model' => 'attribute','admin/AttributeType_model' => 'attributetype','Common_model' => 'common'));
      
         $contents['products'] = $this->product->get_product($id);
     $contents['productActive'] = $this->product->get_product_Subinfo($id);
     
        
        $contents['similar_products'] = $this->product->getSimilarProducts($id);
        
        $template['productattributes'] = $contents['productattributes'] = $this->attribute->get_productattributes($id);// product_attributes tbl values for this product
        $contents['attributetype'] = $this->attributetype->get_attributetype();
        
        $contents['cart_session'] = $this->session->userdata('cart_session');
        
        $this->product->updateviewcount($id);
        $template['content'] = $this->load->view('frontpages/category/four', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
    }
/*
 * This is hold for temparory , not in use
 */
    /*public function createTables() {
        $this->load->dbforge();
         $this->load->model(array('Common_model' => 'common'));
        $commons = $this->common->getAttrColumns();
        $data = $this->common->getAttrData();
       // print_r($commons);
        foreach ($commons as $col) {
          $column = strtolower($col->attribute_type);
          
       
        $fields = array(
        'atr_'.$column.'_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
        ),
        'attribute_type_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => FALSE
        ),
        'attribute_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => FALSE
        ),
        'name' => array(
                'type' =>'VARCHAR',
                'constraint' => '100',
                'unique' => TRUE,
        ),
         ); 
         $this->dbforge->add_field($fields);
     $this->dbforge->add_key('atr_'.$column."_id", TRUE);
   //  $this->dbforge->create_table('atr_'.$column, TRUE);
     //echo count($data);
      foreach ($data as $val) {
          $datacol = strtolower($val->attribute_type);
          if($datacol == $column)
          {
              $query = $this->db->get_where('atr_'.$datacol, array(//making selection
            'name' => $val->name
        ));

        $count = $query->num_rows(); //counting result from query
              print_r($val->name);
              echo '<br>';
         if ($count === 0) {
                $datas = array(
                            "name" => $val->name, 
                            "attribute_type_id" => $val->attribute_type_id,
                            "attribute_id" => $val->attribute_id,
                        );
         //     $this->db->insert('atr_'.$datacol, $datas);   
          }
          }
         
      }
      
       

 }

    }*/
        
}
