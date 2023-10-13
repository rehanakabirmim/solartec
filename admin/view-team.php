<?php
require_once("functions/function.php");
needLogged();
if($_SESSION['role']=='1'){
get_header();
get_sitebar();
$id = $_GET['v'];
$sel="SELECT * FROM team  WHERE member_id = $id";
$Q =mysqli_query($con , $sel);
$data=mysqli_fetch_assoc($Q);




?>
  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                              <div class="card-header">
                                <div class="row">
                                    <div class="col-md-8 card_title_part">
                                        <i class="fab fa-gg-circle"></i>View Team Information
                                    </div>  
                                    <div class="col-md-4 card_button_part">
                                        <a href="all-team.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Team</a>
                                    </div>  
                                </div>
                              </div>
                              <div class="card-body">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <table class="table table-bordered table-striped table-hover custom_view_table">
                                          <tr>
                                            <td>Mname</td>  
                                            <td>:</td>  
                                            <td><?= $data['member_name']?></td>  
                                          </tr>
                                          <tr>
                                            <td>Mdesignation</td>  
                                            <td>:</td>  
                                            <td><?= $data['member_designation']?></td>  
                                          </tr>
                                          <tr>
                                            <td>Facebook</td>  
                                            <td>:</td>  
                                            <td><?= $data['member_facebook']?></td>  
                                          </tr>
                                          
                                          
                                          <tr>
                                            <td><table>Twitter</table></td>  
                                            <td>:</td>  
                                            <td><?= $data['member_twitter']?></td>  
                                          </tr>
                                          <tr>
                                            <td>Instragram</td>  
                                            <td>:</td>  
                                            <td><?= $data['member_instragram']?></td>  
                                          </tr>
                                          <tr>
                                            <td>Photo</td>  
                                            <td>:</td>  
                                            <td>
                                            <?php if($data['member_photo']!=''){?>
                                            <img height="100" class="img200" src="uploads/<?= $data['member_photo']; ?>" alt="team"/>
                                            <?php }  else{ ?>
                                      
                                            <img height="100" src="images/avatar.jpg" alt="avatar"/>
                                            <?php } ?>
                                            </td>  
                                          </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                              </div>
                              <div class="card-footer">
                                <div class="btn-group" role="group" aria-label="Button group">
                                  <button type="button" class="btn btn-sm btn-dark">Print</button>
                                  <button type="button" class="btn btn-sm btn-secondary">PDF</button>
                                  <button type="button" class="btn btn-sm btn-dark">Excel</button>
                                </div>
                              </div>  
<?php
get_footer();
}else{
  header('Location:index.php');
}
?>                                            