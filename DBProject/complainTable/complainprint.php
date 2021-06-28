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

<h1 align="center">*************complain RECORD Print **********</h1>

<table border="1" align="center" style="line-height:25px;">
<tr>
<th>complain_id</th>
<th>C_description</th>
<th>amount</th>
<th>warden_id</th>
<th>registration_number</th>


</tr>
<?php
$sql = "SELECT * FROM complain";
$result = $conn->query($sql);
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
<td> <?php  echo $row['complain_id'];?></td>
<td> <?php  echo $row['amount'];?></td>
<td> <?php  echo $row['warden_id'];?></td>
<td> <?php  echo $row['C_description'];?></td>

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