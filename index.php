<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo website</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    

</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Photo Gallery</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#nature">Nature</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#architecture">Architecture</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#travel">Travel</a>
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Slides starts here -->
  
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  class="d-block w-100" src="images/Arch 4.jpg" alt="Architecture">
      <div class="carousel-caption d-none d-md-block">
        <h3>Architecture</h3>
        </div>
    </div>

    <div class="carousel-item">
    <img  class="d-block w-100" src="images/nature 4.1.jpg" alt="Nature">
      <div class="carousel-caption d-none d-md-block">
        <h3>Nature</h3>   
        </div>
      </div>

    <div class="carousel-item">
      <img  class="d-block w-100" src="images/travel 4.jpg" alt="Travel">
      <div class="carousel-caption d-none d-md-block">
        <h3>Travel</h3>    
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



<!-- Nature Sections Starts here -->

<section class="my-4" id="nature">
<div class="py-4">
  <h2 class="text-center">Nature</h2>
</div>
<div class="container-fluid">
  <div class="row">
<div class="col-lg col-md-4 col-12">
  <img src="images/nature 1.jpg" class="img-fluid pb-3" alt="Nature">
</div>
<div class="col-lg col-md-4 col-12">
  <img src="images/nature 2.jpg" class="img-fluid pb-3" alt="Nature">
</div>
<div class="col-lg col-md-4 col-12">
  <img src="images/Nature 3..jpg" class="img-fluid pb-3" alt="Nature">
</div>
</div>
</div>
</section>


<!-- Architecture Sections Starts here -->
<section class="my-4" id="architecture">
<div class="py-4">
  <h2 class="text-center">Archictecture</h2>
</div>
<div class="container-fluid">
  <div class="row">
<div class="col-lg col-md-4 col-12">
  <img src="images/Arch 1.1.jpg" class="img-fluid pb-3" alt="Nature">
</div>
<div class="col-lg col-md-4 col-12">
  <img src="images/Arch 1.2.jpg" class="img-fluid pb-3" alt="Nature">
</div>
<div class="col-lg col-md-4 col-12">
  <img src="images/Arch 1.3.jpg" class="img-fluid pb-3" alt="Nature">
</div>
</div>
</div>
</section>

<!-- Travel Sections Starts here -->
<section class="my-4" id="travel">
<div class="py-4">
  <h2 class="text-center">Travel</h2>
</div>
<div class="container-fluid">
  <div class="row">
<div class="col-lg col-md-4 col-12">
  <img src="images/travel 1.jpg" class="img-fluid pb-3" alt="Nature">
</div>
<div class="col-lg col-md-4 col-12">
  <img src="images/Travel 2.webp" class="img-fluid pb-3" alt="Nature">
</div>
<div class="col-lg col-md-4 col-12">
  <img src="images/Travel 3.jpg" class="img-fluid pb-3" alt="Nature">
</div>
</div>
</div>
</section>

<!-- Contact Form for the website -->
<section class="my-4" id="contact">
<div class="py-4">
  <h2 class="text-center">Contact US</h2>
  <div class="w-50 m-auto">
    <form action="about.php" method="post">
      <div class="form-group">
        <label for="">Name:</label>
        <input type="text" name="name" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Email:</label>
        <input type="email" name="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Number:</label>
        <input type="text" name="number" class="form-control">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>

<!-- About -->
<section class="my-4" id="about">
<div class="py-4">
  <h2 class="text-center">About</h2>
</div>
<div class="container-fluid">
  <h3 class="text-center">Cyrus Maundu</h3><br>
  <p class="text-center"><b>I am passionate front-end developer interested in coding and exploring the nature.<br>Backened developer using PHP and Laravel</b></p>
  <p class="text-center">&copy;Cyrus2024</p>

</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>