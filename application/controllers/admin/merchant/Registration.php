<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

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
        $this->session->set_userdata('adminApproved', '0');


        $this->load->model('admin/merchant/Registration_model', 'merchant');
        $this->load->helper('url');
        $data['title'] = 'Merchant ';
        $data['totaldata'] = $this->merchant->get_attributetype_array();
        $data['datatable_path'] = "admin/merchant/Registration/ajax_list"; // must and should declare this value

        $template['content'] = $this->load->view('admin/merchant/registration/index', $data, TRUE);
        $this->load->view('admin/template_DT', $template); //For data tables only template
    }

    public function merchant() {
        $this->session->set_userdata('adminApproved', '1');
        $this->load->model('admin/merchant/Registration_model', 'merchant');
        $this->load->helper('url');
        $data['title'] = 'Merchant ';
        $data['totaldata'] = $this->merchant->get_attributetype_array();
        $data['datatable_path'] = "admin/merchant/Registration/ajax_list"; // must and should declare this value

        $template['content'] = $this->load->view('admin/merchant/registration/index', $data, TRUE);
        $this->load->view('admin/template_DT', $template); //For data tables only template
    }

    public function add() {
        $this->load->model('admin/merchant/Registration_model', 'merchant');
        if ($this->input->post('attribute_type') != '') {
            if ($this->merchant->insert_entry()) {
                $this->session->set_flashdata('message', 'Attribute type ' . $this->input->post('attribute_type') . ' Added');
                redirect('/merchant');
            }
        }
    }

    public function edit($id) {
        $this->load->model('admin/merchant/Registration_model', 'merchant');
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
        $this->load->model('admin/merchant/RegistrationDT_model', 'merchant');
        $list = $this->merchant->get_datatables();
        //echo $this->db->last_query();exit;

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $customers) {

            $full_url = base_url() . "admin/merchant/registration/threesixtydegrees/" . $customers->m_registration_id;
            $no++;
            $row = array();

            $fullname = $customers->first_name . " " . $customers->last_name;
            $row[] = $no;
            //$row[] = $customers->company_type;
            $row[] = $fullname;
            $row[] = $customers->mobile;
            $row[] = $customers->email;
            $row[] = $customers->company_name;
            $row[] = $customers->date;
           if($this->session->userdata('adminApproved')==1){
             $row[] = $customers->onBoardDate;
           }
            // $row[] = $customers->website;
            $row[] = $customers->city;

            $row[] = $customers->state;
            $row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-eye'></i> </a> ";
            
            $row[] = $customers->category_name;
            //$row[] = $customers->landline;
            //  $row[] = $customers->business_email;

            /* 			$ordernum = $customers->status;

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



              $row[] = "<select id='" . $customers->m_registration_id . "' class='form-control updateStatus'>" . $option0 . $option1 . $option2 . $option3 . "</select>";
              //$row[] = '<a class="red-tooltip" href="#" data-toggle="tooltip" data-placement="top" title="Name : nag, test : test1,Name : nag, test : test1,Name : nag, test : test1">Hover me</a>';
             */
           



            /*      //$row[] = $customers->city;
              $row[] = "<input enqiry_id= '".$customers->m_registration_id."' username='".$fullname."' email='".$customers->email."' type='button' name='send_proposal' id='send_proposal' value='Send Registration Form(s)'>";
             */

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
            $this->load->model('admin/merchant/RegistrationDT_model', 'merchant');
            $data['result'] = $this->merchant->row_delete($id);
            return $data['result'];
        }
        //$this->load->view('admin/attributetypes/list',$data);
    }

    public function ApprovedUser() {
        $this->load->model(array('common_model' => 'common'));
        $this->load->model('admin/merchant/Registration_model', 'index');
        $approvedId = $this->input->post("approvedId");
        $approveStatus = $this->input->post("approveStatus");

        $email = $this->input->post("email");
        $name = $this->input->post("name");
		$company_name = $this->input->post("company");


        $data2['store_id'] = $this->input->post("approvedId");
        $data2['store_name'] = $company_name;
        $data2['store_slug'] = preg_replace('/\s+/', '_', $company_name);
        $data2['business_address'] = $this->input->post("addressStore");
        $data2['mobile_number'] = $this->input->post("phoneMb");
        $data2['status'] = "1";
        $data2['view_count'] = "0";
        $data2['featured'] = "0";
        // print_r($data2);
        $this->session->set_userdata("storeData", $data2);


        $this->session->set_userdata("approvedId", $approvedId);
        $this->session->set_userdata("register_name", $name);
        $this->session->set_userdata("register_email", $email);

        $nameC = ucfirst(substr($name, 0, 1));
        $dateTime = str_shuffle(date("mdhis"));
        //$year=date("Y");
        $userPassword = "EVM" . $nameC . substr($dateTime, 4);
        $this->session->set_userdata('userPassword', $userPassword);



        if (isset($approvedId) && isset($approveStatus)) {
            $this->index->approveStatus($approveStatus, $approvedId);
        }
//$approveStatus = 1;
        if ($approveStatus == 1) {
           // echo $approveStatus; 
           $this->sendApproveMail();
        } else {

            $result = $this->common->check_email_registerd($email);
            if ($result == 1) {
                $result = $this->common->updateAdminStatus(0, $email);
            }

            echo 1;
        }
    }

    public function sendApproveMail() {
       
         $this->load->model(array('common_model' => 'common'));
        // $this->load->view('admin/email_templates/merchant/sendApproveMail');
        $this->load->helper('log_helper');//email setting avialble here
            emailConfigHelper();
        $email = $this->session->userdata("register_email");
        if (isset($email) && $email != '') {
         
            $contents['cart_session'] = "ok";

            $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
            $this->email->to($email); //customer email

            $body = $this->load->view('admin/email_templates/merchant/sendApproveMail', $contents, TRUE);

            $this->email->subject('Electric Vehicle Online Store Dashboard Information ' . $this->config->item('config_from_emailname'));
            $this->email->message($body);

            $this->email->send();





            $result = $this->common->check_email_registerd($email);
            if ($result == 1) {

                $this->common->updatePassword($this->session->userdata("userPassword"), $email);

                $this->common->updateAdminStatus(1, $email);
            } else {
                $data1['username'] = $this->session->userdata("register_email");
                $data1['password'] = $this->session->userdata("userPassword");
                $data1['store_id'] = $this->session->userdata("approvedId");

                $result = $this->common->insertdata($tablename = 'admin', $data1);

                $result = $this->common->insertdata($tablename = 'store', $this->session->userdata("storeData"));
            }
            if (isset($result)) {
                $this->session->unset_userdata("register_email");
                $this->session->unset_userdata("userPassword");
                $this->session->unset_userdata("approvedId");
                echo 1;
            } else {
                echo 0;
            }
        }
    }

    public function threesixtydegrees($id) {

        $this->session->userdata('adminApproved');

        $this->load->model('admin/merchant/Registration_model', 'merchant');
        $data['orders_data'] = $this->merchant->getUserDetails($id);

        $template['content'] = $this->load->view('admin/merchant/registration/threesixtydegrees', $data, TRUE);
        $this->load->view('admin/template', $template); //For data tables only template
    }

}
