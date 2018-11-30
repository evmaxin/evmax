<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Orders extends CI_Controller {

    /**
     * @file        : Attributes.php
     * @type        : Controller
     * @author      : Nagender
     * @description : Adding Attributes in this controller with all actions like add,edit, delete etc.
     * @date        : 12/07/2017
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
        $data['title'] = 'Orders';
        $this->load->model(array('admin/OrdersDT_model' => 'attributetype', 'admin/Category_model' => 'category','Common_model' => 'common'));
        $data['datatable_path'] = "admin/Orders/ajax_list"; // must and should declare this value
        $data['shipping'] = $this->common->getTableData($tablename = "shipping", $cols = "name,shipping_id,url");
        $template['content'] = $this->load->view('admin/orders/index', $data, TRUE);
        $this->load->view('admin/template_DT', $template); //For data tables only template
    }

    public function ajax_list() {
        $this->load->model('admin/OrdersDT_model', 'customers');
        $list = $this->customers->get_datatables();
//echo $this->db->last_query();
        $data = array();
        $no = $_POST['start'];
        $select_txt = "";
        foreach ($list as $customers) {
              if($customers->status ==='11'){
                  $select_txt = "disabled";
              }
            $full_url = base_url() . "admin/orders/threesixtydegrees/" . $customers->order_id;
            $no++;
            $row = array();
            $row[] = $no;
            //$row[] = $customers->firstname;
            $row[] = '#' . $customers->order_number;
            $row[] = ($customers->order_date);
            //$row[] = ($customers->full_description);
            $row[] = $customers->quantity;
            $row[] = "&#8377; ".(($customers->total_price+$customers->tax)- ($customers->coupon_value));
            
            // $row[] = ($customers->store_name);
            $ordernum = $customers->status;
            //$name0 = "";
            $name1 = "Waiting on Confirmation";
            $name2 = "Confirm Order";
            $name3 = "Waiting on Packing and Picking";
            $name4 = "Notify Order Ready for Pickup";
            $name5 = "Waiting on Delivery Partner Confirmation";
            $name6 = "Delivery Partner Confirmed";
            $name7 = "Delivery in process";
            $name8 = "Delivered";
            $name9 = "Payment in process";
            $name10 = "Payment Transferred";
          //  $name11 = "Order Cancelled";
            // $name7 = "Delivery in process";

            
            $option1 = '';
            $option2 = '';
            $option3 = '';
            $option4 = '';
            $option5 = '';
            $option6 = '';
            $option7 = '';
            $option8 = '';
            $option9 = '';
            $option10 = '';
            //$option11 = '';
            for ($i = 1; $i <= 10; $i++) {
                if ($ordernum == $i) {
                    ${"option" . $i} = "<option value='" . $i . "' selected>" . ${"name" . $i} . "</option>";
                } else {
                    ${"option" . $i} = "<option value='" . $i . "'>" . ${"name" . $i} . "</option>";
                }
            }


if($customers->status ==='11'){
            $row[] = "<span>Order Cancelled</span> ";
           
}else
            {
            $row[] = "<select admin_email='" . $customers->admin_email . "' cust_email='" . $customers->cust_email . "' cust_name='" . $customers->firstname . "' order_number='" . $customers->order_number . "' id='" . $customers->order_id . "' class='form-control updateStatus' '$select_txt'>" . $option1 . $option2 . $option3 . $option4 . $option5 . $option6 . $option7 . $option8 . $option9 . $option10 ."</select>";
            }
            $row[] = "<a href='$full_url' class='btn green'> <i class='fa fa-eye'></i> </a> ";
            if($customers->status ==='11'){
            $row[] = "<span>Order Cancelled</span> ";
            }else
            {
               $row[] = "<button name='cancel'  val_txt='11' value='Cancel Order' admin_email='" . $customers->admin_email . "' cust_email='" . $customers->cust_email . "' cust_name='" . $customers->firstname . "' order_number='" . $customers->order_number . "' id='" . $customers->order_id . "' class='form-control cancelOrder'>Cancel</button> ";
            }

            $data[] = $row;
        }

        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->customers->count_all(),
            "recordsFiltered" => $this->customers->count_filtered(),
            "data" => $data,
        );
        //output to json format
        echo json_encode($output);
    }

    public function threesixtydegrees($id) {

        $this->load->model(array('Common_model' => 'common','admin/Orders_model' => 'orders'));
        $data['orders_data'] = $this->orders->get_ordersDetails($id);
       //echo $this->db->last_query();
        $data['attributes_data'] = $this->orders->get_orderAttributes($id);
        //$str_id =($this->session->userdata('admin_data')['store_id']==1)?0:$this->session->userdata('admin_data')['store_id'];
      //  $val =  "store_id => $str_id";
         $where_cond = array(
                            "status" => 1,
               
                        );
         if($this->session->userdata('admin_data')['store_id']!=='1')
         {
          $where_cond["store_id"] = $this->session->userdata('admin_data')['store_id'];
         }
        // array_push($where_cond,"store_id" => $str_id);
         $data['pickuplocations'] = $this->common->getTableData($tablename="pickup_location", $cols="*",$where_cond,$order_by="ASC",$order_col="pickup_loc_name");
        // echo $this->db->last_query();
        $template['content'] = $this->load->view('admin/orders/threesixtydegrees', $data, TRUE);
        $this->load->view('admin/template', $template); //For data tables only template
    }

    public function customer_orders($param) {

        echo "under process";
    }
    public function shippingDetailsUpdate() {
          $this->load->model(array('admin/Orders_model' => 'index','Common_model' => 'common'));
        
           $tracking_id = $this->input->post("trackingid")?$this->input->post("trackingid"):0;
           if($tracking_id>0){
          $status = "Your product delivery in process. <a href='https://www.fedex.com/apps/fedextrack/?action=track&trackingnumber=$tracking_id&cntry_code=us&locale=en_US'>Track your shipment</a>";
          //$id = $this->input->post("id1");
       $id = $this->input->post("id1");
       $contents['status'] =  $status;//$name1
       $contents['order_number'] = $order_number = $this->input->post("order_number1");
       $contents['cust_name'] = $this->input->post("cust_name1");
       $contents['cust_email'] = $this->input->post("cust_email1");
       $contents['admin_email'] = $this->input->post("admin_email1");
       if (isset($id) && isset($status)) {
            $this->index->updateStatus(7, $id);
            $parameters = array(
                 'shipping_id' =>$this->input->post("shipping_id"),
                'tracking_id' => $tracking_id
              );
              $where_cond = array(
                            "order_id" => $id, 
                            
                        );
              $this->common->update($table='orders', $parameters, $where_cond);
           
            // echo $this->db->last_query(); exit;
        }
        $this->load->helper('log_helper');//email setting avialble here
             emailConfigHelper();
            $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
            $this->email->to($this->input->post("cust_email1")); //customer email
            $body = $this->load->view('admin/email_templates/order_status', $contents, TRUE);
            $this->email->subject("Your Order Number: ".$order_number);
            $this->email->message($body);

            $this->email->send();
            $this->session->set_flashdata('message', 'Shipping details updated successfully.');
           }
            redirect("admin/orders");
    }
    public function updateStatus() {
        $this->load->model('admin/Orders_model', 'index');
       // $name='';
        $status = $this->input->post("status");
        //$name ="name";
             $name1 = "";
            $name2 = "Your Order has been confirmed. Packing and Picking in Process.";//confirm order
            //$name2 = "Confirm Order";
            $name3 = "Your Order is Ready for pickup by our Delivery Partner.";
            $name4 = "";
           $name5 = "";
            $name6 = "";
            $name7 = "Your product delivery in process. Estimated delivery date is between DD/MM/YYYY and DD/MM/YYYY.";
           $name8 = "Your product delivered at address.";
           $name9 = "";
            $name10 = "";
            $name11 = "Your Order Cancelled.";
            
            $merch1 = "";
            $merch2 = "";
            //$name2 = "Confirm Order";
            $merch3 = "Product ready for pickup and delivery at pickup address";
            $merch4 = "";
           $merch5 = "";
            $merch6 = "";
            $merch7 = "";
           $merch8 = "";
           $merch9 = "";
            $merch10 = "";
            
            
        $id = $this->input->post("id");
        
       $contents['order_number'] = $order_number = $this->input->post("order_number");
       $contents['cust_name'] = $this->input->post("cust_name");
       $contents['cust_email'] = $this->input->post("cust_email");
       $contents['admin_email'] = $this->input->post("admin_email");
       //$contents['cust_name'] = $name3;
       $contents['status'] = $status1 = ${"name" . $status};//$name1
       $contents['delivery_status'] = $delhi_status = $merch.$status;
       
        if (isset($id) && isset($status)) {
            $this->index->updateStatus($status, $id);
            // echo $this->db->last_query(); exit;
        }
        if($status1 !== ""){
          $this->load->helper('log_helper');//email setting avialble here
             emailConfigHelper();
            $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
            $this->email->to($this->input->post("cust_email")); //customer email
            $body = $this->load->view('admin/email_templates/order_status', $contents, TRUE);
            $this->email->subject("Your Order Number: " + $order_number);
            $this->email->message($body);

            $this->email->send();
        }
        if($delhi_status !== ""){
         /* $this->load->helper('log_helper');//email setting avialble here
             emailConfigHelper();
            $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
            $this->email->to("nagsky1@gmail.com"); //customer email
            $body = $this->load->view('admin/email_templates/merchant_order_status', $contents, TRUE);
            $this->email->subject('Order number : ' + $order_number);
            $this->email->message($body);

           $this->email->send();
          * */
          
        }
        echo 1;
    }

}
