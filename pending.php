
<?php
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
#echo "Connected successfully <br>";
if(!isset($_SESSION['result1']))
{
   	// not logged in
    header('Location: login-page.html');
    exit();
}
?>
<style><?php include 'css/bootstrap.css'; ?></style>
<style><?php include 'css/style1.css'; ?></style>

<br>
<br>
<?php
  if($_SESSION['result1']==true){ 
    echo "<div class='user-name'>";
    echo $_SESSION["Fullname"];
    echo "</div>";
    echo "<br>";
    echo "<button class='btn btn-warning logout-btn'>";
	echo "<a  href='logout.php'>Logout</a>";
	echo"</button>";
    // echo '<a href="logout.php"><span>Logout</span></a></li>';
    }
    else{
   	//$_SESSION['result1']==false; 
    echo "user not logged in";
	}   
	mysql_select_db('amcdb');
	$sql="SELECT * FROM usercomplaint WHERE Status LIKE 'pending' ORDER BY id DESC";
	$records=mysqli_query($con, $sql) or die('eror getting data');
?>
<html>
	<head>	
	</head>
	<body>
		<header class="headers fixed-top  clearfix">
    <div class="header-page row center-page">
      <div class="logo col-md-2">
        <a class="navbar-brand" href="index.html">AMC</a>
      </div>
      <div class="lists col-md-10">
        <a class="link1 " href="#">Home </a>
        <a class="link1 " href="user-login1.html">Register</a></li>
        <a class="link1 " href="check_status.html"> Complaint Status</a>
        <a class="link1 " href="#contact">Contact</a> 
        <a class="link1 " href="#services">Services</a> 
        <a class="link1 " href="login-page.html"> Login</a>
          
    </div>
  </header>
  <br>
		<h4 class="display-page">Pending Complaint Details</h4>
		<table  border="1" cellpadding="1" cellspacing="1"class="table clearfix table-bordered table-hover tab-info center-page" >
			<thead>
			<tr>
				<th>SI No</th>
				<th>Name</th>
				<th>Designation</th>
				<th>Department</th>
				<th>mail Id</th>
				<th>Phone</th>
				<th>Complaint</th>
				<th>Time</th>
				<th>status</th>
				
			<tr>
			</thead>		
			<?php
				while ($emp=mysqli_fetch_array($records, MYSQLI_ASSOC)) {
					# code...
					echo "<tr>";
					echo "<td>".$emp['id']."</td>";
					echo "<td>".$emp['name']."</td>";
					echo "<td>".$emp['designation']."</td>";
					echo "<td>".$emp['department']."</td>";
					echo "<td>".$emp['email']."</td>";
					echo "<td>".$emp['phone']."</td>";
					echo "<td>".$emp['complaint']."</td>";
					echo "<td>".$emp['date']."</td>";
					echo "<td>";
					echo "<a href='change_status.php?id=$emp[id]'>";
					echo "pending</a>";
					echo "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>