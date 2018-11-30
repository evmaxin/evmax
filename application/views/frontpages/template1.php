<?php $this->load->view('frontpages/header_becomeaseller'); ?>
    <script src="<?php echo base_url() ?>assets/frontend/js/jquery-min.js"></script> 
  <body>  
    <!-- Header Section Start -->
 <?php //$this->load->view('frontpages/navbar'); ?>

<?php if (isset($content)) {
            echo $content;
        } ?>



  

 <?php $this->load->view('frontpages/footer_becomeaseller'); ?>
    

    
 