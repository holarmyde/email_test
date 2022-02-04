<?php include 'sendEmail.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="stylesheet" href="style.css" type="text/css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>

  <!--Alert Message Start-->
  <section>
  <?php echo $alert;?>
</section>
<br>
  <!--<div class="alert-success">
    <span>Message Sent! Thank you for contacting us</span>
  </div>-->
  <!--<div class="alert-error">
    <span>Something went wrong! Please try again</span>
  </div>-->
  <!--Alert Message End-->


<!-- contact section start-->
<div class="contact-section">
  <div class="contact-info">
    <div><i class="fas fa-map-marker-alt"></i> Address, City, Country</div>
    <div><i class="fas fa-envelope"></i> contact@email.com</div>
    <div><i class="fas fa-phone"></i> +00 0000 000 000</div>
    <div><i class="fas fa-clock"></i> Mon - Fri 8:00 AM to 5:00PM</div>
    </div>
    <div class="contact-form">
      <h2>contact us</h2>
  <form class="contact" action="" method="POST">
  
								<div class="row 50%">
									<div class="6u"><input type="text" name="name" placeholder="Name" /></div>
									<div class="6u"><input type="email" name="email" placeholder="Email" /></div>
								</div>
								<div class="row 50%">
									<div class="12u"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="actions">
    

    <!-- <input type="hidden" name="_captcha" value="false">
    <!-<input type="hidden" name="_next" value="https://site4castty.netlify.app/thankyou.html">-->

    <input type="submit" name="submit" class="send-btn" value="Send">
    </ul>
									</div>
								</div>
</form>
</div>
</div>
<!--contact section end-->

<script>
  if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
  }
</script>
</body>
</html>