

<p id='collection_title' class="text-right">Gallery</p>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modal-contentLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body"> <?php echo "aaa" ?>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<br>
<div class="container">
  <ul class="row">
      <li class="col-xs-6">
          <img id="gallery" class="img-responsive" src="<?php echo base_url();?>pictures/kerr.jpg">
      </li>
      <li class="col-xs-6">
          <img id="gallery" class="img-responsive" src="<?php echo base_url();?>pictures/collins.jpg">
      </li>
      <li class="col-xs-6">
          <img id="gallery" class="img-responsive" src="<?php echo base_url();?>pictures/italy.jpg">
      </li>
      <li class="col-xs-6">
          <img id="gallery" class="img-responsive" src="<?php echo base_url();?>pictures/slideshow.png">
      </li>
      <li class="col-xs-6">
          <img id="gallery" class="img-responsive" src="<?php echo base_url();?>pictures/H2E_1488.jpg">
      </li>
      <li class="col-xs-6">
          <img id="gallery" class="img-responsive" src="<?php echo base_url();?>pictures/H2E_1488.jpg">
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