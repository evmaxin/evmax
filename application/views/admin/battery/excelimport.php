<?php //echo realpath(dirname(__FILE__)."/../../") . "\n";?>
<title>Import bulk data </title>

<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
<?php if($this->session->flashdata('message')){?>
          <div align="center" class="alert alert-success">      
            <?php echo $this->session->flashdata('message')?>
          </div>
        <?php } ?>

<br><br>

<div align="center">
<form action="<?php echo base_url(); ?>index.php/admin/uploadcsv/import" method="post" name="upload_excel" enctype="multipart/form-data">
<label>Image Path</label>
<!--<input type="file" id="imageFile" webkitdirectory directory />-->

<input type="text" name="image_folder_path" id="image_folder_path" required></br></br>

<input type="file" name="file" id="file">
<button type="submit" id="submit" name="import" class="btn btn-primary button-loading">Import</button>
</form>
<br>
<br>
<a href="<?php echo base_url(); ?>sample.csv"> Sample csv file </a>
<br><br>

<div style="width:80%; margin:0 auto;" align="center">
<table id="t01">
  <tr>
    <th>sku</th>
    <th>name</th>
    <th>actual_price</th>
	<th>offer_price</th>
    <th>inventory</th>
    <th>full_description</th>
  </tr>
<?php
if(isset($view_data) && is_array($view_data) && count($view_data)): $i=1;
foreach ($view_data as $key => $data) { 
?>
  <tr>
    <td><?php echo $data['sku'] ?></td>
    <td><?php echo $data['name'] ?></td>
    <td><?php echo $data['actual_price'] ?></td>
	<td><?php echo $data['offer_price'] ?></td>
    <td><?php echo $data['inventory'] ?></td>
    <td><?php echo $data['full_description'] ?></td>
  </tr>
  <?php } endif; ?>
</table>
</div>

</div>

