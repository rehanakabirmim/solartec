<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- font awosam cdn  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <header>
    <div class="container-fluid header_part">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-7"></div>
        <div class="col-md-3 top_right_menu text-end">
          <div class="dropdown">
            <button class="btn dropdown-toggle top_right_btn" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <?php
              if (!empty($_SESSION['pic'])) {
                ?>
                <img class="img200" src="uploads/<?= $_SESSION['pic'] ?>" alt="avatar" />
                <?php

              } else {
                ?>
                <img height="100" src="images/avatar.jpg" alt="avatar" />
                <?php

              }

              ?>

              <?= $_SESSION['name']; ?>
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#"><i class="fas fa-user-tie"></i> My Profile</a></li>
              <li><a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Manage Account</a></li>
              <li><a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
          </div>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </header>