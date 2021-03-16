<style><?php include 'css/style1.css';?></style>
<style type="text/css">


</style>
<?php include 'header.html'; ?>
<?php
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

$name=$_POST['name'];
$designation=$_POST['designation'];
$department=$_POST['department'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$typeofIssue=$_POST['typeofissue'];
$complaint=$_POST['complaint'];

$sql ="INSERT INTO usercomplaint (name,designation,department,email,phone,complaint,date,Status) 
VALUES ('$name','$designation','$department','$email','$phone','$complaint',now(), 'pending')";
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
    echo "<br><br><br>";
    echo "<div class='register_success'>";
    echo "Thank you for your complaint registration <br>";
    echo "your complaint number: " . $last_id."<br>";
    echo "we will contact you soon";
    echo "</div>";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>
