<title><?php echo $judul; ?></title>
<div id="men_head">
  
      <img src="<?php echo base_url();?>pictures/men_collection.png" alt="men_collection">
</div>
<div class="page-header">
<p id='collection_title' class="text-right">Men Collection</p>
<<<<<<< HEAD

<?php if($this->session->userdata('logged_in')){ ?>
<a href="<?php echo base_url(); ?>index.php/upload"><p id='new_collection' class="text-center"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Collection</p></a>
<?php } ?>
=======
<p id='new_collection' class="text-right">Add New Collection</p>
>>>>>>> Pamela
</div>
<div class="row" id="collection">
  
  
  <?php
  $url = $this->uri->uri_string();
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
<?php if($this->session->userdata('logged_in')){
  echo anchor('all_collections/edit/'.$url.'/'.$row->ID_Produk, '<button type="submit" class="btn btn-primary">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
             Edit</button>');
   echo str_repeat('&nbsp;', 2);
echo anchor('all_collections/delete/'.$row->ID_Produk, '<button type="submit" class="btn btn-danger">
            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
             Delete</button>',array('onclick' => "return confirm('Are you sure to delete this item?')"));

} ?>
          
        </div>
      </div>
    </div>
    

  <?php } ?>
   </div>
        
        <div class="panel-footer" style="height:40px;">
        <?php echo $halaman ?> <!--Memanggil variable pagination-->
        </div>

    </div>	
