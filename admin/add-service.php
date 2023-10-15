<?php
require_once('functions/function.php');
needLogged();
if($_SESSION['role']=='1'){
get_header();
get_sitebar();


if(!empty($_POST)){
  // print_r($_POST);
  $Stitle = $_POST['Stitle'];
  $Sdetails = $_POST['Sdetails'];
  $icon = $_POST['icon'];
  $image=$_FILES['pic'];
  $imageName = '';

  if($image['name']!=''){
  $imageName='service_'.time().'_'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }

  $insert = "INSERT INTO `services`(`service_title`, `service_details`, `service_icon`, `service_image`) 
  VALUES ('$Stitle','$Sdetails','$icon','$imageName')";

 if(!empty($Stitle)){
      if(mysqli_query($con,$insert)){
        move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
        echo "Service upload success.";
      }else{
        echo "Service upload failed.";
      }
    }else{
      echo "Please enter Service title";
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
                                            <i class="fab fa-gg-circle"></i>Service Registration
                                        </div>  
                                        <div class="col-md-4 card_button_part">
                                            <a href="all-service.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Service</a>
                                        </div>  
                                    </div>
                                  </div>
                                  <div class="card-body">
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Service Title<span class="req_star">*</span>:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="Stitle">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Service Details</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="Sdetails">
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

                                              <i class="<?= 'fa' . ' ' . $font ?>" value="<?= 'fa' . ' ' . $font ?>" onclick="showValue('<?= 'fa' . ' ' . $font ?>')"></i>
                                          <?php
                                            }

                                          ?>
                                        </div>
                                      </div>
                                     
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Service Image</label>
                                        <div class="col-sm-7">
                                          <input type="File" class="form-control form_control" id="" name="pic">
                                        </div>
                                      </div>

                                      
                                  <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark">UPLOAD</button>
                                  </div>  
<?php
  get_footer();
  }else{
    header('Location: index.php');
  }
?>
<script>

function showValue(a){

 $font_class = a;

 $service_icon = document.getElementById('service_icon');

 $service_icon.setAttribute('value', $font_class)
 document.getElementById('service_data_update_btn').style.display = "block";

}

</script>


                                        