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

  <title>Blog - General Information</title>

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
  <h1 class="mt-4 mb-3">Mold in the home puts pets at risk
    <small>by
      <a href="#">DR Anubhav Paul</a>
    </small>
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="home.php">Home</a>
    </li>
    <li class="breadcrumb-item active">General Information</li>
  </ol>

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Preview Image -->
      <img class="img-fluid rounded" src="images/service.jpg" alt="">

      <hr>

      <!-- Date/Time -->
      <p>MONDAY, FEB 18TH, 2019</p>

      <hr>

      <!-- Post Content -->
      <p class="lead">If you’re wondering if mold in your home is as bad for your pets as it is for people, here’s the answer: It may be worse for them than us. </p>

      <p>Evidence shows that in humans, exposure to indoor mold is linked to such symptoms as coughing and wheezing. While there’s no proven association for pets, they can experience similar signs. Humans with chronic obstructive pulmonary disorder (COPD) or asthma may have difficulty breathing when exposed to molds. It makes sense that pets with shortened muzzles, such as pugs or bulldogs, could also have difficulty breathing in this situation. Pets with allergies or suppressed immune systems may be more susceptible to the effects of molds as well.</p>



      <p>Different types of molds are common in moist indoor areas. They come in through open doors or windows, heating and air conditioning systems, on clothing and even on pet paws, so there’s no real way to avoid them. If indoor moisture is excessive — say you have leaks from rain, or your home floods — molds can grow out of control.</p>

      <p>For long-term health of humans and pets in your family, the Centers for Disease Control and Prevention says mold can be removed from hard surfaces with commercial products, soap and water or a solution of 1 cup of bleach to 1 gallon of water (more bleach is not better). You will likely have to remove and replace carpets, insulation or wallboard in which mold is growing.</p>

      <hr>

      <!-- Comments Form -->
      <div class="card my-4">
        <h5 class="card-header">Leave a Comment:</h5>
        <div class="card-body">
          <form>
            <div class="form-group">
              <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>

      <!-- Single Comment -->
      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="images/gour.jpg" alt="">
        <div class="media-body">
          <h5 class="mt-0">Gourang Aggarwal</h5>
          WOW!Thank you so much for the knowledge.
        </div>
      </div>

      <!-- Comment with nested comments -->
      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="images/surily.jpg" alt="">
        <div class="media-body">
          <h5 class="mt-0">Surily</h5>
          I am very impressed by your knowledge sir.
          <div class="media mt-4">
            <img class="d-flex mr-3 rounded-circle" src="images/adya.jpg" alt="">
            <div class="media-body">
              <h5 class="mt-0">Adya M</h5>
              Sir can you please share your contact details with me?
            </div>
          </div>

          <div class="media mt-4">
            <img class="d-flex mr-3 rounded-circle" src="images/anu.jpg" alt="">
            <div class="media-body">
              <h5 class="mt-0">Anubhav Paul</h5>
              You may mail me at anubhav.paul@st.niituniversity.in
            </div>
          </div>

        </div>
      </div>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">







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
