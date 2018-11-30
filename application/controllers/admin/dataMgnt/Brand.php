<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller {

    /**
     * @file        : Brand.php
     * @type        : Controller
     * @author      : Nagender
     * @description : Adding Brand in this controller with all actions like add,edit, delete etc.
     * @date        : 11/09/2018
     *  
     */
    public function __construct() {
        parent::__construct();
        if (!$this->session->userdata('admin_data')) {
            redirect("/admin/index/login");
        }
    }

    public function index() {
        $this->load->helper('url');
        $data['title'] = 'Brands';

        $this->load->model(array('common_model' => 'common'));

        $cols = "category_id,category_name";
        $data['dropdown'] = $this->common->getTableData("category", $cols, $where_cond = '');

        $data['datatable_path'] = "admin/dataMgnt/Brand/ajax_list"; // must and should declare this value

        $template['content'] = $this->load->view('admin/DataMgnt/brand/index', $data, TRUE);
        $this->load->view('admin/template_DT', $template); //For data tables only template
    }

    public function add() {


        $this->load->model(array('common_model' => 'common'));
        if ($this->input->post('name') != "") {

            $name = $this->input->post('name');
            $select_id = $this->input->post('select_id');
            $store_id = $this->session->userdata('admin_data')['store_id']?$this->session->userdata('admin_data')['store_id']:0;

            $data = array(
                'name' => $name,
                'category_id' => $select_id,
                'store_id' => $store_id
            );
            $insert_id = $this->common->insertdata($tablename = "brand", $data);
            
        }


        redirect('admin/dataMgnt/Brand/index');
    }

    public function edit($id) {

        $this->load->model(array('common_model' => 'common'));

        $cols = "category_id,category_name";
        $data['category'] = $this->common->getTableData("category", $cols, $where_cond = '');

        $cols1 = "name,category_id,brand_id";
        $where_cond1 = array('brand_id' => $id);
        $data['brand'] = $this->common->getTableData("brand", $cols1, $where_cond1); //attribute name and id are seperated by tild(~)


        $template['content'] = $this->load->view('admin/DataMgnt/brand/edit', $data, TRUE);
        $this->load->view('admin/template', $template);
    }

    public function block($id) {

        $this->load->model(array('common_model' => 'common'));
        $where_cond = array('brand_id' => $id);
        $status = ($this->input->post('status') === '1')?0:1;// if block unblock or vice versa
        //$data['category_id'] = $this->input->post('select_id') ? $this->input->post('select_id') : '';
        $data['status'] = $status;

        if ($this->common->update($tablename = 'brand', $data, $where_cond)) {
            redirect('admin/dataMgnt/Brand/index');
        }
    }

    public function update($id) {

        $this->load->model(array('common_model' => 'common'));

        $where_cond = array('brand_id' => $id);

        $data['category_id'] = $this->input->post('select_id') ? $this->input->post('select_id') : '';
        $data['name'] = $this->input->post('name') ? $this->input->post('name') : '';

        if ($this->common->update($tablename = 'brand', $data, $where_cond)) {
            redirect('admin/dataMgnt/Brand/index');
        }
    }

    public function ajax_list() {
        $store_id = $this->session->userdata('admin_data')['store_id']?$this->session->userdata('admin_data')['store_id']:0;
        $this->load->model('admin/dataMgnt/BrandDT_Model', 'alias');
        $list = $this->alias->get_datatables();
        // echo $this->db->last_query();
        // print_r($list);
        //	exit;

        $data = array();
        $no = $_POST['start'];
        foreach ($list as $val) {
            $full_url = base_url() . "admin/dataMgnt/Brand/edit/" . $val->brand_id;
            if($store_id === '1'){
                    $delete ="<a class='delete red btn' data-name='$val->name' data-status='$val->status' data-id='$val->brand_id'> Deactivate</a>";
                    $delete1 ="<a class='delete green btn' data-name='$val->name' data-status='$val->status' data-id='$val->brand_id'> Activate </a>";
                    }else{
                        $delete="";
                        $delete1="";
                    }
            $no++;
            $row = array();
            $row[] = $no;

            $row[] = $val->category_name;
            $row[] = $val->name;
             $row[] = ($val->status == 1)?'Active':'Blocked';
            //if (isset($this->session->userdata('admin_data')['store_id']) && ($this->session->userdata('admin_data')['store_id'] == 1)) {
               if($val->status == 1){
                $row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-edit'></i> </a> $delete";
               }else{
                   $row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-edit'></i> </a> $delete1";
               }
            //}
            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->alias->count_all(),
            "recordsFiltered" => $this->alias->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

}
