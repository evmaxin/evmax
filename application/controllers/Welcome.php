<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/*public function index()
	{
            $this->load->model(array('admin/Product_model'=>'product'));
            $data['products'] = $this->product->get_product();
		$this->load->view('welcome_message',$data);
	}
        public function test($id)
	{
          echo  $this->uri->segment('2');
          //  echo $id;exit;
          $this->load->model(array('admin/Product_model'=>'product'));
            $data['products'] = $this->product->get_product();
		$this->load->view('welcome_message',$data);
	}*/
    function mypdf(){


	$this->load->library('pdf');


  	$this->pdf->load_view('mypdf');
  	$this->pdf->render();


  	$this->pdf->stream("welcome.pdf");
   }
    public function save_download()
  { 
		//load mPDF library
		$this->load->library('m_pdf');
		//load mPDF library


		//now pass the data//
		 $this->data['title']="MY PDF TITLE 1.";
		 $this->data['description']="";
		// $this->data['description']=$this->official_copies;
		 //now pass the data //

		
		$html=$this->load->view('welcome_message',$this->data, true); //load the pdf_output.php by passing our data and get all data in $html varriable.
 	 
		//this the the PDF filename that user will get to download
		$pdfFilePath ="mypdfName-".time()."-download.pdf";

		
		//actually, you can pass mPDF parameter on this load() function
		$pdf = $this->m_pdf->load('utf-8', array(1190,1236));
		//generate the PDF!
		$pdf->WriteHTML($html,2);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		$pdf->Output($pdfFilePath, "D");
		 
		 	
  }
}
