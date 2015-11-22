<div id="page-header-news">
<?php if($this->session->userdata('logged_in')){ ?>
<a href="<?php echo base_url(); ?>index.php/upload_news"><p id='new_collection' class="text-center"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add News</p></a>
<?php } ?>
</div>

<div id="collection_title">
  <h1 class="text-right">News</h1>
</div>




<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">
  
  <?php
   $no = $offset;
   foreach($data as $row ) { ?>
   <br>
   <div class="well well-lg">
		<div class="media">
		  <div class="media-left">
		    <a href="#">
		      <img class="media-object" src="<?php echo base_url();?>foto_berita/<?php echo $row->foto_berita;?>" alt="news_controller">
		    </a>
		  </div>
		  <br>
		  <div class="media-body">
		    <h2 id="judul-berita" class="text-left"><?php echo $row->judul_berita; ?></h2	>
		    <h6 id="tanggal_berita"><?php echo $row->Tanggal;?> </h6>
		    <p id="isi-berita"><?php echo $row ->isi_berita; ?></p>
		  </div>
		</div>
   </div>
	<?php } ?>

<div class="panel-footer" style="height:40px;">
    <?php echo $halaman ?> <!--Memanggil variable pagination-->
</div>
  
  
  </div>
  <div class="col-xs-6 col-md-4">
   <ul class="nav nav-pills">
   <?php
   $no = $offset;
   foreach($data as $title) { ?>
   <a href="#"><?php echo $row->judul_berita; ?></a>
   <br>
   <?php } ?>
   </ul>
   
  </div>
</div>



