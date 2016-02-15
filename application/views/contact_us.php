
<div class= "row" id="contact_us_order">
  <div class="col-sm-6 col-md-4 col-xs-6">
    <!-- harusnya gambar order -->
    <img src ="<?php echo base_url();?>pictures/order.png" alt="order">
   </div> 
  <div class="col-sm-8 col-md-8 col-xs-12">
    <div id="tulisan">
      <div class="panel panel-primary">How to Order</div>
      <h2> How To Order <h2>
      <h3> Via Linne : @happy2engineer <br>
            1. Add linenya <br>
            2. Liat barang di website ini <br>
            3. Tentuin pilihan <br>
            4. Chat kita ;)
            <br><br> 
           Via Whatsapp : 08127186746 <br>
            1. Add linenya <br>
            2. Liat barang di website ini <br>
            3. Tentuin pilihan <br>
            4. Chat kita ;) <br>
             </h3>   
    </div>
  </div>
</div>
<br><br>

<?php
  $name; $email; $message; $human; $from; $to; $subject; $body;

      if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'example@domain.com'; 
        $subject = 'Message from Contact Demo ';
        
        $body ="From: $name\n E-Mail: $email\n Message:\n $message";
        // Check if name has been entered
        if (!$_POST['name']) {
          $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
          $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
          $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
          $errHuman = 'Your anti-spam is incorrect';
        }
    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
      if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
      } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
      }
    }
  }
?>


<div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1 class="page-header text-center">Contact Form Example</h1>
        <form class="form-horizontal" role="form" method="post" action="index.php">
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
              <?php echo "<p class='text-danger'>$errName</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
              <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="message" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
              <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
          </div>
          <div class="form-group">
            <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
              <?php echo "<p class='text-danger'>$errHuman</p>";?>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
              <?php echo $result; ?>  
            </div>
          </div>
        </form> 
      </div>
    </div>
  </div>   