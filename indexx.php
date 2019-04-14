<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <title>Document</title>
</head>
<body>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="indexx.php">Local Health Care Centers</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <li class="nav-item dropdown">
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Gallery
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="#">Photos</a>
                <a class="dropdown-item" href="#">Videos</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/health2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3 class="text-primary">First Slide</h3>
              
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/fgh.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>YOOOO</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/health3.jpg');background-size: cover;">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <!-- <p>YOOOO</p> -->
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
    <hr>
<div class="container">
  <h2 class="text-center">Find your location</h2>
</div>
    <div class="container" id="content">
      <div class="dropdown" class="h-100 row align-items-center">
        <button type="button" class="btn btn-primary" onclick="func()">Get Location</button>
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false" >Select a location</button>
        <div class="dropdown-menu dropdown-primary">
          <a class="dropdown-item" href="ram.html">Medak</a>
          <a class="dropdown-item" href="kan.html">Nalgonda</a>
          <a class="dropdown-item" href="post.php">Khammam</a>

        </div>
      </div>
      </div>
      </div>


<hr>
<h4 class="text-success text-center">
<?php    
$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
if ($query && $query['status'] == 'success') {
echo 'Hey!! User from ' .$query['city'] .'!';
echo("<script>
function func(){
    window.location.replace('kan.html');
}
</script>");
} 
?></h4>
<div style="width: 100%; margin-top: 50px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3811.4609594923095!2d78.59506221482327!3d17.196413288193316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcba659868b4727%3A0xf39a771705e23170!2sCVR+College+Of+Engineering!5e0!3m2!1sen!2sin!4v1547276970489" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
   <!-- <iframe src="https://www.google.com/maps/@17.3503115,78.4639746,14z" width="100%" height="200" frameborder="0" style="border:0"></iframe> -->
</div>
</body>

</html>