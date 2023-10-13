<?php
require_once("functions/function.php");
needLogged();


$id=$_GET['d'];
$del="DELETE FROM banners WHERE ban_id='$id'";
if(mysqli_query($con,$del)){
    header('location: all-banner.php');
}
else{
    echo "failed.";
}




?>