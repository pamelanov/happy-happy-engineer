<?php if($this->session->userdata('logged_in')){ ?>
<?php foreach ($item_data as $row){

}

?>

<div class="w3-card-24 w3-amber" id="form-upload">

    <h2 id="upload-form-title" class="text-center">Edit Form</h2>
<form class="w3-container" id="form-upload-container" action='<?php echo base_url();?>index.php/upload/edit/' method='post'
  enctype="multipart/form-data" onsubmit='return confirm("Apakah Anda yakin ingin mengubah Berita?")'>

  <div class="w3-group">

    <input name="judulBerita" value="<?php echo $row['judul_berita'];?>" class="w3-input" type="text" style="width:100%" required>
    <label class="w3-label">Judul Berita</label>

  </div>
  <div class="w3-group"> 
    <input name="tanggalBerita" type="date" value="<?php echo $row['Tanggal'];?>" class="w3-input" type="text" style="width:100%"  required>
    <label class="w3-label">Tanggal Berita</label>
  </div>

 <div class="w3-group"> 
    <textarea name="isiBerita" class="w3-input" type="text" style="width:100%" required>
        <?php echo $row['isi_berita'];?>
    </textarea>
    <label class="w3-label">Isi Berita</label>
  </div>
  <center><div class="w3-group"> 
      <label class="w3-label">Picture</label>
      <br/>
      <div class="thumbnail" id="men-collection-col">
        <img id = "img_edit" src="<?php echo base_url();?>uploads/<?php echo $row['foto_berita'];?>">
      </div>
    </div>
  </center>
      
    <div class="w3-group">
      <label class="w3-label">Upload A New Picture</label>
       <?php echo form_open_multipart('upload/edit');?>
       <input class="w3-input" id="upload-file-input" type="file" name="userfile" size="20" />
    </div>

          <input class="w3-btn w3-teal" type="submit" value="upload" />



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
