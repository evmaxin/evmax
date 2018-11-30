<?php
Class Product_lib{
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// data from products controller
public function add($param = array(),$request_form='WEB',$request_format="ARRAY", $response_format="ARRAY")
{
    $CI = & get_instance();
    $CI->load->model(array('Product_model'=>'product'));
    $sku = isset($param['sku']) ? $param['sku'] :'';
    $name = isset($param['name']) ? $param['name'] :'';
    $actual_price = isset($param['actual_price']) ? $param['actual_price'] :'';
    $offer_price = isset($param['offer_price']) ? $param['offer_price'] :'';
    //$product_cost = isset($param['product_cost']) ? $param['product_cost'] :'';
    $inventory = isset($param['inventory']) ? $param['inventory'] :'';
    $full_description = isset($param['full_description']) ? $param['full_description'] :'';
    $store_id = isset($param['store_id']) ? $param['store_id'] :'';
    $make =isset($param['make']) ? $param['make'] :'';
    $model_id =isset($param['model_id']) ? $param['model_id'] :'';
    $variant_id =isset($param['variant_id']) ? $param['variant_id'] :'';
    $manufacture_year_id =isset($param['manufacture_year_id']) ? $param['manufacture_year_id'] :'';
    $brand_id =isset($param['brand_id']) ? $param['brand_id'] :'';
    $speed =isset($param['speed']) ? $param['speed'] :'';
    $rrange =isset($param['rrange']) ? $param['rrange'] :'';
   // $license =isset($param['license']) ? $param['license'] :'';
    //$registration =isset($param['registration']) ? $param['registration'] :'';
    $motor_output =isset($param['motor_output']) ? $param['motor_output'] :'';
    $registration =isset($param['batterytype']) ? $param['batterytype'] :'';
    $wheel_diameter =isset($param['wheel_diameter']) ? $param['wheel_diameter'] :'';
    $need_registration =isset($param['need_registration']) ? $param['need_registration'] :'';
    $need_driving_license =isset($param['need_driving_license']) ? $param['need_driving_license'] :'';
    $valid_from = isset($param['valid_from']) ? $param['valid_from'] :'';
   // $valid_to = isset($param['valid_from']) ? $param['valid_from'] :'';
    $valid_to = isset($param['valid_to']) ? $param['valid_to'] :'';
    $commission = isset($param['commission']) ? $param['commission'] :'';
    $special_offer = isset($param['special_offer']) ? $param['special_offer'] :0;
    $special_offer_text = isset($param['special_offer_text']) ? $param['special_offer_text'] :'';
    $archive = ($store_id==='1')?0:1;
    //echo $valid_to;
    
    $data = array(
                'sku' => $sku,
                'name' => $name,
                'actual_price' => $actual_price,
                'offer_price' => $offer_price,
               // 'product_cost' => $product_cost, // for internall purpose of admin
                'inventory' => $inventory,
                'full_description' => $full_description,
                'store_id' => $store_id,
                'model_id' => $model_id,
                'make_id' => $make, // changes done on 18082018 without controller data passing
                'variant_id' => $variant_id,
                'manufacture_year_id' => $manufacture_year_id,
                'brand_id' => $brand_id,
                'speed' => $speed,
                'rrange' => $rrange,
                'motor_output' => $motor_output,
                'batterytype' => $registration,
                'wheel_diameter' => $wheel_diameter,
                'need_registration' => $need_registration,
                'need_driving_license' => $need_driving_license,
                'valid_to' => date('Y-m-d',strtotime($valid_to)),
                'valid_from' => date('Y-m-d',strtotime($valid_from)),
                'commission' => $commission,
                'special_offer' => $special_offer,
                'special_offer_text' => $special_offer_text,
                'archive' => $archive,
                 );
    
       // $this->load->model($models);
    date_default_timezone_set('Asia/Kolkata');
        $last_id = $CI->product->insert($data);
       //echo $CI->db->last_query(); 
        return $last_id;
}
//It's not completed yet do it when ever active
public function add_product_attributes($batch = array(),$request_form='WEB',$request_format="ARRAY", $response_format="ARRAY")
{
    //echo "<pre/>";print_r($batch); exit;
    $CI = & get_instance();
    $CI->load->model(array('Product_model'=>'product'));
    $sku = isset($param['sku']) ? $param['sku'] :'';
    $name = isset($param['name']) ? $param['name'] :'';
    $actual_price = isset($param['actual_price']) ? $param['actual_price'] :'';
    $offer_price = isset($param['offer_price']) ? $param['offer_price'] :'';
    $product_cost = isset($param['product_cost']) ? $param['product_cost'] :'';
    $inventory = isset($param['inventory']) ? $param['inventory'] :'';
    $full_description = isset($param['full_description']) ? $param['full_description'] :'';
    $store_id = isset($param['store_id']) ? $param['store_id'] :'1';
    
    $data = array(
                'sku' => $sku,
                'name' => $name,
                'actual_price' => $actual_price,
                'offer_price' => $offer_price,
                'product_cost' => $product_cost, // for internall purpose of admin
                'inventory' => $inventory,
                'full_description' => $full_description,
                'store_id' => $store_id,
                
            );
    
       // $this->load->model($models);
       // $last_id = $CI->product->insert($data);
        return $last_id;
}
}
