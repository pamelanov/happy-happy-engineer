<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bootstrap Pagination di Codeigniter</title>

<!--CSS CORE Bootstrap-->
	<link href="<?php echo base_url();?>assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="row-fluid" style="margin-top:10px;">
<div class="col-md-4">
 <div class="panel panel-default">
        <div class="panel-heading">Data Produk</div>
        <div class="panel-body">
        <div class="table-responsive">
<table width="200" border="0" class="table">
  <tr>
    <td>Kode Produk</td>
    <td>Jenis Produk</td>
    <td>Harga</td>
    <td>Deskripsi Produk</td>
    <td>Size</td>
  </tr>
  <!--Script view yang dipakai -->
  <?php
   $no = $offset;
   foreach($data as $row ) { 
   
   ?>
  <tr>
    <td><?php echo $row->ID_Produk; ?></td>
    <td><?php echo $row->Jenis_Produk; ?></td>
    <td><?php echo $row->Harga; ?></td>
        <td><?php echo $row->Deskripsi_Produk; ?></td>
            <td><?php echo $row->Size; ?></td>
  </tr>
  <?php } ?>
</table>
  </div>
        </div>
        
        <div class="panel-footer" style="height:40px;">
        <?php echo $halaman ?> <!--Memanggil variable pagination-->
        </div>
        
        </div>
</div>
</div>
</body>

<!--BOOTSTRAP CORE JQUERY-->

   <!-- jQuery Version 1.11.0 -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/jquery/bootstrap.min.js"></script>
    
</html>