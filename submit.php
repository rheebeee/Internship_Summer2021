<?php
$a= $_POST['firstname'];
$b= $_POST['lastname'];
$c= $_POST['email'];
$d= $_POST['company'];
$e= $_POST['phone'];
$f= $_POST['job'];
$g= $_POST['country'];
$h= $_POST['Reason'];
$i= $_POST['type'];
$j= $_POST['description'];
$k= $_POST['options'];

$servername= "localhost";
$username= "root";
$password= "";
$dbname= "db1";

//Create connection
$conn= new mysqli($servername, $username, $password, $dbname);

//Check Connection
if ($conn-> connect_error) {
	die("Connection failed: ".$conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO data (fname, lname, email, name, phone, job, country, reasons, area, details, prefer) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k')";

if($conn->query($sql) === TRUE) {
	echo "New record created successfully";
}
else {
	echo "Error: " .$sql . "<br>". $conn->error;
}
