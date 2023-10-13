<?php
require_once("functions/function.php");
needLogged();


$id=$_GET['d'];
$del="DELETE FROM contact WHERE con_id='$id'";
if(mysqli_query($con,$del)){
    header('location: all-message.php');
}
else{
    echo "failed.";
}




?>