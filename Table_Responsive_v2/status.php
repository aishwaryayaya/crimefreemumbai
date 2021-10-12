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
$username=$_GET['sn'];
$sql="SELECT * FROM `crimereport` WHERE user_name='$username';";
$result=mysqli_query($conn,$sql);
$num=mysqli_fetch_array($result);
if($result){
    echo"<script>alert('Welcome')</script>";
}
$que="UPDATE `crimereport` SET `status` = 'In progress' WHERE `crimereport`.`user_name` = '$username';";
    $var=mysqli_query($conn,$que);
    if($var){
        echo"<script>alert('Updated')</script>";

    
    }
    else{
        echo"<script>alert('ERROR')</script>";
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="view.css">
</head>
<body>
    <h1>REPORT</h1>
    <div class="maindiv">
        
        <div>
            <h2>Full Name:</h2>
            <span><?php echo $num[0] ?></span>
        </div>

        <div>
            <h2>Date Of Complaint:</h2>
            <span><?php echo $num[2] ?></span>
        </div>

        <div>
            <h2>Type Of Complaint:</h2>
            <span><?php echo $num[9] ?></span>
        </div>

        <div>
            <h2>Address:</h2>
            <span><?php echo $num[3] ?>
            <?php echo $num[4] ?>
            </span>
        </div>

        <div>
            <h2>Pincode:</h2>
            <span><?php echo $num[6] ?></span>
        </div>

        <div>
            <h2>Date Of Reported Incident:</h2>
            <span><?php echo $num[10] ?></span>
        </div>

        <div>
            <h2>Incident Location:</h2>
            <span><?php echo $num[8] ?></span>
        </div>

        <div>
            <h2>Complaint Details:</h2>
            <span><?php echo $num[11] ?></span>
        </div>
    </div>
</body>
</html>