<?php
$con=new mysqli('localhost','root','','trackingdb');
if(!$con){
    die(mysqli_error($con));
}
?>