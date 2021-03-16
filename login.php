<?php  //Start the Session
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db="amcdb";
?>
<style><?php include 'css/bootstrap.css'; ?></style>
<style><?php include 'css/style1.css'; ?></style>
<?php include 'header.html'; ?>

<?php
// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$query = "SELECT * FROM `userdatabase` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
#$_SESSION['username'] = $username;
	$_SESSION['result1']=$result;

}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
echo "".$fmsg;
}
}
//3.1.4 if the user is logged in Greets the user with message
/*if (isset($_SESSION['username'])){
$username = $_SESSION['username'];
echo "Welcome " . $username . "";*/

$query1 = "SELECT Fullname FROM `userdatabase`  WHERE username='$username' and password='$password'";
$result1 = mysqli_query($con, $query) or die(mysqli_error($con));
$emp=mysqli_fetch_array($result1, MYSQLI_ASSOC);

echo "<br>";
echo "<br>";
echo "<div class='status-page'>";
echo "<h4>A.M.C ENGINEERS LOGIN</h4>";
echo "</div>";
echo "<hr></hr>";
echo "<div class='log-name'>";
echo "<a class='logged-name'>";
echo "welcome " .$emp['Fullname']. "";
echo "</a>";
$_SESSION['Fullname']=$emp['Fullname'];
echo "<br>";
echo "<button class='btn btn-warning logout-btn'>";
echo "<a  href='logout.php'>Logout</a>";
echo"</button>";
echo "</div>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<a class='pending' href='pending.php'>View/Edit Pending complaint page</a>";
echo "<br>";
echo "<a class='completed' href='completed.php'>View completed complaint page</a>";
echo "<br>";
echo "<a class='completed' href='report.php'>Report</a>";

/*}else{
//3.2 When the user visits the page first time, simple login form will be displayed.
}
*/
 

?>
