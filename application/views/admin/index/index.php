<style>
    .number
    {
           font-size: 42px!important; 
    }
    </style>
<div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                        
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a>Dashboard</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                               
                            </ul>
                           
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title">
                          
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                          <div class="row">
                               
                            
                            <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12">
                                <?php //print_r($outofstockproducts[0]);?>
                                <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                                    <div class="visual">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="<?php echo $orders?round($orders[0]->order_val):'';?>"><?php echo $orders?$orders[0]->order_val:'';?></span>&#8377; </div>
                                        <div class="desc"> Total Revenue </div>
                                    </div>
                                </a>
                            </div>
                           
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                                    <div class="visual">
                                        <i class="fa fa-globe"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number"> 
                                            <span data-counter="counterup" data-value="<?php echo $orders?$orders[0]->total:'';?>"></span> <?php echo $orders?$orders[0]->total:'';?> </div>
                                        <div class="desc"> Total Orders</div>
                                    </div>
                                </a>
                            </div>
                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="<?php  echo base_url() ?>admin/index/listOutOfStockProducts">
                                    <div class="visual">
                                        <i class="fa fa-comments"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="<?php echo $outofstockproducts?$outofstockproducts[0]->outofstock_count:'';?>"><?php echo $outofstockproducts?$outofstockproducts[0]->outofstock_count:'';?></span>
                                        </div>
                                        <div class="desc"> Out of stock products </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                        <div id="orders" class="col-lg-6 col-md-6 col-sm-6 col-xs-12" ></div>
                         <div id="revenue" class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
                        </div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                       
 
                        <div class="clearfix"></div>
                         
                    </div>
    
    <script type="text/javascript">
      // Load the Visualization API and the line package.
      google.charts.load('current', {'packages':['line']});
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      google.charts.setOnLoadCallback(drawChart1);
  
    function drawChart() {
  
        $.ajax({
        type: 'POST',
        url: "<?php echo base_url()?>admin/index/getdata",
          
        success: function (data1) {
        // Create our data table out of JSON data loaded from server.
        var data = new google.visualization.DataTable();
  
     // data.addColumn('string', 'Year');
     
      data.addColumn('string', 'Month');
       data.addColumn('number', 'Orders');
    //   data.addColumn('number', 'Revenue');
     
        
      var jsonData = $.parseJSON(data1);
     // console.log(jsonData);
      for (var i = 0; i < jsonData.length; i++) {
            data.addRow([jsonData[i].date,parseInt(jsonData[i].tot)]);
      }
      var options = {
        chart: {
          title: 'Total Orders By Month',
          subtitle: ''
        },
        width: 0,
        height: 300,
        axes: {
          x: {
            0: {side: 'bottom'} 
          }
        },
        colors: ['green', 'blue']
         
      };
      var chart = new google.charts.Line(document.getElementById('orders'));
      chart.draw(data, options);
       }
     });
    }
    function drawChart1() {
  
        $.ajax({
        type: 'POST',
        url: "<?php echo base_url()?>admin/index/getdata",
          
        success: function (data1) {
        // Create our data table out of JSON data loaded from server.
        var data = new google.visualization.DataTable();
  
     // data.addColumn('string', 'Year');
     
      data.addColumn('string', 'Month');
       data.addColumn('number', 'Revenue');
    //   data.addColumn('number', 'Revenue');
     
        
      var jsonData = $.parseJSON(data1);
     // console.log(jsonData);
      for (var i = 0; i < jsonData.length; i++) {
            data.addRow([jsonData[i].date,parseInt(jsonData[i].total_price)]);
      }
      var options = {
        chart: {
          title: 'Total Revenue By Month',
          subtitle: ''
        },
        width: 0,
        height: 300,
        axes: {
          x: {
            0: {side: 'bottom'} 
          }
        },
        colors: ['DARKORANGE', 'blue']
         
      };
      var chart = new google.charts.Line(document.getElementById('revenue'));
      chart.draw(data, options);
       }
     });
    }
  </script>