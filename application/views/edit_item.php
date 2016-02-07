<?php if($this->session->userdata('logged_in')){ ?>
<?php foreach ($item_data as $row){

}

?>

<div class="w3-card-24 w3-amber" id="form-upload">

    <h2 id="upload-form-title" class="text-center">Edit Form</h2>
<form class="w3-container" id="form-upload-container" action='<?php echo base_url();?>index.php/upload/edit/' method='post'
  enctype="multipart/form-data" onsubmit='return confirm("Apakah Anda yakin ingin mengubah informasi produk?")'>

  <div class="w3-group">

    <input name="productname" value="<?php echo $row['Jenis_Produk'];?>" class="w3-input" type="text" style="width:100%" required>
    <label class="w3-label">Product Name</label>

  </div>
  <div class="w3-group"> 
    <input name="productcode" value="<?php echo $row['ID_Produk'];?>" class="w3-input" type="text" style="width:100%"  required>
    <label class="w3-label">Product Code</label>
    <input type="hidden" value="<?php echo $row['ID_Produk'];?>" name="ori_prod_cod">
  </div>

    <div class="w3-group"> 
    <input name="price" class="w3-input" type="text" value="<?php echo $row['Harga'];?>" style="width:100%" required>
    <label class="w3-label">Price</label>
  </div>
    
      <div class="w3-group"> 
    <input name="sizes" class="w3-input" type="text" value="<?php echo $row['Size'];?>" style="width:100%" required>
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
    <textarea name="description" class="w3-input" type="text" style="width:100%" required>
        <?php echo $row['Deskripsi_Produk'];?>
    </textarea>
    <label class="w3-label">Description</label>
  </div>
      
         <center><div class="w3-group"> 
      <label class="w3-label">Picture</label>
      <br/>
      <div class="thumbnail" id="men-collection-col">
        <img id = "img_edit" src="<?php echo base_url();?>uploads/<?php echo $row['Upload_Path'];?>">
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
