<?php
require_once("./includes/header.php")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<session id="contact">
<div class="top">
<img src="./images/pages-bg.jpg" alt="">
<div class="brightness-overlay"></div>
<div class="top-cont">
<h1>Contact Us</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
    <li class="breadcrumb-item"><a href="./about.php">About Us</a></li>
    <li class="breadcrumb-item" aria-current="page">Contact Us</li>
  </ol>
</nav>
</div>
</div>
<div class="container mt-5 mb-5">

<form class="row g-3" action="./includes/contact-inc.php" method="POST">
   <h3>GET IN TOUCH</h3>
  <div class="col-md-6 col-lg-4 ">
    <input type="name" name="name"  placeholder="Name" required pattern="[A-Za-z ]+">
  </div>
  <div class="col-md-6 col-lg-4 ">
    <input type="email" name="email" placeholder="Email address" required>
  </div>
  <div class="col-12 col-lg-8 ">
    <input type="tel" name="phone" placeholder="Please enter your phone" required >
  </div>
  <div class="col-12 col-lg-8 ">
   <textarea name="message"  placeholder="Enter message" required></textarea>
  </div>
  <div class="col-12 ">
    <button type="submit" name="submit"  class="btn btn-dark">Send Message</button>
  </div>
</form>

</div>
<!--map-->

<div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164633.42905090615!2d-97.15283984999999!3d49.8537806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x52ea73fbf91a2b11%3A0x2b2a1afac6b9ca64!2sWinnipeg%2C%20MB!5e0!3m2!1sen!2sca!4v1684009990033!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>



<session>
</body>
</html>

<?php
include("./includes/footer.php")
?>