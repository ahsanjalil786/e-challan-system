<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$conn = new mysqli($servername, $username,'',$dbname);


if ($conn->connect_error) {
	
    die("Connection failed: " . $conn->connect_error);
}
else
{ 
//echo "Connected Database successfully";
}

?>
<!doctype html>
<html>
<head>

</head>
<body>

<h1 align="center">*************ONWER RECORD Print **********</h1>

<table border="1" align="center" style="line-height:25px;">
<tr>
<th>Onwer_CNIC</th>
<th>first_name</th>
<th>last_name</th>
<th>address</th>


</tr>
<?php
$sql = "SELECT * FROM Onwer";
$result = $conn->query($sql);
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>

<td> <?php  echo $row['Onwer_CNIC'];?></td>
<td> <?php  echo $row['first_name'];?></td>
<td> <?php  echo $row['last_name'];?></td>
<td> <?php  echo $row['address'];?></td>

 </tr>
 <?php
 }
 }
 else
 {
 ?>
 <tr>
 <th colspan="2">There's No data found!!!</th>
 </tr>
 <?php
}
?>
</table>
</body>
</html>