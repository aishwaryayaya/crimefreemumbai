<?php

if(isset($_POST['submit'])){
  include'connect.php';
  $username=$_POST['username'];
  $fullname=$_POST['fullname'];
  $date_complain=$_POST['date_complaint'];
  $address=$_POST['address'];
  $address2=$_POST['address2'];
  $complaint_type=$_POST['complaint_type'];
  $zipcode=$_POST['post_code'];
  $police_station=$_POST['police_station'];
  $date_inci=$_POST['date_inci'];
  $inci_loc=$_POST['inc_loc'];
  $complain_details=$_POST['details'];

  //INSERT INTO `crimereport` (`user_name`, `fullanme`, `date_complaint`, `address`, `address2`, `city`, `postal_code`, `police_station`, `inci_loc`, `complaint_type`, `date_inci`, `complaint_details`, `status`) VALUES ('Rishika', 'Rishika Agarwal', '11-10-2021', 'Thisi saddfess1', 'This is adress2', 'Mumbai', '421204', 'Powai', 'Lcationof incident', 'Eve teasing', '20-6-2021', 'okokokok', 'Not checked');
  $sql="INSERT INTO `crimereport` (`user_name`, `fullanme`, `date_complaint`, `address`, `address2`, `city`, `postal_code`, `police_station`, `inci_loc`, `complaint_type`, `date_inci`, `complaint_details`,`status`) VALUES ('$username', '$fullname', '$date_complain', '$address', '$address2', 'Mumbai', '$zipcode', '$police_station', '$inci_loc', '$complaint_type', '$date_inci', '$complain_details','Not checked')";
  $_result=mysqli_query($conn,$sql);
  if($_result){
    echo"<script>alert('Inserted succesfully!')</script>";
  }
  else{
    echo"<script>alert('Failure')</script>";
  }
}
?>





<!DOCTYPE html>
<html>

<head>
  <title>Mumbai Crime Portal</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="style2.css">
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
        <li><a href="report tracking.html">Map&nbsp;Tracking</a></li>
        <li><a href="#">Contact&nbsp;us</a></li>
        <li><a href="helpline.html">Helpline&nbsp;Number</a></li>
      </ul>
    </div>
    <style>
      html,
      body {
        min-height: 100%;
      }

      body,
      div,
      form,
      input,
      select,
      p {
        padding: 0;
        margin-top: 0;
        outline: none;
        font-family: Roboto, Arial, sans-serif;
        font-size: 14px;
        color: rgb(75, 74, 74);
        line-height: 20px;
      }

      h1 {
        margin: 15px 0;
        font-weight: 400;
      }

      h4 {
        margin-bottom: 4px;
      }

      .testbox {
        display: flex;
        justify-content: center;
        align-items: center;
        height: inherit;
        padding: 3px;
      }

      form {
        width: 100%;
        padding: 20px;
        background: #fff;
        box-shadow: 0 2px 5px #ccc;
      }

      input,
      select,
      textarea {
        width: 100%;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
      }

      input {
        width: calc(100% - 10px);
        padding: 5px;
      }

      input:hover,
      textarea:hover,
      select:hover {
        outline: none;
        border: 1px solid #095484;
      }

      select {
        padding: 7px 0;
        background: transparent;
      }

      textarea {
        margin-bottom: 3px;
      }

      .item {
        position: relative;
        display: flex;
        flex-direction: column;
        margin: 10px 0;
      }

      input[type="date"]::-webkit-inner-spin-button {
        display: none;
      }

      .item i,
      input[type="date"]::-webkit-calendar-picker-indicator {
        position: absolute;
        font-size: 20px;
        color: #a9a9a9;
      }

      .item i {
        left: 94%;
        top: 30px;
        z-index: 1;
      }

      [type="date"]::-webkit-calendar-picker-indicator {
        left: 93%;
        z-index: 2;
        opacity: 0;
        cursor: pointer;
      }

      .street,
      .desired-outcome-item,
      .complaint-details-item {
        display: flex;
        flex-wrap: wrap;
      }

      .street input {
        margin-bottom: 10px;
      }

      small {
        display: block;
        line-height: 16px;
        opacity: 0.7;
      }

      .btn-block {
        margin-top: 20px;
        text-align: center;
      }

      button {
        width: 150px;
        padding: 10px;
        border: none;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        background-color: #095484;
        font-size: 16px;
        color: #fff;
        cursor: pointer;
      }

      button:hover {
        background-color: #0666a3;
      }

      @media (min-width: 568px) {
        input {
          width: calc(35% - 20px);
          margin: 0 0 0 8px;
        }

        select {
          width: calc(50% - 8px);
          margin: 0 0 10px 8px;
        }

        .item {
          flex-direction: row;
          align-items: center;
        }

        .item p {
          width: 30%;
        }

        .item i {
          left: 61%;
          top: 25%;
        }

        [type="date"]::-webkit-calendar-picker-indicator {
          left: 60%;
        }

        .street,
        .complaint-details-item {
          width: 70%;
        }

        .street input {
          width: calc(50% - 20px);
        }

        .street .street-item {
          width: 100%;
        }

        .address p,
        .complaint-details p {
          align-self: flex-start;
          margin-top: 6px;
        }
        .complaint-details-item {
          margin-left: 12px;
        }

        textarea {
          width: calc(100% - 6px);
        }
      }
    </style>


</head>

<body>
   <div class="testbox">
    <form action="complaint.php" method="post">
      <h1>Complaint Form</h1>
      <p>Please send us details about the incident you would like to report. Our Cyber Police Cell will analyze your
        complaint and take the appropriate measures in order that the reported situation will not occur at any other
        time in the future.</p>
      <hr />
      <div class="item">
        <p>Date of complaint</p>
        <input type="date" name="date_complaint" required />
        <i class="fas fa-calendar-alt"></i>
      </div>
      <div class="item">
        <p>Name</p>
        <input type="text" name="username" placeholder="Username" />
        <input type="text" name="fullname" placeholder="fullname" />
      </div>
      <div class="item">
        <p>Email</p>
        <input type="text" name="email" />
      </div>
      <div class="item address">
        <p>Address</p>
        <div class="street">
          <input class="street-item" type="text" name="address" placeholder="Street address" />
          <input class="street-item" type="text" name="address2" placeholder="Street addres line 2" />
          <input type="text" name="city" placeholder="City" />
          <select name="complaint_type">
            <option value="">Complaint type</option>
            <option value="Cyber crime">Cyber crime</option>
            <option value="Domestic violence">Domestic violence</option>
            <option value="Sexual Assault">Sexual Assault</option>
            <option value="Rape">Rape</option>
            <option value="Eve teasing">Eve teasing</option>
            <option value="Elderly complaint">Elderly complaint</option>
            <option value="Child abuse">Child abuse</option>
            <option value="Oline Fraud">Online Fraud</option>
          </select>
          <input type="text" name="post_code" placeholder="Postal / zip code" />
          <select name="police_station">
            <option value="">Police station</option>
            <option value="Airoli">Airoli</option>
            <option value="Santacruz">Santacruz</option>
            <option value="Churchgate">Churchgate</option>
            <option value="Bandra">Bandra</option>
            <option value="Powai">Powai</option>
            <option value="Khar">Khar</option>
            <option value="Borivali">Borivali</option>
            <option value="BKC">BKC</option>
            <option value="Dadar">Dadar</option>
          </select>
        </div>
      </div>
      <div class="item">
        <p>Date of the reported incident</p>
        <input type="date" name="date_inci" required />
        <i class="fas fa-calendar-alt"></i>
      </div>
      <div class="item location">
        <p>Incident location</p>
        <input type="text" name="inc_loc" />
      </div>
      <div class="item complaint-details">
        <p>Complaint details</p>
        <div class="complaint-details-item">
          <input type="text" name="details" >
        </div>
      </div>
      <input type="checkbox" name="x[]" value="h" />
      <small>By signing you declare that all information you have entered is truthful and accurate.</small>
      <div class="btn-block">
        <button type="submit"name="submit" href="/">Send</button>
      </div>
    </form>
  </div>
</body>

</html>