<!doctype html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale: 1.0">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/device_styles.css">

  <title>Jack Huang's Personal Website - Contact</title>

</head>
<body>
  <!-- Header -->
  <header>
<!-- End of header -->

    <!-- Logo -->
<div id="logo">
  <hgroup>
    <h1> Jack Huang</h1>
  </hgroup>
</div>

<!-- End of Logo -->

<!-- Nav -->
<div id="nav">
  <div class="wrapper">
    <nav>
      <a id="button" href="index.html">About</a>
      <a id="button" href="portfolio.html">Portfolio</a>
      <a id="button" href="contact.php">Contact</a>
    </nav>
  </div>
</div>
</header>
<!-- End of Header -->

<!-- iframe-->
<div class="wrapper">
  <section class="col1_right clearfix">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387157.48218081944!2d-73.97968099999999!3d40.703312749999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2sus!4v1436984786982" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
  </section>
</div>

<!-- contact form -->
<div class="wrapper">
<section class="col2_left contact_form clearfix">
    <form method="post" action="mailer.php">
      <input type="text" name="name" placeholder="your name" required>
      <input type="email" name="email" placeholder="your email" required>
      <input type="tel" name="phone" placeholder="your phone (optional)">
      <textarea rows="10" name="message" placeholder=" your message"></textarea>
      <input type="text" name="verify" class="verif_box" placeholder="verify you're human" required>
      <img class="verif_img" src="verificationimage.php?
      <?php echo rand(0,9999);?>" alt="verification image">
      <input type="submit" value="send">
    </form>
  </section>
</div>

  <div class="wrapper">
    <div class="clearfix">
      <!-- LinkedIn image -->
        <a href="https://www.linkedin.com/pub/jack-huang/bb/244/1b4" target="_blank">
        <img class="imglinks" src="images/linkedin-34px.png" /></a>
        <!-- Github Image -->
        <a href="http://www.github.com/jhack32" target="_blank">
        <img class="imglinks" src="images/GitHub-Mark-32px.png" /></a>
        </div>
      </div>



    <!-- Footer -->
  <div class="clearfix">
    <footer>
      &copy; 2015 by Jack Huang. All Rights Reserved.
    </footer>
  </div>

    <!-- End of Footer -->

</body>
</html>
