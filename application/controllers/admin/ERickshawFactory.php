<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ERickshawFactory extends CI_Controller {
    
	/**
	 * @file        : Sliders.php
         * @type        : Controller
         * @author      : Nagender
         * @description : slider management
         * @date        : 24/10/2017
	 *  
	 */
    public function __construct()
	{
            parent::__construct();
             if(!$this->session->userdata('admin_data'))
            {
                redirect("/admin/index/login");
            }
          
	//$this->session->set_userdata('store_id',1);	
	}
	public function index()
	{
            $this->session->userdata('admin_data')['store_id'];
            $this->load->model(array('Common_model' => 'common'));
            $data['title']='ERickshawFactory';
         
            $data['datatable_path']= "admin/ERickshawFactory/ajax_list";// must and should declare this value
       $data['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status",array(),"asc","state_name");
            $template['content'] = $this->load->view('admin/erickshawfactory/index', $data, TRUE);
            $this->load->view('admin/template_DT',$template);//For data tables only template
	}
   private function set_upload_options()
    {   
        //upload an image options
        $config = array();
        $config['upload_path'] = './public/uploads/admin/erickshawfactory/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size']      = '0';
        $config['remove_spaces'] = TRUE;
        $config['overwrite']     = FALSE;
        $new_name = time().$_FILES["userfile"]['name'];
        $config['file_name'] = $new_name;

        return $config;
    }
    //for edit images
    public function uploadnew($id) {
         $data =array();
        // $time = time();
           $models = array(
                            'admin/ERickshawFactory_model' =>'alias',
                           'Common_model' => 'common'
                                );
                $this->load->model($models);
                  $query_result = $this->alias->get_sliders($id);
        if ($this->input->post('update')){
             $company_name = $this->input->post('company_name')?$this->input->post('company_name'):'';
                 $city = $this->input->post('city')?$this->input->post('city'):'';
                 $state_id = $this->input->post('state_id')?$this->input->post('state_id'):0;
                 $country = $this->input->post('country')?$this->input->post('country'):'';
                 $contact_number = $this->input->post('contact_number')?$this->input->post('contact_number'):'';
                 $url = $this->input->post('url')?$this->input->post('url'):'';
                 $address = $this->input->post('address')?$this->input->post('address'):'';
                 
                      // = $this->ajax1->get_sliders($id);
          
                 
if (isset($_FILES['userfile1']) && $_FILES['userfile1']['name'] != ''){
    $file1 = $this->ddoo_upload('userfile1');
    $data['manufacturer_logo'] = str_replace(' ', '_',$_FILES['userfile1']['name']);
          foreach($query_result as $row){
             if (file_exists("public/uploads/admin/sliders/$row->manufacturer_logo")) {
                 unlink( "public/uploads/admin/sliders/$row->manufacturer_logo" );
                }
            }
}

if (isset($_FILES['userfile2']) && $_FILES['userfile2']['name'] != ''){
    $file2 = $this->ddoo_upload('userfile2');
     $data['brand_logo'] =  str_replace(' ', '_',$_FILES['userfile2']['name']);
      foreach($query_result as $row){
             if (file_exists("public/uploads/admin/sliders/$row->brand_logo")) {
                 unlink( "public/uploads/admin/sliders/$row->brand_logo" );
                }
            }
}  
if (isset($_FILES['userfile3']) && $_FILES['userfile3']['name'] != ''){
    $file3 = $this->ddoo_upload('userfile3');
    $data['brand_banner'] = str_replace(' ', '_',$_FILES['userfile3']['name']);
      foreach($query_result as $row){
             if (file_exists("public/uploads/admin/sliders/$row->brand_banner")) {
                 unlink( "public/uploads/admin/sliders/$row->brand_banner" );
                }
            }
} 
if (isset($_FILES['userfile4']) && $_FILES['userfile4']['name'] != ''){
    $file4 = $this->ddoo_upload('userfile4');
    $data['catalog'] = str_replace(' ', '_',$_FILES['userfile4']['name']);
      foreach($query_result as $row){
             if (file_exists("public/uploads/admin/sliders/$row->catalog")) {
                 unlink( "public/uploads/admin/sliders/$row->catalog" );
                }
            }
} 
          $data['company_name'] =   $company_name;
                $data['address']  =   $address;
                 $data['city']  =   $city;
                $data['state_id']  =   $state_id;
                $data['country']  =   $country;
                $data['contact_number']  =   $contact_number;
                $data['url']  =   $url;
                
            $where_cond = array(
                            "id" => $id, 
                            
                        );
                        $res = $this->common->update($tablename = "erickshaw_factory", $data, $where_cond); 
    }
    redirect('/admin/ERickshawFactory/');
    }
    //for edit images(multiple)
    function ddoo_upload($filename){
$config = array();
        $config['upload_path'] = './public/uploads/admin/erickshawfactory/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
        $config['max_size']      = '100000000';
        $config['remove_spaces'] = TRUE;
        $config['overwrite']     = FALSE;
       // $config['file_name'] =time().'-'.date("Y-m-d").'-'.$_FILES["$filename"]['name'];
         //$new_name = time().$_FILES["userfile"]['name'];
       // $config['file_name'] = $new_name;
       // $config['file_name'] = time().$_FILES["$filename"]["name"];
        

$this->load->library('upload', $config);
if ( ! $this->upload->do_upload($filename)) {
    $error = array('error' => $this->upload->display_errors());
return false;
// $this->load->view('upload_form', $error);
} else {
$data = array('upload_data' => $this->upload->data());
return true;
//$this->load->view('upload_success', $data);
}
    }
    
	public function add() {
           // print_r($_FILES);
           // exit;
       $this->load->library('upload');
       $this->load->model(array('Common_model' => 'common'));
       $files = $_FILES;
       $cpt = count($_FILES['userfile']['name']);
      
            
            
            $manufacturer_logo="";
        $brand_logo ="";
          $brand_banner="";
          $catalog = "";
            if ($cpt>0) {
                for ($i = 0; $i < 4; $i++) {
                    $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                    $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

                    $this->upload->initialize($this->set_upload_options());
                    
                    $this->upload->do_upload();
                    if($i===0){
                         $manufacturer_logo = str_replace(' ', '_', time().$_FILES['userfile']['name']); // Replacing space with underscore in file uploads
                    }
                    if($i===1){
                         $brand_logo = str_replace(' ', '_', time().$_FILES['userfile']['name']);
                     }
                     if($i===2){
                         $brand_banner = str_replace(' ', '_', time().$_FILES['userfile']['name']);
                     }
                     if($i===3){
                         $catalog = str_replace(' ', '_', time().$_FILES['userfile']['name']);
                     }
                         
                 }
                 $company_name = $this->input->post('company_name')?$this->input->post('company_name'):'';
                 $city = $this->input->post('city')?$this->input->post('city'):'';
                 $state_id = $this->input->post('state_id')?$this->input->post('state_id'):0;
                 $country = $this->input->post('country')?$this->input->post('country'):'';
                 $contact_number = $this->input->post('contact_number')?$this->input->post('contact_number'):'';
                 $url = $this->input->post('url')?$this->input->post('url'):'';
                 $address = $this->input->post('address')?$this->input->post('address'):'';
            
            $data = array(
                        'manufacturer_logo' => $manufacturer_logo,
                        'brand_logo' => $brand_logo,
                        'brand_banner' => $brand_banner,
                'catalog' => $catalog,
                        'company_name' => $company_name,
                'address' => $address,
                    'city' => $city,
                'state_id' => $state_id,
                'country' => $country,
                'contact_number' => $contact_number,
                'url' => $url
                
                    );
                         $insert_id = $this->common->insertdata($tablename = "erickshaw_factory", $data);
                
            }
            redirect('/admin/ERickshawFactory/');

	}
        public function update($id) {
           //   $this->load->library('upload');
              $data =array();
               $this->load->model(array('Common_model' => 'common'));
                $company_name = $this->input->post('company_name')?$this->input->post('company_name'):'';
                 $city = $this->input->post('city')?$this->input->post('city'):'';
                 $state_id = $this->input->post('state_id')?$this->input->post('state_id'):0;
                 $country = $this->input->post('country')?$this->input->post('country'):'';
                 $contact_number = $this->input->post('contact_number')?$this->input->post('contact_number'):'';
                 $url = $this->input->post('url')?$this->input->post('url'):'';
                 $address = $this->input->post('address')?$this->input->post('address'):'';           
if (isset($_FILES['userfile1']) && $_FILES['userfile1']['name'] != ''){
     $this->ddoo_upload('userfile1');
     $data['manufacturer_logo'] = $_FILES['userfile1']['name'];
  //   echo $_FILES['userfile1']['name']; exit;
}

if (isset($_FILES['userfile2']) && $_FILES['userfile2']['name'] != ''){
         $this->ddoo_upload('userfile2');
    $data['brand_logo'] = $_FILES['userfile2']['name'];
}  
if (isset($_FILES['userfile3']) && $_FILES['userfile3']['name'] != ''){
            $this->ddoo_upload('userfile3');
    $data['brand_banner'] = $_FILES['userfile3']['name'];
}  
               $data['company_name'] =   $company_name;
                $data['address']  =   $address;
                 $data['city']  =   $city;
                $data['state_id']  =   $state_id;
                $data['country']  =   $country;
                $data['contact_number']  =   $contact_number;
                $data['url']  =   $url;
                
            $where_cond = array(
                            "id" => $id, 
                            
                        );
                       // print_r($data); exit;
            $this->db->save_queries = TRUE;
                         $res = $this->common->update($tablename = "erickshaw_factory", $data, $where_cond);
                //echo $this->db->last_query(); exit;
           // }
            
            
       //     if(isset($id) && ($id>0) && isset($_POST['update'])){
       //         $query_result = $this->alias->get_sliders($id);
           //     foreach($query_result as $row){
            // if (file_exists("public/uploads/admin/sliders/$row->name")) {
           //      unlink( "public/uploads/admin/sliders/$row->name" );

             //   }
           // }
           //  $this->alias->destroySlider($id);
           // }
     

            

            redirect('/admin/ERickshawFactory/');

	}
      public function edit($id)
	{   
           
             $this->input->post('target_tab');
                $models = array(
                            'admin/ERickshawFactory_model' =>'alias',
                           'Common_model' => 'common'
                                );
                $this->load->model($models);
                  $data['erickshaws'] = $this->alias->get_sliders($id);
                 // echo $this->db->last_query();
                  
                 $data['states'] = $this->common->getTableData($tablename = "state", $cols = "state_id,state_name,status",array(),"asc","state_name");
		if(!isset($_POST['update']))
		{
            $template['content'] = $this->load->view('admin/erickshawfactory/edit', $data, TRUE);
            $this->load->view('admin/template', $template);

		}
	}
  	 public function ajax_list()
	{
             $this->load->model('admin/ERickshawFactoryDT_model','alias');
		$list = $this->alias->get_datatables();
		//echo $this->db->last_query();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $customers) {
                    if(!empty($customers->catalog)){
                    $pdf_url = "<a target='_blank' style='width: 20%;' href=".base_url()."public/uploads/admin/erickshawfactory/".$customers->catalog.">pdf link</a>";
                    }else{
                        $pdf_url ="";
                    }
                    $full_url = base_url()."admin/ERickshawFactory/edit/".$customers->id;
                    $image_url = "<img style='width: 20%;' src=".base_url()."public/uploads/admin/erickshawfactory/".$customers->manufacturer_logo.">";
                    $image_url1 = "<img style='width: 20%;' src=".base_url()."public/uploads/admin/erickshawfactory/".$customers->brand_logo.">";
                    $image_url2 = "<img style='width: 20%;' src=".base_url()."public/uploads/admin/erickshawfactory/".$customers->brand_banner.">";
			$no++;
			$row = array();
			//$row[] = $no;
                        $row[] = $customers->company_name;
			$row[] = $image_url;
                        $row[] = $image_url1;
                        $row[] = $image_url2;
                        $row[] = $pdf_url;
                        
                         $row[] = $customers->contact_number;
                          $row[] = $customers->url;
                           $row[] = $customers->address;
                            $row[] = $customers->city;
                        $row[] = $customers->state_name;
                          if($customers->status==1){
                            
			//$row[] = "<a class='delete red btn'  data-cname='$customers->company_name' data-name='$customers->company_name' data-id='$customers->id'> Delete </a>";
                        $row[] = "<a href='$full_url' class='btn green'> Edit </a><a class='delete red btn'  data-cname='$customers->company_name' data-name='$customers->company_name' data-id='$customers->id'> Delete </a><a title='Deactivate' class='product_id marginleft red btn p$customers->id' data-type='deactivate' data-pname='$customers->company_name' data-id='$customers->id'> Deactivate </a>";
                       
                        }else{
                            
                       ///   $row[] = "<a class='delete red btn'  data-cname='$customers->company_name' data-name='$customers->company_name' data-id='$customers->id'> Delete </a>";  
                         $row[] = "<a href='$full_url' class='btn green'> Edit </a> <a title='Activate' class='product_id marginleft activate green btn p$customers->id' data-type='activate' data-name='$customers->company_name' data-pname='$customers->company_name' data-id='$customers->id'> Activate </a> <a class='delete red btn'  data-cname='$customers->company_name' data-name='$customers->company_name' data-id='$customers->id'> Delete </a>";  
                          
                            }                        

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
