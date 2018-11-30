<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadcsv extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->helper('url');                    
    $this->load->model('admin/Bulkproduct_model','welcome');
}

public function index()
{
	$this->data['view_data']= $this->welcome->view_data();
  $this->load->view('admin/product/excelimport', $this->data, FALSE);
}

public function import()
        {
  if(isset($_POST["import"]))
    {
		 $attributes = $this->welcome->get_attributes(); // For attributes
		 $attribute_types = $this->welcome->get_attributetypes(); // For attributes
		 //print_r($attributes); exit;
        $filename=$_FILES["file"]["tmp_name"];
        if($_FILES["file"]["size"] > 0)
          {
            $file = fopen($filename, "r");
			$row =1;
			// Headrow
$head = fgetcsv($file, 10000, ",");
//print_r($head);

             while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE)
             {
				

			$column = array_combine($head, $importdata);
 
				 //if($row == 1){ $row++; continue; } //to skip first row
                    $data = array(
                        'sku' => $importdata[0],
                        'name' =>$importdata[1],
                        'actual_price' => $importdata[2],
						'offer_price' => $importdata[3],
						'product_cost' => $importdata[4],
						'inventory' => $importdata[5],
						'full_description' => $importdata[6],
                        );
              $product_id = $this->welcome->insertCSV($data);
			  //echo "Product ".$this->db->last_query()."<br>";
			 
			 if( isset($importdata[7]) && !empty($importdata[7]))// Categories
			 {
				 
				 $data1 = array(
                        'product_id' => $product_id,
                        'category_id' =>$importdata[7],
                        'category_type_id' => $importdata[8],
						);
              $this->welcome->insertProductCategory($data1);
			 // echo "category ".$this->db->last_query()."<br>";
			 }
			 
			 if( isset($importdata[9]) && !empty($importdata[9])) // images
			 {
				 $img_array = explode(',',$importdata[9]);
				 foreach($img_array as $img)
				 {
					 $str = $_POST['image_folder_path']?$_POST['image_folder_path']:'';
					 $original_img_path = str_replace('\\', '/', $str); //replacing back slash with forward slash

					 $url = $original_img_path."/".$img;

$save_directory =  $_SERVER['DOCUMENT_ROOT']."/lookpi/public/uploads/";

if(is_writable($save_directory)) {
    file_put_contents($save_directory . $img, file_get_contents($url));
} else {
  echo "Error Occured";
}
				 $data2 = array(
                        'product_id' => $product_id,
                        'image_path' =>$img,
                        
						);
              $this->welcome->insertProductImages($data2);
			
			 }
			 }
			 foreach($attribute_types as $type){ // for attributes like size,color
			 	 if( isset($type) && !empty($type))
			 {
				
				 $atrValuesfromSheet = explode(",", $column[strtolower($type->attribute_type)]); //reading header value with assotive array
			foreach($atrValuesfromSheet as $k=>$splited_attributes){
				
				foreach($attributes as $k=>$attr_val){
					
					if(strtolower($attr_val->name) ==strtolower($splited_attributes)){
					
					/*$attributes_batch[] = array(
                            "product_id" =>$product_id,
                            "attribute_type_id" => $attr_val->attribute_type_id,
                            "attribute_id" => $attr_val->attribute_id,
                            "price" => 0
                        );*/
				$data3 = array(
                        'product_id' => $product_id,
                        'attribute_id' =>$attr_val->attribute_id,
						 'attribute_type_id' =>$attr_val->attribute_type_id,
              			);
					
              $this->welcome->insertProductAttributes($data3);
			
				}
				}
			 }
			 
			 }
			// $this->db->insert_batch('product_attributes', $attributes_batch);
			 }
			 
			 
             }// while close                    
            fclose($file);
			$this->session->set_flashdata('success', 'Data are imported successfully..');
			redirect('admin/uploadcsv/index');
          }else{
			$this->session->set_flashdata('fail', 'Something went wrong..');
			redirect('admin/uploadcsv/index');
		}
    }
}



/////////////////////////////////Import subscriber emails ////////////////////////////////

}
