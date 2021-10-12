
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">

						<div class="row header">
							<div class="cell">
								First Name
							</div>
							<div class="cell">
								Complaint
							</div>
							<div class="cell">
								Status
							</div>
							<div class="cell">
								Report
							</div>
							<div class="cell">
								Delete
							</div>
						</div>
						<?php

                        $server="localhost";
                        $username="root"; 
                        $password="";
                        $database="trip";

                        $conn=mysqli_connect($server,$username,$password,$database);
                        if(!$conn){
    
                            die("error".mysqli_connect_error());
                        }

                        $sql="SELECT * FROM `crimereport`";
                        $result=mysqli_query($conn,$sql);
                        $num=mysqli_num_rows($result);
                        while($res=mysqli_fetch_array($result)){

                       ?>

						   <div class="row">
							  <div class="cell" data-title="Full Name">
								  <?php echo $res[1] ?>
							  </div>
							<div class="cell" data-title="Age">
								<?php echo $res[9] ?>
							</div>
							<div class="cell" data-title="Job Title">
								<a href='status.php?sn=<?php echo $res[0];?>'><?php echo $res[12]?></a>
							</div>
							<div class="cell" data-title="Location">
								<a href='view.php?un=<?php echo $res[0]; ?>'>View</a>
							</div>
							<div class="cell" data-title="Operation">
								<a href='delete.php?rn=<?php echo $res[0]; ?>'>Delete</a>
							</div>

						   </div>
						
						<?php
                        }
						?>
						
							
						
						

					</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>