<title><?php echo $judul; ?></title>
<div id="men_head">
  <a href="#" class="thumbnail">
      <img src="<?php echo base_url();?>pictures/wallpaper_jeans.png" alt="foto_slideshow">
    </a>
</div>
<div id="men_collection">
<div class="row" id="mens_pict">
  
  <?php
   $no = $offset;
   foreach($data as $row ) { 
   
   ?>
     
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="<?php echo base_url();?>pictures/H2E_1488.jpg" alt="girl section">
        <div class="caption">
          <h3><?php echo $row->ID_Produk; ?> : <?php echo $row->Jenis_Produk; ?></h3>
          <p><?php echo $row->Deskripsi_Produk; ?></p>
          <p><?php echo $row->Harga; ?></p>
          <p><?php echo $row->Size; ?></p>
        </div>
      </div>
    </div>
    

  <?php } ?>
   </div>
        
        <div class="panel-footer" style="height:40px;">
        <?php echo $halaman ?> <!--Memanggil variable pagination-->
        </div>

    </div>	
</div>