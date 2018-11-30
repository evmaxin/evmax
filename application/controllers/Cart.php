<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    
    
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

    public function index() {
        //$this->session->set_userdata('cart_session', "");exit;
       // print_r($cart_session['product_id'])
        $this->load->model(array('admin/Product_model'=>'product'));
        $product_cart = array();
        $deliveryLoc = 0;
        $product_cart_deliveryLoc = array();
        $product_cart_attributes = array();
        // $data = json_decode($_POST['obj'],true);
        //echo "<pre/>";print_r($_POST);
        //print_r($this->input->post('options'));
        if ($this->session->userdata('cart_session')) {
//echo "here coming";
            $cart_session = $this->session->userdata('cart_session');
             
            //Seperate session value for attributes of product 'cart_session_attributes'
            $cart_session_attributes = $this->session->userdata('cart_session_attributes');
            $cart_session_deliveryLoc = $this->session->userdata('cart_session_deliveryLoc');
         //  echo "here previous value checking is doing"."<br>"; 
           //print_r($cart_session['product_id']);
            foreach ($cart_session['product_id'] as $cs => $val) {
                     $product_cart['product_id'][$cs] = $val;//$val has pruduct quantity and delevery location id
                foreach ($cart_session_attributes['options'] as $id1 => $val1) {
                    $product_cart_attributes['options'][$id1] = $val1;
                }
            }
            foreach ($cart_session_deliveryLoc['product_id'] as $pid => $val2) {
                $product_cart_deliveryLoc['product_id'][$pid] = $val2;//$val has pruduct quantity and delevery location id
               
            }
        }
        //print_r($product_cart);
        if ($this->input->post('qty')) {
           // echo "posted data1";
            //$qty_add = $this->input->post('qty').",".$this->input->post('delivery_location_id');
            $qty_add = $this->input->post('qty');
            $deliveryLoc = $this->input->post('delivery_location_id');
        } else {
            $qty_add = 1;
            $deliveryLoc = 0;
            //echo "nothing here";
        }
     

        $product_cart['product_id'][$this->input->post('product_id')] = $qty_add;
       // $product_cart['product_id']['delivery_location_id'] = $this->input->post('delivery_location_id');
        $product_cart_attributes['options'][$this->input->post('product_id')] = $_POST['tNames'];
        $product_cart_deliveryLoc['product_id'][$this->input->post('product_id')] = $deliveryLoc;
        //    array("3" =>array("2"),"12"=>array( "2", "1"),"13"=>array("4","5","7"));
        // setting values for product-id and value


        $this->session->set_userdata('cart_session', $product_cart);
        //Seperate session value for attributes of product '$product_cart_attributes'
        $this->session->set_userdata('cart_session_attributes', $product_cart_attributes);
         $this->session->set_userdata('cart_session_deliveryLoc', $product_cart_deliveryLoc);

        $cart_session = $this->session->userdata('cart_session');
        //print_r($product_cart_deliveryLoc); exit;
        //print_r($cart_session); exit;
        $arr = array();
        $arr['update_cart']['total'] = array_sum($cart_session['product_id']);
        echo json_encode($arr);
    }

    //In update cart not updating product attributes
    public function update() {



        $product_id = $this->input->post('product_id');
        $qty = $this->input->post('qty');

        $count_arr = count($product_id);


        for ($i = 0; $i < $count_arr; $i++) {

            $product_cart = array();

            if ($this->session->userdata('cart_session')) {

                $cart_session = $this->session->userdata('cart_session');
                //print_r($cart_session); exit;
                foreach ($cart_session['product_id'] as $cs =>  $val) {
                  $product_cart['product_id'][$cs] = $val;
             
                }
            }

            if ($qty[$i] == 0) {
                $qty_add = 1;
            } else {
                $qty_add = $qty[$i];
            }


            $product_cart['product_id'][$product_id[$i]] = $qty_add;
    //print_r($product_cart);
            //$product_cart['options'][$product_id[$i]] = array("1" =>array("5"),"12"=>array( "2", "1"),"13"=>array("4","5","7"));
            $this->session->set_userdata('cart_session', $product_cart);
        }

       
        $cart_session = $this->session->userdata('cart_session');
        //print_r($cart_session);
        $arr = array();
        $arr['update_cart']['total'] = array_sum($cart_session['product_id']); 
       // $arr['update_cart'] = array_sum($cart_session);// Original Data 
        echo json_encode($arr);
    }

    public function delete() {

        $product_cart = array();

        if ($this->session->userdata('cart_session')) {

            $cart_session = $this->session->userdata('cart_session');
           //print_r($cart_session['product_id']);
            foreach ($cart_session['product_id'] as $cs => $val) {
                
       // $valArray = explode(',', $qtyNloc);
             // $val = $valArray[0];
               //  $delLoc = $valArray[1];
                if ($this->input->post('product_id') == $cs) {
                    
                } else {
                    $product_cart['product_id'][$cs] = $val;
                }
                //echo "@".$val."@<br>"; 
              //  echo "*".$delLoc.'*<br>';
            }
           // exit;
        }




        $this->session->set_userdata('cart_session', $product_cart);

        $cart_session = $this->session->userdata('cart_session');

        $arr = array();
        $arr['update_cart'] = array_sum($cart_session);
        echo json_encode($arr);
    }

    public function empty_cart() {

        $this->session->unset_userdata('cart_session');

        $arr = array();
        $arr['update_cart'] = 0;
        echo json_encode($arr);
    }

}
