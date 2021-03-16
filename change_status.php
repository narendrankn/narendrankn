<?php  //Start the Session
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="amcdb";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
# $query1 = "SELECT Fullname FROM `userdatabase` where username = .$_SESSION['username'] ";

#$query1 = "SELECT Fullname FROM `userdatabase`  WHERE username='$username';
# $result1 = mysqli_query($con, $query1) or die(mysqli_error($con));
 #$emp=mysqli_fetch_array($result1, MYSQLI_ASSOC);
#echo "<a style='float:right;'>";
#echo "welcome " .$emp['Fullname']. "";
#echo "</a>";
?>
<?php include 'header.html'; ?>
<?php
$myId=$_GET['id'];
$_SESSION['MyId'] = $myId;

echo "<a  href='logout.php'>Logout</a>";
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>STATUS ENTRY FORM</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  <style type="text/css">
  
  .status-form{
  	
  	width: 35%;
  	padding: 15px;
  	margin:0 auto;
  	display: table;

  }
  .status-form .login-field{
  	width: 100%;
  	padding:5px;
  	border: 1px solid grey;
  	background-color: #fff;
  	border-radius: 2px;
  	margin:3px 0px;
  }
  

  </style>
</head>

<body>
  <body>
	<br>
	<br>
	<br>
			<div class="app-title">
				<h4 class="display-page">AMC ENGINEERS STATUS ENTRY FORM</h4>
				
			</div>
			<hr>
			<form method="POST" action="change_status1.php" class="status-form">
					<input type="text" class="login-field" name="name" pattern="[A-Za-z]{1-20}" placeholder="Engineer name"  required>
					
					<textarea rows="5" cols="30" class="login-field" name="remarks" placeholder="enter..."  required></textarea>
					<input type="number" class="login-field" name="name" placeholder="Completion No"  required>
					<input id="button" type="submit" name="submit" value="submit" class="btn btn-primary  btn-block bt1">
					<!--<input id="button" type="reset" name="reset" value="reset" class="btn btn-primary  btn-block btn2">
					<!--<a class="btn btn-primary btn-large btn-block" href="#" name="submit" value="Log-In">login</a>-->
				
			</form> 
		
</body>
  
  
</body>
</html>
