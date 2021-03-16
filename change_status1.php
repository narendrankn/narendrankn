

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
//echo "Connected successfully <br>";

$name=$_POST['name'];
$complaint=$_POST['remarks'];
$myId = $_SESSION['MyId'];
?>;
<style><?php include 'css/style1.css'; ?>
.some-heading{
	text-align: center;
}
</style>
<?php include 'header.html'; ?>
<?php
$sql = "UPDATE usercomplaint SET Recieved_by='$name', Remarks='$complaint', Status='completed',Recieved_Time=now() WHERE id='$myId'";


#$sql ="INSERT INTO usercomplaint (Recieved_by,Remarks,Recieved_Time,Status) 
#sVALUES ('$name','$complaint','$complaint',NOW(),'completed') WHERE id='$myId'";
//$query=mysqli_query($con,$sql);
#$lastInsertedPeopleId = mysql_insert_id();
/*if($query){
echo "data inserted successfully<br>";
echo "Thank you for your complaint registration <br>"

}
else{
echo "not inserted";}

*/
if ($con->query($sql) === TRUE) {
    $last_id = $con->insert_id;
    echo "<br>";
    echo "<br>";
    echo "<h5 class='some-heading'>";
    echo "Thank you";
    echo "</h5>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();


?>
