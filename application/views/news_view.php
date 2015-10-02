


<?php
   $no = $offset;
   foreach($data as $row ) { ?>
		<div class="media">
		  <div class="media-left media-middle">
		    <a href="#">
		      <img class="media-object" src="<?php echo base_url();?>uploads/<?php echo $row->Upload_Path;?>" alt="news_controller">
		    </a>
		  </div>
		  <div class="media-body">
		    <h4 id="judul-berita" class="text-left"><?php echo $row->judul_berita; ?></h4>
		    <h6 id="tanggal_berita"><?php echo $row->Tanggal;?> </h6>
		    <p id="isi-berita"><?php echo $row ->isi_berita; ?></p>
		  </div>
		</div>
	<?php } ?>

<div class="panel-footer" style="height:40px;">
    <?php echo $halaman ?> <!--Memanggil variable pagination-->
</div>