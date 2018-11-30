<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//This is same as category controller but problem with pagination
class Stores extends CI_Controller {
        
      /**
	 * @file        : Stores.php
         * @type        : Controller
         * @author      : Nagender(Initiated)
         * @description : Category controller for LookPI 
         * @date        : 26/01/2018
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
             $this->load->model(array('Common_model' => 'common'));
        // $contents['title'] = $this->Common_lib->Storeslist(0,$num_limit=30,1);
          $contents['title'] ="";
         //echo $this->db->last_query();
      
        $slug = ($this->uri->segment(1) == "store")?$this->uri->segment(2): '';
        $contents['stores'] = $this->common->getStoreBannerNLogo($slug);
        //echo $this->db->last_query();
        $template['content'] = $this->load->view('frontpages/stores/index', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
	}
        public function register() {
         $contents['data'] = "";
        $template['content'] = $this->load->view('frontpages/stores/register', $contents, TRUE);
        $this->load->view('frontpages/store_template', $template);
            
        }
        public function addCustomer() {
              $this->load->model(array('common_model'=>'common'));
            $data['store_name'] = $this->input->post('store_name')?$this->input->post('store_name'):'';
            //str_replace($this->input->post('store_name'),$replace,$arr);
           $store_name = preg_replace("/[^ \w]+/", "", $this->input->post('store_name'));
           $store_name = str_replace('$', '-', strtolower($store_name));
           $data['store_slug']= str_replace(' ', '-', strtolower($store_name));
            //$data['email'] = $this->input->post('email')?$this->input->post('email'):'';
            $data['mobile_number'] = $this->input->post('phone')?$this->input->post('phone'):0;
            //$data['password'] = $this->input->post('password')?$this->input->post('password'):'';
            //$data['conf_password'] = $this->input->post('confpassword')?$this->input->post('confpassword'):'';
            if(($this->input->post('email') !="") && ($this->input->post('password') !="") && ($this->input->post('password') === $this->input->post('confpassword'))){
           $res =  $this->common->insertdata($tablename='store',$data);
            }
           if($res)
            {
             $data1['username'] = $this->input->post('email')?$this->input->post('email'):'';
            $data1['password'] = $this->input->post('password')?$this->input->post('password'):'';
            $data1['store_id'] = $res?$res:'';
            $res =  $this->common->insertdata($tablename='admin',$data1);
           }
         //   }
            if($res)
            {
                 $this->session->set_flashdata('success', 'Registraion is successful ,We will get back to you shortly');
                      redirect("Stores/register");
               // redirect("customers/registersuccess");
            }
            
        }
    
  
        
}
