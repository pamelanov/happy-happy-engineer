<div id="page-header-news">
<?php if($this->session->userdata('logged_in')){ ?>
<a href="<?php echo base_url(); ?>index.php/upload_news"><p id='new_collection' class="text-center"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add News</p></a>
<?php } ?>
</div>


<header class="masthead">
  <div class="container">

      <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" id="judul_about_us">News
                    <small>Happy Happy Engineer</small>
                </h1>
			</div>
	  </div>

</div>
  
<!--  <div class="container">
	<div class="row">
      <div class="col col-sm-12">
        
        <div class="panel">
        <div class="panel-body">
          You may want to put some news here  <span class="glyphicon glyphicon-heart-empty"></span>
        </div>
        </div>
        
      </div>
  	</div>
  </div>-->
</header>

<!-- Begin Body -->
<div class="container">
	<div class="row">

      		<div class="col col-sm-9">
			   			   <?php
   $no = $offset;
   foreach($data as $row ) { ?>
              <div class="panel">
			   
              <h1 class="text-center"><div class="judul_news"><a href="#"><?php echo $row->judul_berita; ?></a></div></h1>
			   <h5 class="text-center"><?php echo $row->Tanggal; ?></h5>

              <div class="row">
              	<div>
                  <img src="<?php echo base_url();?>foto_berita/<?php echo $row->foto_berita;?>" class="img-responsive img-center">
                </div> 
              </div>
        
              	<p id="news_content"><?php echo $row ->isi_berita; ?></p>

               
             	</div>
			  <?php } ?>
			  <div class="panel-footer" style="height:40px;">
    <?php echo $halaman ?> <!--Memanggil variable pagination-->
</div>
  
      	</div>
			
			  			<div class="col col-sm-3">
              	<div id="sidebar">
      			<ul class="nav nav-stacked">
                    <li><h3 class="highlight"><div class="judul_news">Archives <i class="glyphicon glyphicon-dashboard pull-right"></i></div></h3></li>
					<?php
					 foreach($titles as $row ) { ?>
				     <li><a href="#" class="highlight-bk"><?php echo $row->judul_berita; ?></a></li>
					 <?php } ?>
				</ul>
				
 
               </div>
      		</div>
						
   
  	</div>
</div>

