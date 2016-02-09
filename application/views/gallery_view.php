

<p id='collection_title' class="text-right">Gallery</p>

<?php if($this->session->userdata('logged_in')){ ?>
<a href="<?php echo base_url(); ?>index.php/Upload_Gallery_cont"><p id='new_collection' class="text-center"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Add New Gallery</p></a>
<?php } ?>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modal-contentLabel" aria-hidden="true">
 <?php
  $url = $this->uri->uri_string();
   $no = $offset;
   foreach($data as $row ) { 
   
   ?>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body"> 
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<br>
  <div class="container">
   <ul class="row">
      <li class="col-xs-6">
          <img id="gallery" class="img-responsive" src="<?php echo base_url();?>uploads/<?php echo $row->Upload_Path;?>">
          <?php if($this->session->userdata('logged_in')){
            echo str_repeat('&nbsp;', 2);
            echo anchor('gallery_controller/delete/'.$row->Upload_Path, '<button type="submit" class="btn btn-danger">
                      <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                       Delete</button>',array('onclick' => "return confirm('Are you sure to delete this item?')"));
          } ?>
      </li>      
    </ul>
  </div>

<div class="panel-footer" style="height:40px;">
  <?php echo $halaman ?> <!--Memanggil variable pagination-->
</div>
 <!-- container -->  

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