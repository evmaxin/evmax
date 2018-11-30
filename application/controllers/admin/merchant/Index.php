<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('admin_data')) {
            redirect("/admin/index/login");
        }
    }

    /**
     * @file        : Index.php
     * @type        : Controller
     * @author      : Nagender
     * @description : Merchant details shown here
     * @date        : 06/08/2018
     *  
     */
    public function index() {
        $this->load->model('admin/merchant/Index_model', 'merchant');
        $this->load->helper('url');
        $data['title'] = 'Merchant ';
        $data['totaldata'] = $this->merchant->get_attributetype_array();
        $data['datatable_path'] = "admin/merchant/Index/ajax_list"; // must and should declare this value

        $template['content'] = $this->load->view('admin/merchant/index/index', $data, TRUE);
        $this->load->view('admin/template_DT', $template); //For data tables only template
    }

    public function add() {
        $this->load->model('admin/merchant/Index_model', 'merchant');
        if ($this->input->post('attribute_type') != '') {
            if ($this->merchant->insert_entry()) {
                $this->session->set_flashdata('message', 'Attribute type ' . $this->input->post('attribute_type') . ' Added');
                redirect('/merchant');
            }
        }
    }

    public function edit($id) {
        $this->load->model('admin/merchant/Index_model', 'merchant');
        $data['edit_types'] = $this->merchant->get_attributetype($id);
        if (!isset($_POST['update'])) {

            $template['content'] = $this->load->view('admin/attributetypes/edit', $data, TRUE);
        } else {
            if ($this->merchant->update_entry($id)) {
                $this->session->set_flashdata('message', 'Attribute type ' . $data['edit_types'][0]->attribute_type . " Updated as " . $this->input->post('attribute_type'));
                redirect('/merchant');
            }
        }
        $this->load->view('admin/template', $template); //For data tables only template
    }

    public function ajax_list() {
        $this->load->model('admin/merchant/IndexDT_model', 'merchant');
        $list = $this->merchant->get_datatables();
       //echo $this->db->last_query();exit;
       
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {
            //$full_url = base_url() . "admin/merchant/Index/edit/" . $customers->m_enquiry_id;
            $no++;
            $row = array();

            $fullname = $customers->first_name . " " . $customers->last_name;
            $row[] = $no;
            $row[] = $customers->company_name;
            //$row[] = $customers->company_type;
            $row[] = $fullname;
            $row[] = $customers->mobile;
            $row[] = $customers->email;
            $row[] = ($customers->status==0)?"Pending":"Proccessing";
             $row[] = $customers->category_name;
            $row[] = $customers->city;
            $row[] = $customers->state;
            //$row[] = $customers->landline;
          //  $row[] = $customers->business_email;
            $row[] = $customers->website;
            $row[] = $customers->enquiry_date;
            
            //$row[] = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            
            $ordernum = $customers->status;
            $name0 = "Pending";
            $name1 = "Approved";
            $name2 = "Rejected";
            $name3 = "Proccessing";

            $option0 = '';
            $option1 = '';
            $option2 = '';
            $option3 = '';
            for ($i = 0; $i <= 3; $i++) {
                if ($ordernum == $i) {
                    ${"option" . $i} = "<option value='" . $i . "' selected>" . ${"name" . $i} . "</option>";
                } else {
                    ${"option" . $i} = "<option value='" . $i . "'>" . ${"name" . $i} . "</option>";
                }
            }



           // $row[] = "<select id='" . $customers->m_enquiry_id . "' class='form-control updateStatus'>" . $option0 . $option3 . "</select>";
            
           
           
            //$row[] = $customers->city;
            $row[] = "<input enqiry_id= '".$customers->m_enquiry_id."' username='".$fullname."' email='".$customers->email."' type='button' name='send_proposal' id='send_proposal' value='Send Registration Form(s)'>";
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->merchant->count_all(),
            "recordsFiltered" => $this->merchant->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function deletedata() {
        $id = $this->input->post('attribute_type_id') ? $this->input->post('attribute_type_id') : 0;
        if ($id > 0) {
            $this->load->model('admin/merchant/IndexDT_model', 'merchant');
            $data['result'] = $this->merchant->row_delete($id);
            return $data['result'];
        }
        //$this->load->view('admin/attributetypes/list',$data);
    }

    public function updateStatus() {
        $this->load->model('admin/merchant/Index_model', 'index');
        $enquiry_id = $this->input->post("enquiry_id");
        $status = $this->input->post("status");
        if (isset($enquiry_id) && isset($status)) {
            $this->index->updateStatus($status, $enquiry_id);
        }
        echo 1;
    }
    public function sendProposal() {
        $this->load->model('Common_model', 'common');
        $email = $this->input->post("email");
        $name = $this->input->post("name");
        $enqiry_id = $this->input->post("enqiry_id");
        $this->session->set_userdata("enquiry_name",$name);
        $this->session->set_userdata("enquiry_email",$email);
        //$this->session->set_userdata("enqiry_id",$enqiry_id);
            $this->load->helper('log_helper');//email setting avialble here
             emailConfigHelper();
            $contents['cart_session'] = "ok";

            $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
            $this->email->to($this->input->post("email")); //customer email
            $body = $this->load->view('admin/email_templates/merchant/sendRegistrationLink', $contents, TRUE);
			//$body = $this->load->view('admin/email_templates/sendProposal', $contents, TRUE);
            $this->email->subject('Registration Form(s) link from '.$this->config->item('config_from_emailname'));
            $this->email->message($body);

            $this->email->send();
          if(isset($email) && !empty($email))
                {
              $parameters = array(
                 'status' =>3 
              );
              $where_cond = array(
                            "m_enquiry_id" => $enqiry_id, 
                            
                        );
              $this->common->update($table='m_enquiry', $parameters, $where_cond);
                   // $this->common->deleteTable($tablename='product_attributes',$table_id='product_id',$row_id=$id);
                }
        
        echo 1;
    }
    public function changePassword() {
         $this->load->model(array('admin/Dashboard_model'=>'dashboard'));
		$data['title'] = "ChangePassword";
                $template['content'] = $this->load->view('admin/merchant/index/changePassword', $data, TRUE);
		$this->load->view('admin/template',$template);
    }
     public function changeMerchantPassword() {
             
                $this->form_validation->set_rules('newPassword', 'Password', 'required');
                $this->form_validation->set_rules('confirmPassword', 'Password Confirmation', 'required|matches[newPassword]');
                //$this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

                if ($this->form_validation->run() == FALSE)
                {
                $this->load->model(array('admin/Dashboard_model'=>'dashboard'));
		$data['title'] = "ChangePassword";
                $template['content'] = $this->load->view('admin/merchant/index/changePassword', $data, TRUE);
		$this->load->view('admin/template',$template);
                }else
                {
		$adminInfo = $this->session->userdata('admin_data');
			   
		$this->load->model(array('admin/Dashboard_model'=>'dashboard'));
             $data['username'] = $adminInfo["username"];
              //$data['password'] = $this->input->post('oldPassword')?$this->input->post('oldPassword'):'';
                $data['newPassword']= $this->input->post('newPassword')?$this->input->post('newPassword'):'12345';
                $data['confPassword']= $this->input->post('confirmPassword')?$this->input->post('confirmPassword'):'';
             // if($this->input->post('oldPassword')!=""){
            
              //$result = $this->dashboard->getStoreData($data['username'],$data['password']);

                if($data['newPassword']===$data['confPassword'])
                {  
                    $msg = "Password Changed succussfully.";                    
		 $this->dashboard->updatePassword($data['username'],$data['newPassword']);
		 $this->session->unset_userdata('admin_data');
		 //$this->session->set_flashdata('fail', 'Password Changed succussfully');
		 redirect("/merchant/login?q=success&msg=$msg");
	       }else{ 
                   $msg = "Your password not matched."; 
             //$this->session->set_flashdata('fail', 'Your password not matched');
                        redirect("admin/merchant/Index/changePassword?q=success&msg=$msg");
                     
                }
              //}
                  
            }	   
         }
           public function logout() {
               $this->session->set_userdata('admin_data',"");
               if($this->session->userdata('login_type')=== "2"){
                    redirect("/merchant/login");
               }
               else if($this->session->userdata('login_type')=== "1"){
                    redirect("/admin/index/login");
               }
               else {
                    redirect("/");
               }
            }
   
}
