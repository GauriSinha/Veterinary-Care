<?php
session_start(); 
if(!isset($_SESSION['user'])) 
{ 
    
    $_SESSION['loggedin']=false;
} 
    ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Veterinary Care - About Us</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="home.php">Veterinarian</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Blog
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
            <a class="dropdown-item" href="blog-home-1.php">About Cats</a>
            <a class="dropdown-item" href="blog-home-2.php">About Dogs</a>
            <a class="dropdown-item" href="blog-post.php">General Information</a>
          </div>
        </li>

        <?php
          if($_SESSION['loggedin']==true){
            ?>
          
          <li class="nav-item dropdown" id="user_area">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownUser" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Welcome User
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="appoint.php">Book an appointment</a>
              <a class="dropdown-item" href="logout.php">Logout</a>
            </div>
          </li>
          <?php
          } else{
            ?>
            <li class="nav-item" >
            <a class="nav-link" href="login.php">Login/Sign Up</a>
          </li>
          <?php
          }
            ?>
      </ul>
    </div>
  </div>
</nav>

<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">About Us
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="home.php">Home</a>
    </li>
    <li class="breadcrumb-item active">About</li>
  </ol>

  <!-- Intro Content -->
  <div class="row">
    <div class="col-lg-6">
      <img class="img-fluid rounded mb-4" src="images/about.jpg" alt="">
    </div>
    <div class="col-lg-6">
      <h2>Veterinary Care</h2>
      <p>
        Selecting a veterinary hospital is no small decision. The loving, highly-skilled and hardworking staff at our veterinary clinic in Ponte Vedra, FL pride themselves in providing excellent and affordable care for your pet. We want what is best for your pet but also do not lose sight of what is best for you. Customer communication is very important to us whether that be in providing options, answering all questions or following up on how your pet is doing. We are confident in our abilities to meet your needs and hope you will choose us as your pet care partner.</p>
    </div>
  </div>
  <!-- /.row -->

  <!-- Team Members -->
  <h2>Our Team</h2>

  <div class="row">
    <div class="col-lg-3 mb-3">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="images/gauri.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">Dr Gauri Sinha</h4>
          <h6 class="card-subtitle mb-2 text-muted">Dog Specialist</h6>
          <p class="card-text">She has been working in this field for the past 14 years. She has won a lot of awards in this field</p>
        </div>
        <div class="card-footer">
          <a href="#">gauri.sinha@st.niituniversity.in</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 mb-3">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="images/piyush.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">Dr Piyush Singhania</h4>
          <h6 class="card-subtitle mb-2 text-muted">Cat Specialist</h6>
          <p class="card-text">He has been working in this field for the past 23 years. He has written a book based on behaviour of cats .</p>
        </div>
        <div class="card-footer">
          <a href="#">piyush.singhania@st.niituniversity.in</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 mb-3">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="images/anubhav.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">Dr Anubhav Paul</h4>
          <h6 class="card-subtitle mb-2 text-muted">Bird Specialist</h6>
          <p class="card-text">He has been working in this field for the past 16 years. He has published a lot of research papers about the anatomy of birds.</p>
        </div>
        <div class="card-footer">
          <a href="#">anubhav.paul@st.niituniversity.in</a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 mb-3">
      <div class="card h-100 text-center">
        <img class="card-img-top" src="images/rahul.jpg" alt="">
        <div class="card-body">
          <h4 class="card-title">Dr Rahul Poddar</h4>
          <h6 class="card-subtitle mb-2 text-muted">Aquatic Animal Specialist</h6>
          <p class="card-text">He has been working in this field for the past 10 years. He has published a lot of research papers on life with aquatic animals.</p>
        </div>
        <div class="card-footer">
          <a href="#">rahul.poddar@st.niituniversity.in</a>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->

  <!-- Our Customers -->
  <h2>Our Customers</h2>
  <div class="row">
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid" src="images/cust.jpg" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid" src="images/cust2.jpg" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid" src="images/cust3.jpg" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid" src="images/cust4.jpg" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid" src="images/cust5.jpg" alt="">
    </div>
    <div class="col-lg-2 col-sm-4 mb-4">
      <img class="img-fluid" src="images/cust6.jpg" alt="">
    </div>

  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy;Veterinary Care 2019</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
