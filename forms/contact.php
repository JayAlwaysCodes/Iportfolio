
  <!-- $receiving_email_address = 'johnsonikechukwu525@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new $php_email_form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject']; -->

  <!-- // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

//   $contact->add_message( $_POST['name'], 'From');
//   $contact->add_message( $_POST['email'], 'Email');
//   $contact->add_message( $_POST['message'], 'Message', 10);

//   echo $contact->send($receiving_email_address);
//  -->
<?php
  $sent_messsage = false;
  if(isset($_POST['email']) && $_POST['email'] != ''){
   if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    //submit the form
    $senderName = $_POST['name'];
    $senderEmail = $_POST['email'];
    $subject = $_POST['subject'];
    $message =$_POST['message'];
 
    $to = "johnsonikechukwu525@gmail.com";
    $body ="";
 
    $body .= "From: ".$senderName. "\r\n";
    $body .= "Email: ".$senderEmail. "\r\n";
    $body .= "Message: ".$message. "\r\n";
 
    mail($to, $subject, $body);
    ini_set($to, $subject,$body);
 
    $sent_messsage = true;
    
    }
  
  }
  

?>
<!--  
  if ($sent_message):

  <h3>Thanks, I will be in touch</h3>

  else: 
<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
  
  <form action="forms/contact.php" method="post" role="form" class="php-email-form">
    <div class="row">
      <div class="form-group col-md-6">
        <label for="name">Your Name</label>
        <input type="text" name="name" class="form-control" id="name" required>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Your Email</label>
        <input type="email" class="form-control" name="email" id="email" required>
      </div>
    </div>
    <div class="form-group">
      <label for="name">Subject</label>
      <input type="text" class="form-control" name="subject" id="subject" required>
    </div>
    <div class="form-group">
      <label for="name">Message</label>
      <textarea class="form-control" name="message" rows="10" required></textarea>
    </div>
    <div class="my-3">
      <div class="loading">Loading</div>
      <div class="error-message"></div>
      <div class="sent-message">Your message has been sent. Thank you!</div>
    </div>
    <div class="text-center"><button type="submit">Send Message</button></div>
  </form>
</div
  endif;
-->
