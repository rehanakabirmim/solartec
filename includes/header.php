<?php
// print_r ($_SERVER);
// echo $_SERVER['PHP_SELF'];
$convert = explode('/', $_SERVER['PHP_SELF']); //string k array te convert kora hy explode method er maddhome.
// print_r ($convert);
$page = $convert[2];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Solartec - Renewable Energy Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <!-- Spinner End -->
  <!-- Topbar Start -->
  <div class="container-fluid bg-dark p-0">
    <div class="row gx-0 d-none d-lg-flex">
      <div class="col-lg-7 px-5 text-start">
        <div class="h-100 d-inline-flex align-items-center me-4">
          <small class="fa fa-map-marker-alt text-primary me-2"></small>
          <small>123 Street, New York, USA</small>
        </div>
        <div class="h-100 d-inline-flex align-items-center">
          <small class="far fa-clock text-primary me-2"></small>
          <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
        </div>
      </div>
      <div class="col-lg-5 px-5 text-end">
        <div class="h-100 d-inline-flex align-items-center me-4">
          <small class="fa fa-phone-alt text-primary me-2"></small>
          <small>+012 345 6789</small>
        </div>
        <div class="h-100 d-inline-flex align-items-center mx-n2">
          <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="">
            <i class="fab fa-twitter"></i>
          </a>
          <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a class="btn btn-square btn-link rounded-0" href="">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
      <h2 class="m-0 text-primary">Solartec</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="index.php" class="nav-item nav-link <?php if ($page == 'index.php') {  echo 'active';
                                                                                    }  ?>">Home</a>
                                                      
        <a href="about.php" class="nav-item nav-link <?php if ($page == 'about.php') {echo 'active';
                                                        
                                             } ?>">About</a>
        <a href="service.php" class="nav-item nav-link <?php if ($page == 'service.php') { echo 'active';
                                                         
                                                        } ?> ">Service</a>
        <a href="project.php" class="nav-item nav-link <?php if ($page == 'project.php') {echo 'active';
                                                          
                                                        } ?> ">Project</a>
        <a href="team.php" class="nav-item nav-link <?php if ($page == 'team.php') { echo 'active';
                                                      
                                                    } ?>">Team</a>

        <a href="contact.php" class="nav-item nav-link <?php if ($page == 'contact.php') { echo 'active';
                                                          
                                                        } ?>">Contact</a>
      </div>
      <a href="#" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Get A Quote <i class="fa fa-arrow-right ms-3"></i>
      </a>
    </div>
  </nav>
  <!-- Navbar End -->