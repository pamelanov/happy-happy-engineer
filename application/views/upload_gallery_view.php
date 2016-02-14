<?php if($this->session->userdata('logged_in')){ ?>
<div class="w3-card-24 w3-amber" id="form-upload">
    <h2 id="upload-form-title" class="text-center">Upload Form</h2>
<form class="w3-container" id="form-upload-container" action='<?php echo base_url();?>index.php/upload_gallery_cont/do_upload' method='post'
  enctype="multipart/form-data" onsubmit='return confirm("Apakah Anda yakin ingin menambahkan Gallery?")'>

  
      
    <div class="w3-group">
      <label class="w3-label">Upload A Picture</label>
      <?php echo $error;?>
      <?php echo form_open_multipart('upload/do_upload');?>
      <input class="w3-input" id="upload-file-input" type="file" name="userfile" size="20" />
    </div>
          <input class="w3-btn w3-teal" type="submit" value="upload" />

<!--   <label class="w3-checkbox">
    <input type="checkbox" checked="checked">
    <div class="w3-checkmark"></div> Milk
  </label><br>
  <label class="w3-checkbox">
    <input type="checkbox">
    <div class="w3-checkmark"></div> Sugar
  </label><br>-->
  


<br /><br />



</form>

</div>
<?php }

else { ?>
    <div class="w3-card-24 w3-amber" id="form-upload">
        <p class="text-center" id="upload_success">FORBIDDEN: You have to log in to see this page.</br>
<button type="button" class="btn btn-danger"><a href="<?php echo base_url(); ?>index.php/auth">Admin Login<a/></button>
        
    </div>
<?php }

?>
