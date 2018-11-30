<?php

Class Product_lib {
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */

// data from products controller
    public function add($param = array(), $request_form = 'WEB', $request_format = "ARRAY", $response_format = "ARRAY") {
        $CI = & get_instance();
        $CI->load->model(array('Product_model' => 'product'));
        $sku = isset($param['sku']) ? $param['sku'] : '';
        $name = isset($param['name']) ? $param['name'] : '';
        $actual_price = isset($param['actual_price']) ? $param['actual_price'] : '';
        $offer_price = isset($param['offer_price']) ? $param['offer_price'] : '';
        //$product_cost = isset($param['product_cost']) ? $param['product_cost'] :'';
        $inventory = isset($param['inventory']) ? $param['inventory'] : '';
        $full_description = isset($param['full_description']) ? $param['full_description'] : '';
        $store_id = isset($param['store_id']) ? $param['store_id'] : '';
        $make = isset($param['make']) ? $param['make'] : '';
        $model_id = isset($param['model_id']) ? $param['model_id'] : '';
        $variant_id = isset($param['variant_id']) ? $param['variant_id'] : '';
        $manufacture_year_id = isset($param['manufacture_year_id']) ? $param['manufacture_year_id'] : '';
        $brand_id = isset($param['brand_id']) ? $param['brand_id'] : '';
        $speed = isset($param['speed']) ? $param['speed'] : '';
        $rrange = isset($param['rrange']) ? $param['rrange'] : '';
        // $license =isset($param['license']) ? $param['license'] :'';
        //$registration =isset($param['registration']) ? $param['registration'] :'';
        $motor_output = isset($param['motor_output']) ? $param['motor_output'] : '';
        $registration = isset($param['batterytype']) ? $param['batterytype'] : '';
        $wheel_diameter = isset($param['wheel_diameter']) ? $param['wheel_diameter'] : '';
        $need_registration = isset($param['need_registration']) ? $param['need_registration'] : '';
        $need_driving_license = isset($param['need_driving_license']) ? $param['need_driving_license'] : '';
        $valid_from = isset($param['valid_from']) ? $param['valid_from'] : '';
        // $valid_to = isset($param['valid_from']) ? $param['valid_from'] :'';
        $valid_to = isset($param['valid_to']) ? $param['valid_to'] : '';
        $commission = isset($param['commission']) ? $param['commission'] : '';
        $special_offer = isset($param['special_offer']) ? $param['special_offer'] : 0;
        $special_offer_text = isset($param['special_offer_text']) ? $param['special_offer_text'] : '';
        $archive = ($store_id === '1') ? 0 : 1;
        $exchange_benefit = isset($param['exchange_benefit']) ? $param['exchange_benefit'] : '';
        $exchange_note = isset($param['exchange_note']) ? $param['exchange_note'] : '';
        $offer_from_date = isset($param['offer_from_date']) ? $param['offer_from_date'] : '';
        $offer_to_date = isset($param['offer_to_date']) ? $param['offer_to_date'] : '';
        $exchange_from_date = isset($param['exchange_from_date']) ? $param['exchange_from_date'] : '';
        $exchange_to_date = isset($param['exchange_to_date']) ? $param['exchange_to_date'] : '';
        $delivery_charges = isset($param['delivery_charges']) ? $param['delivery_charges'] : '';
        $voltage = isset($param['voltage']) ? $param['voltage'] : '';
        $warranty = isset($param['warranty']) ? $param['warranty'] : '';
        $am = isset($param['am']) ? $param['am'] : '';
        $product_gst = isset($param['product_gst']) ? $param['product_gst'] : '';
        $product_cgst = isset($param['product_cgst']) ? $param['product_cgst'] : '';
        $product_sgst = isset($param['product_sgst']) ? $param['product_sgst'] : '';
        $shipping_gst = isset($param['shipping_gst']) ? $param['shipping_gst'] : '';
        $shipping_cgst = isset($param['shipping_cgst']) ? $param['shipping_cgst'] : '';
        $shipping_sgst = isset($param['shipping_sgst']) ? $param['shipping_sgst'] : '';
        $handling_gst = isset($param['handling_gst']) ? $param['handling_gst'] : '';
        $handling_cgst = isset($param['handling_cgst']) ? $param['handling_cgst'] : '';
        $handling_sgst = isset($param['handling_sgst']) ? $param['handling_sgst'] : '';
        $delivery_cost = isset($param['delivery_cost']) ? $param['delivery_cost'] : '';
        $handling_cost = isset($param['handling_sgst']) ? $param['handling_cost'] : '';
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
            'valid_to' => date('Y-m-d', strtotime($valid_to)),
            'valid_from' => date('Y-m-d', strtotime($valid_from)),
            'commission' => $commission,
            'special_offer' => $special_offer,
            'special_offer_text' => $special_offer_text,
            'archive' => $archive,
            'exchange_benefit' => $exchange_benefit,
            'exchange_note' => $exchange_note,
            'offer_from_date' => date('Y-m-d', strtotime($offer_from_date)),
            'offer_to_date' => date('Y-m-d', strtotime($offer_to_date)),
            'exchange_from_date' => date('Y-m-d', strtotime($exchange_from_date)),
            'exchange_to_date' => date('Y-m-d', strtotime($exchange_to_date)),
            'delivery_charges' => $delivery_charges,
            'voltage' => $voltage,
            'warranty' => $warranty,
            'am' => $am,
            'product_gst' => $product_gst,
            'product_cgst' => $product_cgst,
            'product_sgst' => $product_sgst,
            'shipping_gst' => $shipping_gst,
            'shipping_cgst' => $shipping_cgst,
            'shipping_sgst' => $shipping_sgst,
            'handling_gst' => $handling_gst,
            'handling_cgst' => $handling_cgst,
            'handling_sgst' => $handling_sgst,
             'delivery_cost' => $delivery_cost,
            'handling_cost' => $handling_cost,
        );

        // $this->load->model($models);
        date_default_timezone_set('Asia/Kolkata');
        //print_r($data); exit;
        $last_id = $CI->product->insert($data);
        //echo $CI->db->last_query(); 
        return $last_id;
    }

//It's not completed yet do it when ever active
    public function add_product_attributes($batch = array(), $request_form = 'WEB', $request_format = "ARRAY", $response_format = "ARRAY") {
        //echo "<pre/>";print_r($batch); exit;
        $CI = & get_instance();
        $CI->load->model(array('Product_model' => 'product'));
        $sku = isset($param['sku']) ? $param['sku'] : '';
        $name = isset($param['name']) ? $param['name'] : '';
        $actual_price = isset($param['actual_price']) ? $param['actual_price'] : '';
        $offer_price = isset($param['offer_price']) ? $param['offer_price'] : '';
        $product_cost = isset($param['product_cost']) ? $param['product_cost'] : '';
        $inventory = isset($param['inventory']) ? $param['inventory'] : '';
        $full_description = isset($param['full_description']) ? $param['full_description'] : '';
        $store_id = isset($param['store_id']) ? $param['store_id'] : '1';

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
