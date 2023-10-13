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
                                        <i class="fab fa-gg-circle"></i>All Service Information
                                    </div>  
                                    <div class="col-md-4 card_button_part">
                                        <a href="add-service.php" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add Service</a>
                                    </div>  
                                </div>
                              </div>
                              <div class="card-body">
                                <table class="table table-bordered table-striped table-hover custom_table">
                                  <thead class="table-dark">
                                    <tr>
                                    <th>id</th>
                                      <th>STitle</th>
                                      <th>Sdetails</th>
                                      <th>Icon</th>
                          
                                      <th>Image</th>
                                      <th>Manage</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                 
                                  <?php
                                  $id=1;
                                  
                                        $sel="SELECT * FROM  services  ORDER BY  service_id DESC";
                                        $Q = mysqli_query($con,$sel);
                                        while($data=mysqli_fetch_assoc($Q)){


                                  ?>
                                    <tr>
                                    <td><?php echo $id;  $id++; ?></td>
                                      <td><?= $data['service_title'];?></td>
                                      <td><?=substr($data['service_details'],0,50); ?>...</td>
                                      
                                      <td><?= $data['service_icon'];?></td>
                                      
                                      <td>
                                        <?php if($data['service_image']!=''){?>
                                        <img height="40" class="img200" src="uploads/<?= $data['service_image']; ?>" alt="service"/>
                                        <?php }   else{ ?>
                                      
                                          <img height="40" src="images/avatar.jpg" alt="avatar"/>
                                        <?php } ?>
                                      </td>
                                      <td>
                                          <div class="btn-group btn_group_manage" role="group">
                                            <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="view-service.php?v=<?=$data['service_id'];?>">View</a></li>
                                              <li><a class="dropdown-item" href="edit-service.php?e=<?=$data['service_id'];?>">Edit</a></li>
                                             
                                              <li><a class="dropdown-item" href="delete-service.php?d=<?=$data['service_id'];?>">Delete</a></li>
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