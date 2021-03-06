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

  <title>Blog - About Cats </title>

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
  <h1 class="mt-4 mb-3">About Cats
    <small>("Time spent with cats is never wasted")</small>
  </h1>

  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="home.php">Home</a>
    </li>
    <li class="breadcrumb-item active">Cats</li>
  </ol>

  <div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" src="images/cat3.jpg" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">When your cat bites you</h2>
          <p class="card-text">Cats can’t say, “Hey, I’m good. You can stop petting me now.” So they often let their teeth do the talking. But there are other reasons cats might bite.Cats can’t say, “Hey, stop, I don’t like that anymore,” so they bite or scratch to send that message. If your cat bites when you pet him, pay closer attention to his body language. If the tail is whipping, eyes are dilated or ears go flat, sideways or back, stop! Let him chill before you pet him again.</p>
        </div>
        <div class="card-footer text-muted">
          THURSDAY, APR 11TH, 2019
          <a href="#">BY DR. MARTY BECKER</a>
        </div>
      </div>

      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" src="images/cat2.jpg" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">What to do if your new cat won’t come out of hiding</h2>
          <p class="card-text">Most cat owners have been there: You bring a new cat home, and she hides and won’t come out. What does it mean and what should you do?The best thing you can do is to give her the opportunity to relax and explore her new surroundings at her own pace. Don’t push her by trying to pet her or play with her. Sit in the room quietly, but don’t try to coax her over to you. Right now, she just needs to become accustomed to your scent and presence. You can intrigue her by tossing treats in her direction — without looking at her — or wiggling a long teaser toy that allows her to stalk and play without getting too close to you. Other things that can help, according to the Fear Free Happy Homes blog, include spraying the room with a synthetic feline pheromone or playing cat-specific music that has calming properties.</p>

        </div>
        <div class="card-footer text-muted">
          MONDAY, APR 22ND, 2019
          <a href="#">BY DR. MARTY BECKER</a>
        </div>
      </div>

      <!-- Blog Post -->
      <div class="card mb-4">
        <img class="card-img-top" src="images/cat.jpg" alt="Card image cap">
        <div class="card-body">
          <h2 class="card-title">When cats get cavities</h2>
          <p class="card-text">If your cat is drooling, you’ll want to head for the vet. That’s because she could have something lodged in her mouth or have ingested a toxin. But there’s another likely cause, and it’s one we don’t often think of when it comes to cats: a cavity.</p>
        </div>
        <div class="card-footer text-muted">
          MONDAY, APR 29TH, 2019
          <a href="#">BY DR. MARTY BECKER</a>
        </div>
      </div>


    </div>



  </div>
  <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Veterinary Care 2019</p>
  </div>
  <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
