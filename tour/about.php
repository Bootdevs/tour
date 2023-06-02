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
<session id="about">
<div class="top">
<img src="./images/pages-bg.jpg" alt="">
<div class="brightness-overlay"></div>
<div class="top-cont">
<h1>About Us</h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">About Us</li>
  </ol>
</nav>
</div>
</div>
<!--mid-session-->
<div class="container mb-5">
    <div class="row">
        <div class="col-sm-12  col-lg-6 first">
            <h2 style="font-weight:bold">Memories Made Together Last a Lifetime</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium..</p>
            <p>Your satisfaction with your experience that your recommendation. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
            <div class="first-content">
                <i class="fas fa-medal"></i>
                <h4>Satisfaction Guarentee</h4>
            </div>
            <div class="second-content">
                <i class="fas fa-headphones"></i>
                <h4>Online Support</h4>
            </div>
        </div>
        <div class="col-sm-12  col-lg-6">
            <div class="img-bg">
                <img class="cards-top" src="./images/pex.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!--Feedback-->
<div id="card-carousel" class="carousel slide mx-auto" data-bs-ride="carousel"  data-bs-interval="10000">
  <div class="carousel-inner ">
  <div class="carousel-item active">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Fully recommend this agency</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias ipsa dicta libero dolorem, reiciendis, in quae nemo tempora doloribus enim quam quidem, perferendis laudantium! </p>
          <img class="mx-auto" src="./images/profile1 (1).jpg" alt="">
          <div class="last pt-4">
            <b>John</b>
            <span>Graphic designer</span>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item ">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Best tour agency</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias ipsa dicta libero dolorem, reiciendis, in quae nemo tempora doloribus enim quam quidem, perferendis laudantium! </p>
          <img class="mx-auto" src="./images/profile1 (1).png" alt="">
          <div class="last pt-4">
            <b>BootDevs</b>
            <span>web designer</span>
         </div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Enjoyed my vacation and had fun with this agency</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias ipsa dicta libero dolorem, reiciendis, in quae nemo tempora doloribus enim quam quidem, perferendis laudantium! </p>
          <img class="mx-auto" src="./images/profile1 (2).jpg" alt="">
          <div class="last pt-4">
          <b>Laura</b>
          <span>Graphic designer</span>
</div>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Had a great time while viewing the city with this agency</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias ipsa dicta libero dolorem, reiciendis, in quae nemo tempora doloribus enim quam quidem, perferendis laudantium! </p>
          <img class="mx-auto" src="./images/profile1 (2).png" alt="">
          <div class="last pt-4">
          <b>Tosin</b>
          <span>Student</span>
</div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>
  <div class="carousel-indicators ">
  <button type="button" data-bs-target="#card-carousel" data-bs-slide-to="0" class="active bg-dark" aria-current="true" aria-label="Card 1"></button>
    <button type="button" data-bs-target="#card-carousel" data-bs-slide-to="1" class="nactive  bg-dark"  aria-current="true" aria-label="Card 2"></button>
    <button type="button" data-bs-target="#card-carousel" data-bs-slide-to="2" class="nactive bg-dark"aria-label="Card 3"></button>
    <button type="button" data-bs-target="#card-carousel" data-bs-slide-to="3" class="nactive bg-dark" aria-label="Card 4"></button>
  </div>
</div>
</session>
<script>
    const carousel = document.querySelector('#card-carousel');
const carouselInstance = new bootstrap.Carousel(carousel, {
  interval: 10000// interval in milliseconds
});
</script>
</body>
</html>

<?php
include("./includes/footer.php")

?>