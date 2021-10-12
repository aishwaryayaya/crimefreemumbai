<?php
$server="localhost";
$username="root"; 
$password="";
$database="trip";

$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn){
    
    die("error".mysqli_connect_error());
 }
error_reporting(0);
$name=$_GET['rn'];
$sql="DELETE FROM `crimereport` WHERE `user_name` = '$name'";
$result=mysqli_query($conn,$sql);
if($result){
    echo"<script>alert(Record deleted sucessfully!)</script>";
    header("location:index.php");
}
else{
    echo"<script>alert('ERROR!')</script>";
}


?>