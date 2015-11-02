


<div class="w3-card-24 w3-amber" id="form-upload">
    <h2 id="upload-form-title" class="text-center">Upload Form</h2>
<form class="w3-container" id="form-upload-container" action='<?php echo base_url();?>index.php/upload_news/do_upload' method='post'
 enctype="multipart/form-data"
 onsubmit='return confirm("Apakah Anda yakin ingin menambahkan berita?")'>

  <div class="w3-group">

    <input name="judulBerita" class="w3-input" type="text" style="width:100%" required>
    <label class="w3-label">Judul Berita</label>

  </div>
  <div class="w3-group"> 
    <input name="tanggalBerita" class="w3-input" type="date" style="width:100%" required>
    <label class="w3-label">Tanggal Berita</label>
  </div>

    <div class="w3-group"> 

    <textarea id="txtArea" onkeypress="onTestChange()"; name="isiBerita" class="w3-input" type="text" rows="8" cols="50"  required></textarea>

    <label class="w3-label">Isi Berita</label>
  </div>
      
  <div class="w3-group">
    <label class="w3-label">Upload A Picture</label>
    <?php echo $error;?>
    <?php echo form_open_multipart('upload_news/do_upload');?>
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


<script>
function onTestChange() {
    var key = window.event.keyCode;

    // If the user has pressed enter
    if (key == 13) {
        document.getElementById("txtArea").value =document.getElementById("txtArea").value + "\n";
        return false;
    }
    else {
        return true;
    }
}
</script>
