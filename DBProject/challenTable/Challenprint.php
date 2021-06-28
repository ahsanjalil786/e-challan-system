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

<h1 align="center">*************challen RECORD Print **********</h1>

<table border="1" align="center" style="line-height:25px;">
<tr>
<th>challan_number</th>
<th>location</th>
<th>amount</th>
<th>r_number</th>


</tr>
<?php
$sql = "SELECT * FROM E_challan_record";
$result = $conn->query($sql);
if($result->num_rows > 0){
 while($row = $result->fetch_assoc()){
 ?>
 <tr>
<td> <?php  echo $row['challan_number'];?></td>
<td> <?php  echo $row['location'];?></td>
<td> <?php  echo $row['amount'];?></td>
<td> <?php  echo $row['r_number'];?></td>

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