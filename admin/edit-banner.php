<?php
require_once("functions/function.php");
needLogged();
if($_SESSION['role']=='1'){
get_header();
get_sitebar();
$id = $_GET['e'];
$selupd = "SELECT * FROM banners WHERE ban_id = $id";
$Q = mysqli_query($con, $selupd);
$data = mysqli_fetch_assoc($Q);

if (!empty($_POST)) {
  // print_r($_POST);
  $title = $_POST['title'];
  $subtitle = $_POST['subtitle'];
  $btn = $_POST['btn'];
  $url = $_POST['url'];
 
  $image=$_FILES['pic'];

  $update = "UPDATE banners SET ban_title='$title',ban_subtitle='$subtitle',ban_button='$btn',ban_url='$url' WHERE ban_id='$id'";
  if (!empty($title)) {
    if (!empty($subtitle )) {

        if (mysqli_query($con, $update)) {

          // echo " successfully update user information.";
          if ($image['name'] != '') {
            $imageName = 'banner_' . time() . '_' . rand(100000, 1000000) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
            $updimage = "UPDATE banners SET ban_image='$imageName' WHERE ban_id='$id'";
            if (mysqli_query($con, $updimage)) {
              move_uploaded_file($image['tmp_name'], 'uploads/' . $imageName);
            }
              header('Location:view-banner.php?v=' . $id);
            } else {
              "Banner image update failed";
            }
          
          header('Location:view-banner.php?v=' . $id);
        } else {
          echo "oops! Banner information update failed!";
        }
   
    } else {
      echo "Please enter banner subtitle.";
    }
  
  } else {
    echo "Please enter banner title.";
  }
  }



?>



<div class="row">
  <div class="col-md-12 ">
    <form method="POST" action="" enctype="multipart/form-data">
      <div class="card mb-3">
        <div class="card-header">
          <div class="row">
            <div class="col-md-8 card_title_part">
              <i class="fab fa-gg-circle"></i>UPDATE Banner INFORMATION
            </div>
            <div class="col-md-4 card_button_part">
              <a href="all-banner.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Banner</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Title<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" id="" name="title" value="<?= $data['ban_title']; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Subtitle:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" id="" name="subtitle" value="<?= $data['ban_subtitle']; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Button<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
          <input type="text" class="form-control form_control" id="" name="btn" value="<?= $data['ban_button']; ?>" >
             </div>
          </div>  
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Url<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" id="" name="url" value="<?= $data['ban_url']; ?>">
            </div>
          </div>
          


         
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
            <div class="col-sm-4">
              <input type="file" class="form-control form_control" id="" name="pic">
            </div>
          </div>
        </div>
        <div class="col-md-2 offset-5">
          <?php if ($data['ban_image'] != '') { ?>
            <img height="50" class="img200" src="uploads/<?= $data['ban_image']; ?>" alt="banner" />
          <?php } else { ?>

            <img height="50" src="images/avatar.jpg" alt="avatar" />
          <?php } ?>
        </div>
        <div class="card-footer text-center">
          <button type="submit" class="btn btn-sm btn-dark">UPDATE</button>
        </div>
        <?php
        get_footer();
      }else{
        header('Location:index.php');
      }
        ?>