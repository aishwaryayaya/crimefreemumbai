<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){  //if server method is post then only make a connecion orelse show an error//

  session_start();
 include'connect.php';

  $username=$_POST['username'];
  $password=$_POST['password'];
  $cap=$_POST['captcha'];
  $sql="SELECT * FROM `signup` WHERE user_name='$username'";
  $result=mysqli_query($conn,$sql);
  $num=mysqli_num_rows($result);
  if($username== 'mumbaipolicegov' AND $password=='ajitdoval'){
    header("location:Table_Responsive_v2/index.php");
  }
  else if($num==1){
    while($row=mysqli_fetch_assoc($result)){
      if(password_verify($password,$row['password'])){
        if($cap == $_SESSION['code']){
          $_SESSION['loggedin']=true;
          $_SESSION['username']=$username;
          echo"<script>alert('Logged in')</script>";
          header("location:complaint.php");
        }
        else{
          echo "<script>alert ('Please enter valid captcha')</script>";
        }
      }
      else{
        echo"<script>alert('Passwords donot match')</script>";
      }
    }
  }
  else{
    echo"<script>alert('Invalid credentials')</script>";
  }
  
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mumbai Crime Potral</title>
    <link rel="stylesheet" href="style1.css" />
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <script type="text/javascript">
      (function () {
          var options = {
              call: "223-200445", 
              call_color: "#E74339", 
              call_to_action: "Emergency call", 
              position: "right", 
          };
          var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
          var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
          s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
          var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();
  </script>
  
  <script type="text/javascript">
      (function () {
          var options = {
              whatsapp: "223-200445",
              call_to_action: "Emergency chat ",
              position: "left",
              pre_filled_message: "Welcome to Mumbai police crime potral getting Justice made Faster and Easier .Whatsapp Text or Call for immediate respone.",
          };
          var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
          var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
          s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
          var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
      })();
  </script>
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
         <marquee behavior="scroll" scrollamount="10">For the district of Mumbai a new helpine number has been launched!! Call on 223-200445 for immediate reporting.</marquee>
     </div>
     <div class="mid">
         <ul id=navbar>
             <li><a href="index.html" >Home</a></li>
             <li><a href="crimetypes.html">Crime&nbsp;Types</a></li>
             <li><a href="signup.html">Report&nbsp;Crime</a></li>
             <li><a href="resources.html">Resources</a></li>
             <li><a href="report tracking.html">Report&nbsp;Tracking</a></li>
             <li><a href="contact_us.html">Contact&nbsp;us</a></li>
             <li><a href="helpline.html">Helpline&nbsp;Number</a></li>
         </ul>
     </div>
     </header>
  </head>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form action="login.php" method="post">
        <label>Username</label>
        <div class="inp">
          <input type="text" placeholder="" name="username" />
        </div>
        
        <label>Password</label>
        <div class="inp">
          <input type="password" placeholder="" name="password"/>
        </div>
        <label >Captcha</label>
        <div class="inp">
          <input type="text" name="captcha" id="captcha" >
        </div>
        <div class="inp">
          <img src="captcha.php" alt="">
        </div>
        <div class="inp">
          <input type="submit" value="Submit" />
        </div>
        
      </form>
    </div>
    <p class="para-2">
      Not have an account? <a href="signup.html">Sign Up Here</a>
    </p>
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

