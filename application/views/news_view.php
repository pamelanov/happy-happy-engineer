<?php if($this->session->userdata('logged_in')){		 		?>
	<a id="" class="glyphicon glyphicon-plus" href="<?php echo base_url(); ?>index.php/upload_news">Add News</a>
<?php	} ?>

<?php
   $no = $offset;
   foreach($data as $row ) { ?>
		<div class="media">
		  <div class="media-left">
		    <a href="#">
		      <img class="media-object" src="<?php echo base_url();?>foto_berita/<?php echo $row->foto_berita;?>" alt="news_controller">
		    </a>
		  </div>
		  <div class="media-body">
		    <h2 id="judul-berita" class="text-left"><?php echo $row->judul_berita; ?></h2	>
		    <h6 id="tanggal_berita"><?php echo $row->Tanggal;?> </h6>
		    <p id="isi-berita"><?php echo $row ->isi_berita; ?></p>
		  </div>
		</div>
	<?php } ?>

<div class="panel-footer" style="height:40px;">
    <?php echo $halaman ?> <!--Memanggil variable pagination-->
</div>