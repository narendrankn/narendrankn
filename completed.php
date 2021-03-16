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

<?php
  if($_SESSION['result1']==true){ 
  	echo "<br>
  <br>
  ";
    echo "<div class='user-name'>";
    echo $_SESSION["Fullname"];
    echo "</div>";
    echo "<br>";
    echo "<button class='btn btn-warning logout-btn'>";
	echo "<a  href='logout.php'>Logout</a>";
	echo"</button>";
    }
    else{
    //$_SESSION['result1']==false; 
    echo "user not logged in";
    }
	mysql_select_db('amcdb');
	$sql="SELECT * FROM usercomplaint WHERE Status LIKE 'completed' ORDER BY id DESC;";
	$records=mysqli_query($con, $sql) or die('eror getting data');
?>


<html>
	<head>
		<!--<style type="text/css">
			h4.display-page{
				text-align: center;
				text-transform: uppercase;
				color:#b30000;
			}
			.logout-btn{
				float: right;
				margin: 10px;
			}
			.logout-btn a{
				text-decoration: none;
				color: #fff;
				font-size:18px;
			}
		</style>-->
	</head>
	<body>
		<header class="headers fixed-top  clearfix">
    <div class="header-page row center-page">
      <div class="logo col-md-2">
        <a class="navbar-brand" href="index.html">AMC</a>
      </div>
      <div class="lists col-md-10">
        <a class="link1 " class="active" href="#">Home </a>
        <a class="link1 " href="#">Register complaint</a></li>
        <a class="link1 " href="user-login1.html"> Complaint Status</a>
        <a class="link1 " href="login-page.html"> Login</a>
        <a class="link1 " href="#contact">Contact</a>   
    </div>
  </header>
  <br>
  	<h4 class="display-page clearfix">Completed Complaint Details</h4>
		<table  border="1" cellpadding="1" cellspacing="1"class="table clearfix table-bordered table-hover tab-info center-page" >
			<thead>
				<tr>
					<th>SL<br>No.</th>
					<th>Name</th>
					<th>Designation</th>
					<th>Department</th>
					<th>Complaint</th>
					<th>Complaint_Date</th>
					<th>Recieved_By</th>
					<th>Recieved_Date</th>
					<th>Remarks</th>
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
					echo "<td>".$emp['complaint']."</td>";
					echo "<td>".$emp['date']."</td>";
					echo "<td>".$emp['Recieved_by']."</td>";
					echo "<td>".$emp['Recieved_Time']."</td>";
					echo "<td>".$emp['Remarks']."</td>";
					echo "<td>".$emp['Status']."</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>
