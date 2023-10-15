<?php
require_once("functions/function.php");
needLogged();
if ($_SESSION['role'] == '1') {
  get_header();
  get_sitebar();

  // old service find here 
  $id = $_GET['e'];
  $selupd = "SELECT * FROM services WHERE service_id = $id";
  $Q = mysqli_query($con, $selupd);
  $data = mysqli_fetch_assoc($Q);


  if (!empty($_POST)) {
    // print_r($_POST);
    $Stitle = $_POST['Stitle'];
    $Sdetails = $_POST['Sdetails'];
    $icon = $_POST['icon'];

    $image = $_FILES['pic'];




    $update = "UPDATE services SET service_title=' $Stitle',service_details='$Sdetails',service_icon='$icon' WHERE service_id='$id'";
    if (!empty($Stitle)) {
      if (!empty($Sdetails)) {

        if (mysqli_query($con, $update)) {

          // echo " successfully update user information.";

          if ($image['name'] != '') {

            $imageName = 'service_' . time() . '_' . rand(100000, 1000000) . '.' . pathinfo($image['name'], PATHINFO_EXTENSION);
            $updimage = "UPDATE services SET service_image='$imageName' WHERE service_id='$id'";
            if (mysqli_query($con, $updimage)) {
              move_uploaded_file($image['tmp_name'], 'uploads/' . $imageName);
            }
            header('Location:view-service.php?v=' . $id);
          } else {
            "Service image update failed";
          }

          header('Location:view-service.php?v=' . $id);
        } else {
          echo "oops!Service information update failed!";
        }

      } else {
        echo "Please enter service details.";
      }

    } else {
      echo "Please enter service titile.";
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
                <i class="fab fa-gg-circle"></i>UPDATE SERVICE INFORMATION
              </div>
              <div class="col-md-4 card_button_part">
                <a href="all-service.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Service</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Stitle<span class="req_star">*</span>:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="" name="Stitle"
                  value="<?= $data['service_title']; ?>">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Sdetails:</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="" name="Sdetails"
                  value="<?= $data['service_details']; ?>">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label">Service Icon</label>
              <div class="col-sm-7">
                <input type="text" class="form-control form_control" id="service_icon" name="icon">
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-3 col-form-label col_form_label"></label>

              <div class="col-sm-7" style="height: 100px; overflow: scroll;">
                <?php
                require_once('all_font_class.php');

                foreach ($fonts as $font) {
                  ?>

                  <i class="<?= 'fa' . ' ' . $font ?>" value="<?= 'fa' . ' ' . $font ?>"
                    onclick="showValue('<?= 'fa' . ' ' . $font ?>')"></i>
                  <?php
                }

                ?>
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
            <?php if ($data['service_image'] != '') { ?>
              <img height="50" class="img200" src="uploads/<?= $data['service_image']; ?>" alt="service" />
            <?php } else { ?>

              <img height="50" src="images/avatar.jpg" alt="avatar" />
            <?php } ?>
          </div>
          <div class="card-footer text-center">
            <button type="submit" class="btn btn-sm btn-dark">UPDATE</button>
          </div>
          <?php
          get_footer();
} else {
  header('Location:index.php');
}
?>

        <script>

          function showValue(a) {

            $font_class = a;

            $service_icon = document.getElementById('service_icon');

            $service_icon.setAttribute('value', $font_class)
            document.getElementById('service_data_update_btn').style.display = "block";

          }

        </script>