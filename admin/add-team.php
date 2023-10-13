<?php
require_once('functions/function.php');
needLogged();
if($_SESSION['role']=='1'){
get_header();
get_sitebar();


if(!empty($_POST)){
  // print_r($_POST);
  $Mname = $_POST['Mname'];
  $Mdesignation = $_POST['Mdesignation'];
  $facebook= $_POST['facebook'];
  $twitter= $_POST['twitter'];
  $instragram= $_POST['instragram'];
  

  $image=$_FILES['pic'];
  $imageName = '';

  if($image['name']!=''){
  $imageName='team_'.time().'_'.rand(100000,1000000).'.'.pathinfo($image['name'],PATHINFO_EXTENSION);
  }

  $insert ="INSERT INTO `team`(`member_name`, `member_designation`, `member_facebook`, `member_twitter`, `member_instragram`, `member_photo`) VALUES ('$Mname','$Mdesignation','$facebook',' $twitter','$instragram','$imageName')";
 if(!empty($Mname)){
      if(mysqli_query($con,$insert)){
        move_uploaded_file($image['tmp_name'],'uploads/'.$imageName);
        echo "Team upload success.";
      }else{
        echo "Team upload failed.";
      }
    }else{
      echo "Please enter Teamtitle";
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
                                            <i class="fab fa-gg-circle"></i>Team Registration
                                        </div>  
                                        <div class="col-md-4 card_button_part">
                                            <a href="all-team.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Team</a>
                                        </div>  
                                    </div>
                                  </div>
                                  <div class="card-body">
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Member Name<span class="req_star">*</span>:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="Mname">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Member Designation</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="Mdesignation">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Facebook</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="facebook">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Twitter</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="twitter">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Instragram</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="instragram">
                                        </div>
                                      </div>
                                     
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Member Image</label>
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