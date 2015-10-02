<title><?php echo $judul; ?></title>
<div id="men_head">
  
      <img src="<?php echo base_url();?>pictures/all_collection.png" alt="men_collection">
</div>
<div class="page-header">
<p id='collection_title' class="text-right">All Collections</p>
<?php if($this->session->userdata('logged_in')){ ?>
<a href="<?php echo base_url(); ?>index.php/upload"><p id='new_collection' class="text-center"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Collection</p></a>
<?php } ?>
</div>
<div class="row" id="collection">
  
  
  <?php
   $no = $offset;
   foreach($data as $row ) { 
   
   ?>
     
    <div class="col-md-4">
      <div class="thumbnail" id="men-collection-col">
        <img src="<?php echo base_url();?>uploads/<?php echo $row->Upload_Path;?>" alt="men_collection">
        <div class="caption" id="men-collection-class">
          <h3 id="caption-produk" class="text-center"><?php echo $row->Jenis_Produk; ?></h3>
          <h6 id="caption-produk" class="text-center">Product Code: <?php echo $row->ID_Produk; ?></h4>
          <p id="deskripsi-produk"><?php echo $row->Deskripsi_Produk; ?></p>
          <p class="text-right"><b>Price: Rp<?php echo number_format($row->Harga); ?></b></p>
          <p class="text-right">Available Sizes: <?php echo $row->Size; ?></p>

          
        </div>
      </div>
    </div>
    

  <?php } ?>
   </div>
        
        <div class="panel-footer" style="height:40px;">
        <?php echo $halaman ?> <!--Memanggil variable pagination-->
        </div>

    </div>	
