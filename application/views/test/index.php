

<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<?php $this->load->view('frontpages/header'); ?>
  <body> 
 <?php $this->load->view('frontpages/navbar'); ?>
 <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />

 <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://labs.easyblog.it/maps/leaflet-search/src/leaflet-search.css">
<link rel="stylesheet" href="https://domoritz.github.io/leaflet-locatecontrol/dist/L.Control.Locate.min.css" />
 
<script src="https://domoritz.github.io/leaflet-locatecontrol/dist/L.Control.Locate.min.js" charset="utf-8"></script>
<script src="http://labs.easyblog.it/maps/leaflet-search/src/leaflet-search.js" charset="utf-8"></script>
 
    <!-- Header Section Start -->


<?php echo $map['html']; ?>
 <?php echo $map['js']; ?>
    
   
<?php $this->load->view('frontpages/footer'); ?>
    
</html>