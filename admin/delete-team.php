<?php
require_once("functions/function.php");
needLogged();


$id=$_GET['d'];
$del="DELETE FROM team WHERE member_id='$id'";
if(mysqli_query($con,$del)){
    header('location: all-team.php');
}
else{
    echo "failed.";
}




?>