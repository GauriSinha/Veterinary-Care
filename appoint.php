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
    <meta charset="UTF-8">
    <title>Title</title>
    
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="home.php">Veterinarian</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
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
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="well-block">
                    <div class="well-title">
                        <h2>Questions? Book an Appointment</h2>
                    </div>
                    <form>
                        <!-- Form start -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">Name</label>
                                    <input id="name" name="name" type="text" placeholder="Name"
                                        class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="email">Email</label>
                                    <input id="email" name="email" type="text" placeholder="E-Mail"
                                        class="form-control input-md">
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="date">Preferred Date</label>
                                    <input id="date" name="date" type="text" placeholder="Preferred Date"
                                        class="form-control input-md">
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="time">Preferred Time</label>
                                    <select id="time" name="time" class="form-control">
                                        <option value="8:00 to 9:00">8:00 to 9:00</option>
                                        <option value="9:00 to 10:00">9:00 to 10:00</option>
                                        <option value="10:00 to 1:00">10:00 to 1:00</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Select Basic -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="appointmentfor">Appointment For</label>
                                    <select id="appointmentfor" name="appointmentfor" class="form-control">
                                        <option value="Service#1">Service#1</option>
                                        <option value="Service#2">Service#2</option>
                                        <option value="Service#3">Service#3</option>
                                        <option value="Service#4">Service#4</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button id="singlebutton" name="singlebutton" class="btn btn-default btn-primary">Make An
                                        Appointment</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- form end -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="well-block">
                    <div class="well-title">
                        <h2>Why Appointment with Us</h2>
                    </div>
                    <div class="feature-block">
                        <div class="feature feature-blurb-text">
                            <h4 class="feature-title">24/7 Hours Available</h4>
                            <div class="feature-content">
                                <p>Our Service is available 24/7 and you will get fast replies.</p>
                            </div>
                        </div>
                        <div class="feature feature-blurb-text">
                            <h4 class="feature-title">Experienced Staff Available</h4>
                            <div class="feature-content">
                                <p>With our Experienced Staff, we continue to serve our customers efficiently. </p>
                            </div>
                        </div>
                        <div class="feature feature-blurb-text">
                            <h4 class="feature-title">Low Price & Fees</h4>
                            <div class="feature-content">
                                <p>Our prices and fees are very much affordable and we can also offer discount under certain situations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>