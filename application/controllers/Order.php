<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $libraries = array(
            // 'Log_lib' => 'logger',
            // 'user_agent' =>'agent',
            'Common_lib' => 'Common_lib'
        );
        $this->load->helper('log_helper');
        $this->load->library($libraries);

        log_data(); //helper function

        if (isset($_REQUEST['country']) && ($_REQUEST['country'] != "")) {
            searchLog();
        }
    }

    public function index() {

         //print_r($this->session->userdata('cart_session')); exit;

        $payment_info = $this->session->userdata('payment_info') ? $this->session->userdata('payment_info') : '';
        if (empty($payment_info)) {
            echo "Order failed";
            exit;
        }
        $admin_email ='';
        $delLoc =0;$delLoc1=0;
        $this->load->model('frontend/Product_model', 'product');
        $this->load->model('Common_model', 'common');
        $this->load->model('frontend/customers_model', 'customers');
        $cart_session = $this->session->userdata('cart_session');
        $cart_session_deliveryLoc = $this->session->userdata('cart_session_deliveryLoc');
        $customer_data = $this->session->userdata('customer_data');
        $customer_id = $customer_data['id'] ? $customer_data['id'] : 0;
        $default_delivery_type_id = $this->input->post('makedefault') ? $this->input->post('makedefault') : 1; //check this once
        $cart_session_attributes = $this->session->userdata('cart_session_attributes');
        if ($cart_session) {
          //  print_r($cart_session['product_id']);
            $i = 0;
            $total = 0;
            //$tax =0;
            $unique_order_number = time();
            //orders table data    
              foreach ($cart_session_deliveryLoc['product_id'] as $pid => $val2) {
                //$valArray1 = explode(',', $qtyNloc1);
                //print_r($valArray1);
               // if(isset($valArray1[1])&&(!empty($valArray1[1]))){
                $delLoc1 = $val2;
               // }
                 }
                // exit;
            $orders_data = array(
                'customer_id' => $customer_id,
                'store_id' => $this->session->userdata('store_id') ? $this->session->userdata('store_id') : 0,
                'order_number' => $unique_order_number,
                'deliveryaddress_type' => $default_delivery_type_id,
                'trans_id' => $payment_info['txnid'] ? $payment_info['txnid'] : 0,
                'payment_amt' => $payment_info['amount'] ? $payment_info['amount'] : 0,
                'payment_status' => $payment_info['status'] ? $payment_info['status'] : 0,
                'tax' => $this->session->userdata('tax') ? ($this->session->userdata('tax')+$this->session->userdata('shipping_gst')+$this->session->userdata('handling_gst')) : 0,
                'delivery_location_id'=>$delLoc1,
                'status' => 1
            );
            $order_id = $this->common->insertdata($table = 'orders', $orders_data); // Order insert in db
           //echo $this->db->last_query();

            foreach ($cart_session['product_id'] as $cs => $value) {
                //$valArray = explode(',', $qtyNloc);
               // $value = $valArray[0];
               //   if(isset($valArray[1])&&(!empty($valArray[1]))){
                //$delLoc = $valArray[1];
                //}
                  foreach ($cart_session_deliveryLoc['product_id'] as $pid => $val2) {
                      if($cs === $pid)
                      {
                        $delLoc  = $val2;
                      }
             //   $product_cart_deliveryLoc['product_id'][$pid] = $val2;//$val has pruduct quantity and delevery location id
               
            }
                //Check inventory before inserting into orders_details or 
                $isInventoryExist = $this->common->checkStockLevel($table = 'product', $cs, $value);
                if (isset($isInventoryExist) && ($isInventoryExist[0]->inventory > 0)) {

                    $row = $this->product->get_product($cs);
                    $total = ($row[0]->offer_price) * $value;
                    $tax = ($row[0]->product_gst * (($row[0]->offer_price) * $value)) / 100;
                    $shipping_gst = ($row[0]->shipping_gst * (($row[0]->delivery_cost) * $value)) / 100;
                    $handling_gst = ($row[0]->handling_gst * (($row[0]->handling_cost) * $value)) / 100;
                    $delivery_cost = (($row[0]->delivery_cost)*$value);
                    $handling_cost = (($row[0]->handling_cost)*$value);
                    $coupon_value = (($row[0]->coupon_value)*$value);
                    $admin_email = $row[0]->admin_email;
                    $orders_details_data = array(
                        'order_id' => $order_id,
                        'product_id' => $cs,
                        'quantity' => $value,
                        'total_price' => $total,
                        'tax' => $tax,
                        'delivery_location_id' =>$delLoc,
                        'product_gst' => $tax,
                        'shipping_gst' => $shipping_gst,
                        'handling_gst' => $handling_gst,
                        'delivery_cost' => $delivery_cost,
                        'handling_cost' => $handling_cost,
                        'coupon_value' => $coupon_value,
                        'store_id' => $row[0]->store_id,
                        
                    );

                    $orderdetail_id = $this->common->insertdata($table = 'order_detail', $orders_details_data);

                    $inventory_value = $isInventoryExist[0]->inventory - $value;
                    $parameters = array('inventory' => $inventory_value);
                    $this->common->updateProductInventoy($table = 'product', $parameters, $cs); //update inventory in products table
                    //foreach($cart_session['options'][$cs] as $cs1=>$value1)
                    //Seperate session value for attributes of product $cart_session_attributes
                    foreach ($cart_session_attributes['options'][$cs] as $cs1 => $value1) {
                        foreach ($value1 as $c => $v) {
                            $order_product_attributes_data = array(
                                'orderdetail_id' => $orderdetail_id,
                                'order_id' => $order_id,
                                'attribute_type_id' => 0,
                                'attribute_id' => $v,
                                'product_id' => $cs,
                            );
                            $id = $this->common->insertdata($table = 'order_product_attributes', $order_product_attributes_data);
                        }
                    }
                    $i++;
                } else {
                    echo "Insufficient inventory";
                    redirect("Order/failure");
                }
            }
        } else {
            redirect("Home/index");
        }

        if (isset($orderdetail_id) && ($orderdetail_id > 0)) {
            $this->session->set_userdata('order_number', $unique_order_number);
            $this->load->helper('log_helper');//email setting avialble here
             emailConfigHelper();
             
            $contents['customer_data'] = $this->session->userdata('customer_data');
            $customer_id = $this->session->userdata('customer_data') ? $this->session->userdata('customer_data')['id'] : 0;
            $contents['estimated_delivery_date_1'] = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') + 3, date('Y')));
            $contents['estimated_delivery_date_2'] = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') + 5, date('Y')));
            $contents['customer_delhivery_address'] = $this->customers->isCustomerAddressAdded($customer_id, $add_type = 1);
            $contents['your_store_address'] = "Your Store Address ";
            $contents['cart_session'] = $this->session->userdata('cart_session');

           $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
            $this->email->to($this->session->userdata('customer_data')['email']); //customer email
            $body = $this->load->view('admin/email_templates/orders_email', $contents, TRUE);
            $this->email->subject('Order from '.$this->config->item('config_from_emailname'));
            $this->email->message($body);

            $cust_email = $this->email->send();
           // if($cust_email){
            $this->email->from($this->config->item('config_from_email'), $this->config->item('config_from_emailname'));
            $this->email->to($admin_email); //admin email
            $body = $this->load->view('admin/email_templates/admin_order_email', $contents, TRUE);
            $this->email->subject('Order Number ' + $this->session->userdata('order_number'));
            $this->email->message($body);
            $this->email->send();
            //}

            $this->session->set_userdata('cart_session', "");
            redirect("Order/success");
        }
    }

    public function success() {
        $contents = array('meta_keywords' => '',
            'meta_description' => '',
            'meta_title' => '');
        $base_url = base_url();
        $contents['title'] = "Success";
        $template['content'] = $this->load->view('frontpages/order/success', $contents, TRUE);
        $this->load->view('frontpages/template', $template);
        //  echo "success";
        // echo '<meta http-equiv="refresh" content="3;url='.$base_url.'">';
    }

    public function failure() {
        $base_url = base_url();
        echo "Some products are not Available";
        echo '<meta http-equiv="refresh" content="3;url=' . $base_url . '">';
    }

}
