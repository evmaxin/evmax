<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LocateChargingStations extends CI_Controller {

	   public function __construct()
        {
                parent::__construct();
               $libraries = array(
           // 'Log_lib' => 'logger',
           // 'user_agent' =>'agent',
             'Common_lib'=>'Common_lib'      
                       );
              
               $this->load->library($libraries);
                $this->load->helper('log_helper');
    
               log_data();//helper function
             


        }

	public function index()
        {
            $data['title'] = "Locate Charging Stations";
            $this->load->library('leaflet');
             $this->load->model(array('Common_model' => 'common'));
    $getMarkers = $this->common->getTableData($tablename = "markers", $cols = "lat,lng,name,address");
      $config = array(
 	'center'         => '20.00, 76.00', // Center of the map
 	'zoom'           => 5, // Map zoom
 	);
 $this->leaflet->initialize($config);
 $marker='';
 
 foreach ($getMarkers as $key => $value) {
    //echo "<pre>"; print_r($value);
    // $dynmicvalue = $marker.$key;
     $key = array(
         'latlng' 		=>$value->lat.', '.$value->lng, // Marker Location
 	//'latlng' 		=>'12.972442, 77.580643', // Marker Location
 	'popupContent' 	=> $value->name, // Popup Content
 	);
$this->leaflet->add_marker($key);
 }
 

//$this->leaflet->add_marker($marker1);
 

 $data['map'] =  $this->leaflet->create_map();              
 $this->load->view('frontpages/chargingstations/index',$data);
               
        }

	
            

}
