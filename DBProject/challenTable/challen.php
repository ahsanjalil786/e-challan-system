<?php
$a= $_POST['a'];
$b= $_POST['b'];
$c= $_POST['c'];
$d= $_POST['d'];







$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username,'',$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
{ 
echo "Connected successfully";
}

$q="INSERT INTO E_challan_record VALUES('$a','$b','$c','$d')";
if ($conn->query($q) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $q . "<br>" . $conn->error;
}

?>