<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('admin_data')) {
            redirect("/admin/index/login");
        }
    }

      public function index() {
		           $this->session->set_userdata('adminApproved', '1');

		            $this->load->model(array('Common_model' => 'common'));
			        $this->load->model('admin/merchant/Registration_model', 'merchant');
				
					   $data['updatePassword']=$this->session->flashdata('updatePassword');
					  if(!isset($data['updatePassword']))
					  {
						$data['updatePassword']='';
					  }
					  
					   $data['com_type'] = $this->common->getTableData($tablename = "m_company_type", $cols = "m_company_type_id,company_type,status");
						
						$data['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status");
						$data['category_interested'] = $this->common->getTableData($tablename = "m_category", $cols = "m_category_id,category_name,status");
					  
	          	    $adminInfo=$this->session->userdata('admin_data');
				    $adminID=$adminInfo["store_id"];
		            $data['orders_data'] = $this->merchant->getUserDetails($adminID);
                    $template['content'] = $this->load->view('admin/merchant/profile/index', $data, TRUE);
                    $this->load->view('admin/template',$template);//For data tables only template
      }
	    public function updateProfile() 
	   { 	 
			    echo"update soon";
				print_r($_POST);
					   
       }
	   public function changePassword() {
			   
				
				 $adminInfo=$this->session->userdata('admin_data');
			   
		      $this->load->model(array('admin/Dashboard_model'=>'dashboard'));
             $data['username'] = $adminInfo["username"];
              $data['password']= $this->input->post('oldPassword')?$this->input->post('oldPassword'):'';
			   $data['newPassword']= $this->input->post('newPassword')?$this->input->post('newPassword'):'';
              if($this->input->post('oldPassword')!=""){
            
              $result = $this->dashboard->getStoreData($data['username'],$data['password']);
			   
			   //print_r($data);
 
           // echo $this->db->last_query(); exit;
                if($result)
                {     			
			  
			                  $this->dashboard->updatePassword($data['username'],$data['newPassword']);
					   
					   //echo $this->db->last_query(); exit;
							 
							 $this->session->unset_userdata('admin_data');
							 $this->session->set_flashdata('fail', 'Password Changed succussfully');
							 redirect("/admin/Index/login");
							// print_r($result);
	            }
                else
                { //print_r($result); 
			         $this->session->set_flashdata('updatePassword', 'Your old   password not matched');
                        redirect("admin/merchant/Profile");
                     
                }
                  
            }	   
         }
         private function set_upload_options()
    {   
        //upload an image options
        $config = array();
        $config['upload_path'] = './public/uploads/admin/profile/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']      = '0';
        $config['remove_spaces'] = TRUE;
        $config['overwrite']     = FALSE;
        $new_name = time().$_FILES["userfile"]['name'];
        $config['file_name'] = $new_name;

        return $config;
    }
	public function updateProfilePic() {
           // print_r($_FILES);
           // exit;
            $this->load->model(array('Common_model' => 'common'));
       $this->load->library('upload');
       $files = $_FILES;
       $cpt = count($_FILES['userfile']['name']);
       //Sliders adding with multiple images
            //$name = $this->input->post('caption')?$this->input->post('caption'):'somename';
           // $category_id = $this->input->post('category')?$this->input->post('category'):0;
            
           
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
                   
                 }
                $parameters = array(
                 'profile_pic' =>$image_path 
              );
              $where_cond = array(
                            "admin_id" => $this->session->userdata('admin_data')['admin_id'], 
                            
                        );
              if($image_path !=""){
                  if($this->session->userdata('admin_data')['profile_pic'] !==""){
                  $old_path = base_url()."public/uploads/".$this->session->userdata('admin_data')['profile_pic'];
                  if (file_exists($old_path)) {
                 unlink( $old_path );
                   }
              }
              $this->common->update($table='admin', $parameters, $where_cond);
              }
            
                
            }
            redirect('admin/merchant/Profile');

	}
 
	   

}
