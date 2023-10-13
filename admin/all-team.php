<?php
require_once("functions/function.php");
needLogged();
if($_SESSION['role']=='1'){


get_header();
get_sitebar();
?>
   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                              <div class="card-header">
                                <div class="row">
                                    <div class="col-md-8 card_title_part">
                                        <i class="fab fa-gg-circle"></i>All Team Information
                                    </div>  
                                    <div class="col-md-4 card_button_part">
                                        <a href="add-team.php" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add Team</a>
                                    </div>  
                                </div>
                              </div>
                              <div class="card-body">
                                <table class="table table-bordered table-striped table-hover custom_table">
                                  <thead class="table-dark">
                                    <tr>
                                    <th>id</th>
                                      <th>Mname</th>
                                      <th>Mdesignation</th>
                                      <th>Facebook</th>
                                      <th>Twitter</th>
                                      <th>Instragram</th>
                          
                                      <th>Image</th>
                                      <th>Manage</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                 
                                  <?php
                                  $id=1;
                                  
                                        $sel="SELECT * FROM  team  ORDER BY  member_id ASC";
                                        $Q = mysqli_query($con,$sel);
                                        while($data=mysqli_fetch_assoc($Q)){


                                  ?>
                                    <tr>
                                    <td><?php echo $id;  $id++; ?></td>
                                      <td><?= $data['member_name'];?></td>
                                      <td><?=substr($data['member_designation'],0,50); ?>...</td>
                                      
                                      <td><?= $data['member_facebook'];?></td>
                                      <td><?= $data['member_twitter'];?></td>
                                      <td><?= $data['member_instragram'];?></td>
                                      
                                      <td>
                                        <?php if($data['member_photo']!=''){?>
                                        <img height="40" class="img200" src="uploads/<?= $data['member_photo']; ?>" alt="service"/>
                                        <?php }   else{ ?>
                                      
                                          <img height="40" src="images/avatar.jpg" alt="avatar"/>
                                        <?php } ?>
                                      </td>
                                      <td>
                                          <div class="btn-group btn_group_manage" role="group">
                                            <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="view-team.php?v=<?=$data['member_id'];?>">View</a></li>
                                              <li><a class="dropdown-item" href="edit-team.php?e=<?=$data['member_id'];?>">Edit</a></li>
                                             
                                              <li><a class="dropdown-item" href="delete-team.php?d=<?=$data['member_id'];?>">Delete</a></li>
                                            </ul>
                                          </div>
                                      </td>
                                    </tr>
                                    
                                    <?php }?>
                                  </tbody>
                                </table>
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