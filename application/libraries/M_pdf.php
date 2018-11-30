<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class m_pdf {
    
   
 
    function load($param=NULL)
    {
        //include_once APPPATH.'/third_party/mpdf/mpdf.php';
         
        if ($params == NULL)
        {
           $param = "'c', 'A4-L'";         		
        }
         
        //return new mPDF($param);
        return new mPDF();
    }
}