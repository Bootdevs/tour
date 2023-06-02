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
<body >
<div class="carousel-container">
  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./images/1r.jpg" class="d-block w-100 carousel-image" alt=" " >
        <div class="content">
            <h1>Welcome To Winnipeg</h1>
            <p>Let's find your passion together</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/2.jpg" class="d-block w-100 carousel-image" alt="...">
        <div class="content">
            <h1>The real adventure is out there</h1>
            <p>Let's find your passion together</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./images/4.jpg" class="d-block w-100 carousel-image" alt="...">
        <div class="content">
        <h1>Escape life for a little while</h1>
            <p>Let's find your passion together</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<!--cards-->
<div class=" container  mb-5">
<div class="row ">
    <div class="col-sm-12 col-md-6 col-lg-3 top">
        <div class="card">
        <div><i class="fas fa-swimmer"></i></div>
        <div class="title">Scuba Diving</div>
        <p>Experience a unique and breathtaking underwater world.</p>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3 top">
    <div class=" card">
    <div><i class="fas  fa-route"></i></div>
        <div class="title">Excursions</div>
        <p>An opportunity to explore new places and create unforgettable memories.</p>
    </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3 top" >
    <div class="card">
    <div><i class="fas  fa-hiking"></i></div>
        <div class="title">Mountain climbling</div>
        <p>Get physical and mental challenges and fosters a connection with nature.</p>
    </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3 top">
    <div class="card">
    <div><i class="fas  fa-parachute-box"></i></div>
        <div class="title">sky Diving</div>
        <p>Get an exhilarating rush and a unique perspective of the world from above.</p>
        </div>
    </div>
</div>
</div>
<!--main destinations-->
<div class="main mb-5">
    <h1>Main Destinations</h1>
    <p>Check out the best places to explore in Winnipeg and where you can enjoy the best vacations.</p>
</div>


<div class=" container mt-5">
<div class="row ">
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="imagecard ">
        <img src="./images/place1.jpg" alt="">
        <div class="image-content">
                <div class="title"><h3>Assiniboine Park</h3></div>
                <div class="content-d">
                    <p>Assiniboine Park is a beautiful park that features gardens, walking trails, a zoo, and a conservatory.</p>
                </div>
        </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="imagecard">
    <img src="./images/place2.jpg" alt="">
        <div class="image-content">
                <div class="title"><h3>Manitoba Museum</h3></div>
                <div class="content-d">
                    <p>The Manitoba Museum offers exhibitions on Manitoba's history and natural world, including a planetarium.</p>
                </div>
        </div>
    </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="imagecard">
    <img src="./images/place3.jpg" alt="">
        <div class="image-content">
        <div class="title"><h3>Winnipeg Art Gallery</h3></div>
                <div class="content-d">
                    <p>The Winnipeg Art Gallery is a museum that features collections of Canadian and international art.</p>
                </div>
        </div>
    </div>
    </div>
   
</div>
<div class="row ">
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="imagecard">
        <img src="./images/plae4.jpg" alt="">
        <div class="image-content">
        <div class="title"><h3>Canadian Museum For Human Rights</h3></div>
                <div class="content-d">
                    <p>The Canadian Museum for Human Rights is a national museum dedicated to exploring human rights issues.</p>
                </div>
        </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="imagecard">
    <img src="./images/place5.jpg" alt="">
        <div class="image-content">
        <div class="title"><h3>Leo Mol Sculpture Garden</h3></div>
                <div class="content-d">
                    <p>The Leo Mol Sculpture Garden is a beautiful outdoor space that features sculptures by renowned artist Leo Mol.</p>
                </div>
        </div>
    </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4">
    <div class="imagecard">
    <img src="./images/place7.jpg" alt="">
        <div class="image-content">
        <div class="title"><h3>The Forks</h3></div>
                <div class="content-d">
                    <p>The Forks is a historic site that offers year-round entertainment, including shopping, dining, and outdoor activities.</p>
                </div>
        </div>
    </div>
    </div>
   
</div>
</div>
<!--video tour-->
<div class="vid-title">
    <h4>Video Tour</h4>
</div>



<!-- Vertically centered modal -->
<div class="video-content">
    <p>See what the city looks like</p>
    <iframe src="https://www.youtube.com/embed/Z6tDLK9o6b8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</div>


</body>
</html>


<?php
include("./includes/footer.php")

?>