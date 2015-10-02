
<div class="w3-card-24 w3-amber" id="form-upload">
    <h2 id="upload-form-title" class="text-center">Upload Form</h2>
<form class="w3-container" id="form-upload-container" action='<?php echo base_url();?>index.php/upload/do_upload' method='post'
  enctype="multipart/form-data" onsubmit='return confirm("Apakah Anda yakin ingin menambahkan produk?")'>

  <div class="w3-group">

    <input name="productname" class="w3-input" type="text" style="width:100%" required>
    <label class="w3-label">Product Name</label>

  </div>
  <div class="w3-group"> 
    <input name="productcode" class="w3-input" type="text" style="width:100%" required>
    <label class="w3-label">Product Code</label>
  </div>

    <div class="w3-group"> 
    <input name="price" class="w3-input" type="text" style="width:100%" required>
    <label class="w3-label">Price</label>
  </div>
    
      <div class="w3-group"> 
    <input name="sizes" class="w3-input" type="text" style="width:100%" required>
    <label class="w3-label">Sizes</label>
  </div>
      
            <div class="w3-group">
                <select class='form-control' name='gender' id='gender'>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="A">All</option>
                </select>
            <label class="w3-label">Gender</label>
          </div>
      
      <div class="w3-group"> 
    <textarea name="description" class="w3-input" type="text" style="width:100%" required></textarea>
    <label class="w3-label">Description</label>
  </div>
      
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
