<title><?php echo $judul; ?></title>

<div class="page-header">
  <p id='collection_title' class="text-right">Gallery</p>

  <?php if($this->session->userdata('logged_in')){ ?>
  <a href="<?php echo base_url(); ?>index.php/Upload_Gallery_cont"><p id='new_collection' 
    class="text-center"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true">
    </span> Add New Gallery</p></a>
  <?php } ?>
</div>

<br>

<div class="container">
  <?php
    $url = $this->uri->uri_string();
    $no = $offset;
    foreach($data as $row ) {
  ?>
    <div class="col-lg-3 col-sm-4 col-6">
      <a href="#" title="Image 1"><img src="<?php echo base_url();?>foto_gallery/<?php echo $row->foto_gallery;?>"></a>
      <?php if($this->session->userdata('logged_in')){
        echo str_repeat('&nbsp;', 2);
        echo anchor('gallery_controller/delete/'.$row->foto_gallery, '<button type="submit" class="btn btn-danger">
          <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
          Delete</button>',array('onclick' => "return confirm('Are you sure to delete this item?')"));
        } ?>
    </div>
    
  <?php } ?> 
</div>


<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">×</button>
    <h3 class="modal-title">Heading</h3>
  </div>
  <div class="modal-body">
    
  </div>
  <div class="modal-footer">
    <button class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
   </div>
  </div>
</div>


 <!-- container -->  

<script language="text/javascript">
  
  $('.thumbnail').click(function(){
    $('.modal-body').empty();
    var title = $(this).parent('a').attr("title");
    $('.modal-title').html(title);
    $($(this).parents('div').html()).appendTo('.modal-body');
    $('#myModal').modal({show:true});
});

  // $(document).ready(function(){
  //   $('li img').on('click',function(){
  //     var src = $(this).attr('src');
  //     var img = '<img src="' + src + '" class="img-responsive"/>';
  //       $('#myModal').modal();
  //       $('#myModal').on('shown.bs.modal', function(){
  //         $('#myModal .modal-body').html(img);
  //       });
  //       $('#myModal').on('hidden.bs.modal', function(){
  //         $('#myModal .modal-body').html('');
  //       });
  //    });
  // })
</script>