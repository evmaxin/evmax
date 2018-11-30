<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test1 extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('admin/AttributeTypeDT_model','customers');
	}

	public function index()
        {
            $this->load->library('leaflet');
             $this->load->model(array('Common_model' => 'common'));
    $getMarkers = $this->common->getTableData($tablename = "markers", $cols = "lat,lng,name");
      $config = array(
 	'center'         => '20.00, 76.00', // Center of the map
 	'zoom'           => 5, // Map zoom
 	);
 $this->leaflet->initialize($config);
 $marker='';
 
 foreach ($getMarkers as $key => $value) {
  //  echo "<pre>"; print_r($value);
    // $dynmicvalue = $marker.$key;
     $key = array(
         'latlng' 		=>$value->lat.', '.$value->lng, // Marker Location
 	//'latlng' 		=>'12.972442, 77.580643', // Marker Location
 	'popupContent' 	=> $value->name."".$value->address, // Popup Content
 	);
$this->leaflet->add_marker($key);
 }
 
$marker1 = array(
 	'latlng' 		=>'10.972442, 75.580643', // Marker Location
 	'popupContent' 	=> 'Hi, iam a popup!!', // Popup Content
 	);
//$this->leaflet->add_marker($marker1);
 

 $data['map'] =  $this->leaflet->create_map();              
 $this->load->view('test/index',$data);
               
        }
       public function testdel() {
           $this->load->helper('log_helper');
           testdel();
            
        }

	
            

}
