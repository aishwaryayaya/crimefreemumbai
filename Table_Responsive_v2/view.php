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
$username=$_GET['un'];
$sql="SELECT * FROM `crimereport` WHERE user_name='$username';";
$result=mysqli_query($conn,$sql);
$num=mysqli_fetch_array($result);
if($result){
    echo"<script>alert('Welcome')</script>";
}
else{
    echo"ERROR!";
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="view.css">
    <link rel="stylesheet" type="text/css" href="css/dup.css">
</head>
<body>
    <header>
        <div class=left>
            <img src="pictures/Mumbai-police.jpg" alt="Mumbai police">
        </div>
        <div class=name>
            <span>Crime free Mumbai</span>
        </div>
        <div class=right>
            <img src="pictures/Digital india.jpg" alt="Digital_India">
        </div>
        <div class=imp>
            <marquee behavior="scroll" scrollamount="10">For the district of Mumbai a new helpine number has been
                launched!! Call on 223-200445 for immediate reporting.</marquee>
        </div>
        <div class="mid">
            <ul id=navbar>
                <li><a href="#">Home</a></li>
                <li><a href="crimetypes.html">Crime&nbsp;Types</a></li>
                <li><a href="signup1.php">Report&nbsp;Crime</a></li>
                <li><a href="#">Resources</a></li>
                <li><a href="#">Map&nbsp;Tracking</a></li>
                <li><a href="#">Contact&nbsp;us</a></li>
                <li><a href="helpline.html">Helpline&nbsp;Number</a></li>
            </ul>
        </div>
    </header>
    <h1>REPORT</h1>
    <div class="maindiv">
        <div class="info">
            <h2>Full Name:</h2>
            <span><?php echo $num[0] ?></span>
        </div>

        <div class="info">
            <h2>Date Of Complaint:</h2>
            <span><?php echo $num[2] ?></span>
        </div>

        <div class="info">
            <h2>Type Of Complaint:</h2>
            <span><?php echo $num[9] ?></span>
        </div>

        <div class="info">
            <h2>Address:</h2>
            <span><?php echo $num[3] ?>
            <?php echo $num[4] ?>
            </span>
        </div>

        <div class="info">
            <h2>Pincode:</h2>
            <span><?php echo $num[6] ?></span>
        </div>

        <div class="info">
            <h2>Date Of Reported Incident:</h2>
            <span><?php echo $num[10] ?></span>
        </div>

        <div class="info">
            <h2>Incident Location:</h2>
            <span><?php echo $num[8] ?></span>
        </div>

        <div class="info">
            <h2>Complaint Details:</h2>
            <span><?php echo $num[11] ?></span>
        </div>
    </div>
</body>
</html>