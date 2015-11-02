
<div id="login-form">
  
 <div class="row">
   <div class="col-xs-6 col-md-4">
   </div>
    <div class="col-xs-6 col-md-4">
    <div class="login-panel panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Login</h3>
      </div>
      <div class="panel-body" id='login_form'>
        <form action='<?php echo base_url();?>index.php/verifylogin/check_database' method='post' name='check_database'>
        <?php //echo form_open('verifylogin/check_database'); ?>
        <div class="form-group">
          <input class="form-control" placeholder="Username" name="username" type="username" id="username" autofocus>
        </div>
        <div class="form-group">
          <input class="form-control" placeholder="Password" name="password" type="password" ide="password" value="">
        </div>

        <button type="Submit" class="btn btn-lg btn-success btn-block" name="Login">Login </button>
        </form>
        <div style="color:red" align="center"><?php if(! is_null($error_message)) echo $error_message;?></div>
      </div>
    </div>
    </div>
     <div class="col-xs-6 col-md-4">
     </div>


</div>
</div>
