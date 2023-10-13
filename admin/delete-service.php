<?php
require_once("functions/function.php");
needLogged();


$id=$_GET['d'];
$del="DELETE FROM services WHERE service_id='$id'";
if(mysqli_query($con,$del)){
    header('location: all-service.php');
}
else{
    echo "failed.";
}




?>