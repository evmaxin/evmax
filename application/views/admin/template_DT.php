<?php $this->load->view('admin/header');?>
<link href="<?php echo base_url() ?>assets/admin/global/plugins/datatables/datatables.min.css" rel="stylesheet">
<link href="<?php echo base_url() ?>assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet">
<style>
    .portlet.box .dataTables_wrapper .dt-buttons {
    margin-top: 0px;
    padding: 0px 0px 0px 16px;
}
    </style>
<body >
     <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="<?php echo base_url() ?>admin">
                            <img style="width: 187px;background: white;" src="<?php echo base_url() ?>assets/admin/custom_images/logo.png" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                           
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                 <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <?php if($this->session->userdata('admin_data')['profile_pic'] !==""){?>
                             <img alt="" class="img-circle" src="<?php echo base_url() ?>public/uploads/admin/profile/<?php echo $this->session->userdata('admin_data')['profile_pic'];?>" />
                                    <?php }else{?>
                             <img alt="" class="img-circle" src="<?php echo base_url() ?>/assets/admin/layouts/layout/img/avatar3_small.jpg" />
                                    <?php } ?>
                                    <span class="username username-hide-on-mobile">  <?php  echo $this->session->userdata('admin_data')?$this->session->userdata('admin_data')['store_name']:"Admin"; ?> </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    
                          
                       
                                    <li class="divider"> </li>
                           
                                    <li>
                                        <a href="<?php echo base_url() ?>admin/index/logout">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                    
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container" style="margin-top: 50px;">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                   
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                      
                       <!-- menu starts-->
                        <?php
   
					    $adminInfo=$this->session->userdata('admin_data');
					    $admin_id = $adminInfo["admin_id"];
					  if($admin_id==1)
					   {
						 $this->load->view('admin/menu');
					   }
					   else
					   {
						    $this->load->view('admin/menu1');
					  
					   }
                         ?>
                       <!-- menu ends-->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                 <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                   <?php if($this->session->flashdata('success')){ ?> 
                    <div class="col-md-3"></div>
                    <div class="session_notifucation col-md-9">
              <div class="alert alert-success alert-dismissable"> <a style="float: right;" href="#" class="required" data-dismiss="alert" aria-label="close">&times;</a>
                  <p><?php  echo $this->session->flashdata('success');?></p>
              </div>
          </div>
          <?php } ?> 
                       <?php if($this->session->flashdata('fail')){ ?> 
                    <div class="col-md-3"></div>
                    <div class="session_notifucation col-md-9">
              <div class="alert alert-danger alert-dismissable"> <a style="float: right;" href="#" class="required" data-dismiss="alert" aria-label="close">&times;</a>
                  <p><?php  echo $this->session->flashdata('fail');?></p>
              </div>
          </div>
          <?php } ?>       

 <?php if(isset($content)){ echo $content; } ?>  

                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
            
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
         
            <!-- END FOOTER -->
        </div>
 <!--<script src="<?php //echo base_url() ?>assets/admin/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php //echo base_url('assets/admin/global/scripts/datatable.js')?>"></script>
	<script src="<?php //echo base_url('assets/admin/global/plugins/datatables/datatables.min.js')?>"></script>
	<script src="<?php //echo base_url('assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')?>"></script>-->
	<!--[if lt IE 9]>
<script src="<?php echo base_url() ?>assets/admin/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/global/plugins/excanvas.min.js"></script> 
<script src="<?php echo base_url() ?>assets/admin/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <!-- 2 files loaded in header changed 18/10/2017 -->
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url() ?>assets/admin/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/admin/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/admin/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/admin/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/admin/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
	

<script type="text/javascript">

var table;

$(document).ready(function() {
    //datatables
    table = $('#table').DataTable({
       // alert($('#orderStatus').val());
        //table.column( 0 ).visible( false );
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
        "dom": 'lBfrtip',
        "scrollX": true,
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url().$datatable_path;?>",
            "type": "POST",
            "data": function ( data ) {
                //data.country = $('#country').val();
                data.order_id = $('#order_id').val();
                data.startdate = $('#startdate').val();
                data.enddate = $('#enddate').val();
                data.status = $('#orderStatus').val();
            }
        },
        "ordering": false,
        buttons: [
   {
        extend: 'excel',
        text: 'Excel',
        className: 'btn green',
        exportOptions: {
            columns: 'th:not(:last-child)'
        }
    },
    {
        extend: 'pdf',
        text: 'Pdf',
        className: 'btn blue',
        exportOptions: {
            columns: 'th:not(:last-child)'
        }
    }
        ],
       "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
        responsive: {
            details: {
               
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                         return 'Details for  '+data[0];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                    tableClass: 'tableDT'
                } )
            }
        }

  


    });
    //table.column( -1 ).visible( false );
    $('#btn-filter').click(function(){ //button filter event click
   // alert($('#orderStatus').val());
        table.ajax.reload();  //just reload table
        //table.dataTable().fnDraw();
    });
      $('.dtr-modal-close').click(function(){ //when admin model box closes table will be refressed
            table.ajax.reload();  //just reload table
       });
    $('#btn-reset').click(function(){ //button reset event click
        $('#form-filter')[0].reset();
        table.ajax.reload();  //just reload table
    });
var row = table
    .row( '#row-4' )
    .node();
 
$(row).addClass( 'ready' );
//$('[data-toggle="tooltip"]').tooltip();   //tooltip hided
});


    function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
$('#table').on('click', 'tr', function() {
   // $(this).find('td:first').text();
    //$(this).parent("tr").find("td:first").trigger( "click" )
  // $(this).find('td:first').text();
     // $(this).eq(0).trigger( "click" )
    //alert();
    //$(this).('tr td:first-child').css('background','#5ae');
   // $('tr td:first-child').click() ;
    //$(this).closest( "td:first" ).trigger( "click" );
    // var tr = $(this).closest('tr');
    // var row = table.row( tr );
    //$( "#table tbody tr td:first-child" ).trigger( "click" );
    //$(this).closest('tr td:first-child'').trigger( "click" );
 //   alert();
//$(this).closest('tbody tr td:first-child').click();
});
</script>

<?php if(isset($ajaxscript)){ echo $ajaxscript; } ?>
</body>
</html>