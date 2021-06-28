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

<h1 align="center">vehicle_registration RECORD Update</h1>

<table border="1" align="center" style="line-height:25px;">
<tr>
<th>registration_number</th>
<th>vehicle_type</th>
<th>colour</th>
<th>Onwer_CNIC</th>


</tr>
<?php
$sql = "SELECT * FROM vehicle_registration";
$result = $conn->query($sql);
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>

<td> <?php  echo $row['registration_number'];?></td>
<td> <?php  echo $row['vehicle_type'];?></td>
<td> <?php  echo $row['colour'];?></td>
<td> <?php  echo $row['Onwer_CNIC'];?></td>


 <td><a href="Vedit.php?edit_id=<?php echo $row['registration_number']; ?>" alt="edit" >Edit/update</a></td>
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