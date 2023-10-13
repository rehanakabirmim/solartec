<?php
require_once("functions/function.php");
needLogged();
if($_SESSION['role']=='1'){
get_header();
get_sitebar();

// old service find here 
$id = $_GET['e'];
$selupd = "SELECT * FROM team WHERE member_id = $id";
$Q = mysqli_query($con, $selupd);
$data = mysqli_fetch_assoc($Q);


if (!empty($_POST)) {
  // print_r($_POST);
  $Mname = $_POST['Mname'];
  $Mdesignation = $_POST['Mdesignation'];
  $facebook= $_POST['facebook'];
  $twitter= $_POST['twitter'];
  $instragram= $_POST['instragram'];
  

  $image=$_FILES['pic'];




  $update = "UPDATE team SET member_name='$Mname',member_designation=' $Mdesignation',member_facebook='$facebook',member_twitter='$twitter',member_instragram='$instragram' WHERE member_id='$id'";
  if (!empty($Mname)) {
    if (!empty($Mdesignation)) {
     
        if (mysqli_query($con, $update)) {

          // echo " successfully update user information.";

          if ($image['name'] != '') {
            
            $imageName = 'team_' . time() . '_' . rand(100000, 1000000) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
            $updimage = "UPDATE team SET member_photo='$imageName' WHERE member_id='$id'";
            if (mysqli_query($con, $updimage)) {
              move_uploaded_file($image['tmp_name'], 'uploads/' . $imageName);
            }
              header('Location:view-team.php?v=' . $id);
            } else {
              "Member image update failed";
            }
          
          header('Location:view-team.php?v=' . $id);
        } else {
          echo "oops!Team information update failed!";
        }
      
    } else {
      echo "Please enter Team details.";
    }
  
  } else {
    echo "Please enter Team titile.";
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
              <i class="fab fa-gg-circle"></i>UPDATE Team INFORMATION
            </div>
            <div class="col-md-4 card_button_part">
              <a href="all-team.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Team</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Mname<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" id="" name="Mname" value="<?= $data['member_name']; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Mdesignation:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" id="" name="Mdesignation" value="<?= $data['member_designation']; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Facebook<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" id="" name="facebook" value="<?= $data['member_facebook']; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Twitter<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" id="" name="twitter" value="<?= $data['member_twitter']; ?>">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-3 col-form-label col_form_label">Instragram<span class="req_star">*</span>:</label>
            <div class="col-sm-7">
              <input type="text" class="form-control form_control" id="" name="instragram" value="<?= $data['member_instragram']; ?>">
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
          <?php if ($data['member_photo'] != '') { ?>
            <img height="50" class="img200" src="uploads/<?= $data['member_photo']; ?>" alt="team" />
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