<!DOCTYPE html>
<html lang ="en">
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
	<title><?php echo $judul;?></title>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery/bootbox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery/bootstrap.min.js"></script>
    
	<link href="<?php echo base_url();?>assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />  
        
    </head>
    
    <body>

 <div id="menubar">
	<!--<nav class="navbar navbar-default">-->
	<!--	 <div class="container-fluid">-->
	<!--		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
	<!--			<ul class="nav navbar-nav">-->
	<!--				<li>-->
	<!--					 <a class="navbar-brand" href="#">Happy Happy Engineer-->
	<!--					 <img alt="Brand" id="brand_logo" src="<?php echo base_url();?>pictures/brand_logo.jpg">-->
	<!--					 </a>-->
	<!--				</li>-->
	<!--			</ul>-->
	<!--		 </div>-->
	<!--	 </div>-->
	<!--</nav>-->
	
	
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	 <a class="navbar-brand" href="#" id="navbar_brand">Happy Happy Engineer
        <!--<img alt="Brand" id="brand_logo" src="<?php echo base_url();?>pictures/brand_logo.jpg">-->
      </a>
	 
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="navbarText"><a href="<?php echo base_url();?>index.php/home_controller/about_us" id="navbarText">About</a></li>
        <li class="dropdown" id="navbarText">
          <a href="#" id="navbarText" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><div id="navbarText">Collections <span class="caret"></span></div></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>index.php/home_controller/mens">Boys</a></li>
            <li><a href="<?php echo base_url();?>index.php/home_controller/womens">Girls</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">All Collections</a></li>
          </ul>
        </li>
		<li id="navbarText"><a href="#" id="navbarText">Gallery</a></li>
		<li id="navbarText"><a href="#" id="navbarText">News</a></li>
		<li id="navbarText"><a href="#" id="navbarText">Contact Us</a></li>
      </ul>
<!--      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>-->
 <!--     <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
 </div>
 

        <div id="konten">
        
        <?php $this->load->view($main); ?>

        </div>

</body>