<?php
require_once("functions/function.php");
get_header();


?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5" style="background-image: url(img/gallery-1.jpg);">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Our Team</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Our Team</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


<!-- Team Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      <h6 class="text-primary">Team Member</h6>
      <h1 class="mb-4">Experienced Team Members</h1>
    </div>
    <div class="row g-4">
      
    <!-- find all data  -->
    <?php 

$select = "SELECT * FROM team";

$data = mysqli_query($con, $select);

// $data = mysqli_fetch_assoc($datas);

while ($team = mysqli_fetch_assoc($data)) {
# code...

?>
      <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="team-item rounded overflow-hidden">
          <div class="d-flex">
            <img class="img-fluid w-75" src="admin/uploads/<?= $team['member_photo']; ?>" alt="">
            <div class="team-social w-25">
              <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href="https:/youtube.com">
                <i class="<?=$team['member_facebook']?>"></i>
              </a>
              <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href="">
              <!-- fab fa-twitter -->
                <i class="<?=$team['member_twitter']?>"></i>
              </a>
              <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href="">
                <i class="<?=$team['member_instragram']?>"></i>
              </a>
            </div>
          </div>
          <div class="p-4">
            <h5><?=$team['member_name']?></h5>
            <span><?=$team['member_designation']?></span>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</div>
<!-- Team End -->
        

<?php
get_footer();


?>