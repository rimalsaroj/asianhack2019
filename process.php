<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yourcareer";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo("works");

	$name = ($_POST['fname']);
	$address =($_POST['lname']);
	$email = ($_POST['email']);
	$phone = ($_POST['password']);
	$query = ($_POST['confirm']);
	

$sql = "INSERT INTO student_info (fname,lname,email, password, confirm)
VALUES 
('$_POST[fname]', '$_POST[lname]', '$_POST[email]', '$_POST[password]', '$_POST[confirm]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: home.html");
$conn->close();
?>