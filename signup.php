<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){  //if server method is post then only make a connecion orelse show an error//

  $server="localhost";
  $username="root"; 
  $password="";
  $database="trip";

  $conn=mysqli_connect($server,$username,$password,$database);
  if(!$conn){
    
    die("error".mysqli_connect_error());
  }
  //get the inputs from the form
  $error=false;
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $phoneno=$_POST['phoneno'];
  $email=$_POST['email'];
  $passw=$_POST['passw'];
  $cpassw=$_POST['cpassw'];
  $existsname=false;
  $existsql="SELECT * FROM `signup` WHERE user_name='$firstname'";
  $result=mysqli_query($conn,$existsql);
  $numexist=mysqli_num_rows($result);
  if($numexist!=0){
    echo"<script>alert('Username already exists')</script>";
  }
  else{
    if($passw == $cpassw){
      $hash=password_hash($passw,PASSWORD_DEFAULT);
      $sql="INSERT INTO `signup` ( `user_name`, `lastname`, `phoneno`, `email`, `password`) VALUES ( '$firstname', '$lastname', '$phoneno', '$email', '$hash')";
      $result=mysqli_query($conn,$sql);
      if(!$result){
        echo"Values cannot be inserted";
      }
      else{
        
        echo"<script>alert('Sucessfully inserted')</script>";
      }
    }
    else{
      echo"<script>alert('Passwords donot match!')</script>";
    }
  }
}
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mumbai Crime Portal</title>
  <link rel="stylesheet" href="style1.css" />
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
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
      <marquee behavior="scroll" scrollamount="10">For the district of Mumbai a new helpine number has been launched!!
        Call on 223-200445 for immediate reporting.</marquee>
    </div>
    <div class="mid">
      <ul id=navbar>
        <li><a href="index.html">Home</a></li>
        <li><a href="crimetypes.html">Crime&nbsp;Types</a></li>
        <li><a href="signup.php">Report&nbsp;Crime</a></li>
        <li><a href="resources.html">Resources</a></li>
        <li><a href="report tracking.php">Report&nbsp;Tracking</a></li>
        <li><a href="contact_us.html">Contact&nbsp;us</a></li>
        <li><a href="helpline.html">Helpline&nbsp;Number</a></li>
      </ul>
    </div>
  </header>
</head>

<body>
  <div class="signup-box">
    <h1>Sign Up</h1>
    <h4>It's free and only takes a minute</h4>
    <form action="signup.php" method="post">
      <label>User Name</label>
      <input type="text" placeholder="" name="firstname" />
      <label>Full Name</label>
      <input type="text" placeholder="" name="lastname" />
      <label>Mobile No.</label>
      <input type="text" placeholder="" maxlength="10" name="phoneno" />
      <label>Email</label>
      <input type="email" placeholder="" name="email" />
      <label>Password</label>
      <input type="password" placeholder="" name="passw" />
      <label>Confirm Password</label>
      <input type="password" placeholder="" name="cpassw" />
      <input type="submit" value="Submit" />
    </form>
    <p class="para-2">
      Already have an account? <a href="login.php">Login here</a>
    </p>
  </div>
  <section id="contact">
    <h1 class="h-secondary" style="text-align: center;">Feedback</h1>
    <div id="contact-box">
      <form action="">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" placeholder="Enter your name">
        </div>
        <div class="form-group">
          <label for="Phone number">Phone number</label>
          <input type="text" name="phone no" id="phone no" placeholder="Enter your phone no.">
        </div>
        <div class="form-group">
          <label for="name">Feedback</label>
          <textarea name="feedback" id="feedback" cols="30" rows="10"></textarea>
        </div>
        <div class="btn1">
          <input type="button" value="Submit" href="complaint.html" />
        </div>
      </form>
    </div>
  </section>
</body>
<footer>
  <div class="center">
    Copyright &copy; 2021 Mumbai Police |Developed by: Borsbeforecodes
  </div>
</footer>
</body>

</html>