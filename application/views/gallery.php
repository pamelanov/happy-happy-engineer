

<div class="w3-container w3-teal">
<h1>Summer Collection 2015</h1>
</div>

<style>
      ul {         
          padding:0 0 0 0;
          margin:0 0 0 0;
      }
      ul li {     
          list-style:none;
          margin-bottom:25px;           
      }
      ul li img {
          cursor: pointer;
      }
      .modal-body {
          padding:5px !important;
      }
      .modal-content {
          border-radius:0;
      }
      .modal-dialog img {
          text-align:center;
          margin:0 auto;
      }
    .controls{          
        width:50px;
        display:block;
        font-size:11px;
        padding-top:8px;
        font-weight:bold;          
    }
    .next {
        float:right;
        text-align:right;
    }

      /*override modal for demo only*/
      .modal-dialog {
          max-width:500px;
          padding-top: 90px;
      }
      @media screen and (min-width: 768px){
          .modal-dialog {
              width:500px;
              padding-top: 90px;
          }          
      }
      @media screen and (max-width:1500px){
          #ads {
              display:none;
          }
      }
     
  </style>

<!-- <div class="modal fade" id="my<a href="http://www.jqueryscript.net/tags.php?/Modal/">Modal</a>" tabindex="-1" role="dialog" aria-labelledby="modal-contentLabel" aria-hidden="true">
	-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modal-contentLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body"> <?php echo "aaa" ?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="container">
  <ul class="row">
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">

          <img class="img-responsive" src="http://localhost:8080/happy-happy-engineer/pictures/H2E_1488.jpg">
      </li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
          <img class="img-responsive" src="<?php echo base_url();?>pictures/H2E_790.jpg">
      </li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
          <img class="img-responsive" src="<?php echo base_url();?>pictures/H2E_5458.jpg">
      </li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
          <img class="img-responsive" src="<?php echo base_url();?>pictures/H2E_5668.jpg">
      </li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
          <img class="img-responsive" src="<?php echo base_url();?>pictures/H2E_1488.jpg">
      </li>
      <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4">
          <img class="img-responsive" src="<?php echo base_url();?>pictures/H2E_1488.jpg">
      </li>
      
    </ul>
  </div>
</div> <!-- container -->  

<script type="text/javascript">
  
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