<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
        
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
        $with_parent_append = array();

        $category_parent_id =2;


        
          /*For Pagination */
       
         $config = array();
        $config["base_url"] = base_url() . "search/index";
        
        $contents['total_products'] = $this->product->getSearchProducts();
        $config["total_rows"] = $contents['total_products']?count($contents['total_products']):0;
        $config["per_page"] = 9;
        $config["uri_segment"] = 3;
        
        $this->pagination->initialize($config);
        
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        /*For Pagination ends  */
        
        //$from_home_page  = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;// for getting all child products in parent category
        $contents['products'] = $this->product->getSearchProducts(0,$config["per_page"], $page);//parameters =>product_id,category_id's
      // echo $this->db->last_query();
     
          //$cat_type=($this->uri->segment(2)) ? substr($this->uri->segment(2), strpos($this->uri->segment(2), "_")+1) : 1;//getting category type of category
        $contents['attributes'] = $this->common->get_attributes(0,1,$cat_type=2); // For sidebar filters//$cat_type=2  means fashion type
         
        
        
       //  echo $this->db->last_query();
        $contents["links"] = $this->pagination->create_links();
        $contents['cart_session'] = $this->session->userdata('cart_session');
        
     
       
       
        $template['content'] = $this->load->view('frontpages/search/index', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
	}
        public function autocomplete() {
        $json = [];


        $this->load->database();


        if (!empty($this->input->post("term"))) {
            $this->db->like('c1.category_name', $this->input->post("term"));
            $this->db->select('CONCAT("c/","search_2/") AS url,c1.category_id as id,c2.category_name as parent, CONCAT(c1.category_name," ", "<b>In Category</b>") AS name,c1.parent_id,c1.store_id');
            $this->db->from("category c1");
            $this->db->join('category c2', 'c1.parent_id=c2.category_id', 'LEFT');
            //$this->db->join('product_category pc', 'pc.category_id=c1.category_id', 'LEFT');
            //$this->db->join('product pr', 'pr.product_id=pc.product_id', 'LEFT');
            $this->db->limit(5);
            $this->db->group_by('c1.category_id');
            $query1 = $this->db->get();
            $query1 = $query1->result_array();
           // echo $this->db->last_query();
            $this->db->like('pr.name', $this->input->post("term"));
            $this->db->select('CONCAT("category/","detail/") AS url,pr.product_id as id,CONCAT(pr.name, " ", " <b>In Products</b>") AS name,c1.category_id,c2.category_name as parent,c1.parent_id,c1.store_id');
            $this->db->from("category c1");
            $this->db->join('category c2', 'c1.parent_id=c2.category_id', 'LEFT');
            $this->db->join('product_category pc', 'pc.category_id=c1.category_id', 'LEFT');
            $this->db->join('product pr', 'pr.product_id=pc.product_id', 'LEFT');
            $this->db->limit(5);
            $this->db->group_by('c1.category_id');
            $query2 = $this->db->get();
           // echo $this->db->last_query();
            $query2 = $query2->result_array();
            $query = array_merge($query1,$query2);
            $json = $query;
        }


        echo json_encode($json);
    }


}
