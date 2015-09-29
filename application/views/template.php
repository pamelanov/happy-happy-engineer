<!DOCTYPE html>
<html lang ="en">
    <head>
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
  <title><?php echo $judul;?></title>
   
    <script src="<?php echo base_url(); ?>assets/jquery/bootbox.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery/jquery-1.11.2.js"></script>
    
    
    
    <script src="<?php echo base_url(); ?>assets/jquery/bootstrap.min.js"></script>
    
      <!-- code slideshow foto gallery -->

  
      <!-- Compiled and minified CSS -->
<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/materialize.min.css">-->

  <!-- Compiled and minified JavaScript --><!--
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>-->
  <link href="<?php echo base_url();?>assets/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url();?>assets/css/w3school.css" rel="stylesheet" type="text/css" />

   <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
   <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Berkshire+Swash|Josefin+Sans|Dosis' rel='stylesheet' type='text/css'>
  
        <script>
        
    </script>
    </head>
    
    
  
  
  
<body>

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
<!--   <a class="navbar-brand" href="#" id="navbar_brand">Happy Happy Engineer
        <img alt="Brand" id="brand_logo" src="<?php echo base_url();?>pictures/brand_logo.jpg">
      </a>-->
   
      <a class="navbar-brand" href="<?php echo base_url(); ?>">
        <img id="logo-header" alt="Brand" src="<?php echo base_url(); ?>pictures/horizontal_logo.png" height="30px">
      </a>
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li id="navbarText"><a href="<?php echo base_url();?>index.php/home_controller/about_us" id="navbarText">About</a></li>
        <li class="dropdown" id="navbarText">
          <a href="#" id="navbarText" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Collections <span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li><a href="<?php echo base_url();?>index.php/men_collection">Men</a></li>
      <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url();?>index.php/women_collection">Women</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url();?>index.php/all_collections">All Collections</a></li>
          </ul>
        </li>
    <li id="navbarText"><a href="<?php echo base_url();?>index.php/home_controller/gallery" id="navbarText">Gallery</a></li>
    <li id="navbarText"><a href="#" id="navbarText">News</a></li>
    <li id="navbarText"><a href="<?php echo base_url();?>index.php/home_controller/contact_us" id="navbarText">Order!</a></li>
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

 

        <div id="konten">
      
      
    
        
        <?php $this->load->view($main); ?>
    
    
    
    </div>
    
     
    
    <footer class="w3-container" id="footerwarna">
<div class="row">
  <div class="col-xs-6 col-md-4">
  <blockquote id="copyright-atas">
  <p id="copyright">&copy;Copyright 2015 Happy Happy Engineer </p>
  <p id="copyright">All Rights Reserved</p>
  <p id="copyright">Designed by pamelanov & arvinsamuar</p>
  <!--<p><a href="#" id="admin-login"><span class="glyphicon glyphicon-user" aria-hidden="true"> Login</a></span></p>-->
  </blockquote>
  
    <p><a href="<?php echo base_url(); ?>index.php/login">Admin Login</a></p>
  </div>
  <div class="col-xs-6 col-md-4">
  <div class="page-header">
  <h3>Instagram Feeds</h3>
</div>
    <!-- SnapWidget -->
<!-- SnapWidget -->
<iframe src="http://snapwidget.com/sc/?u=aGFwcHloYXBweWVuZ2luZWVyfGlufDEyMHwxMHwxfHx5ZXN8MjB8ZmFkZU91dHxvblN0YXJ0fG5vfHllcw==&ve=050915"
    title="Instagram Widget" class="snapwidget-widget" allowTransparency="true"
    frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; height:120px"></iframe>
  
  </div>
  <div class="col-xs-6 col-md-4">
  <div class="page-header">
  <h3>Social Medias</h3>
</div>
  <p id="social-media">
    <i id="footer_media_em" class="glyphicon glyphicon-envelope w3-xxxlarge"></i>
    <i id="footer_media_wa" class="fa fa-whatsapp w3-xxxlarge"></i>
    <i id="footer_media_fb" class="fa fa-facebook-square w3-xxxlarge"></i>
    <i id="footer_media_ins" class="fa fa-instagram w3-xxxlarge"></i>
    <i id="footer_media_tw" class="fa fa-twitter-square w3-xxxlarge"></i>
    
  </p>
  </div>
</div>
</footer>

</body>

<script language="text/javascript">
  function autoResizeDiv()
  {
      document.getElementById('contact_us_order').style.height = window.innerHeight +'px';
  }
  window.onresize = autoResizeDiv;
  autoResizeDiv();

   var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

  $(document).ready(function(){
           $('li img').on('click',function(){
                var src = $(this).attr('src');
                var img = '<img src="' + src + '" class="img-responsive"/>';
                $('#myModal').modal();
                $('#myModal').on('shown.bs.modal', function(){
                    $('#myModal .modal-body').html(img);
                });
                $('#myModal').on('hidden.bs.modal', function(){
                    $('#myModal .modal-body').html('');
                });
           });
        })
</script>