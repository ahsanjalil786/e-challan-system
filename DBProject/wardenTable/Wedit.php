<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";// 1st change database name

$conn = new mysqli($servername, $username,'',$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else
{ 
//echo "Connected successfully";
}

if(isset($_GET['edit_id'])){
	
 $sql = "SELECT * FROM e_challan_record WHERE challan_number=" .$_GET['edit_id'];
 // 2nd change table name and carno ya id jis ko ap change krna chaho
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_array($result);

}
if(isset($_POST['btn-update'])){
 $a= $_POST['a'];
 $b = $_POST['b'];
 $c = $_POST['c'];
  $d = $_POST['d'];
   $e = $_POST['e'];
  
 
// 3rd pa neechy jao or table k column name change kro
// 4th number pay yaha pay car_category ki jaga table name likho
 $update = "UPDATE complain SET  C_description='$b' ,warden_id='$d'  , amount='$c' ,registration_number='$e'  where complain_id='$a' ";
if ($conn->query($update) === TRUE) {
    echo "<script>alert('Do you want To update Record ?');</script>";
} else {
    echo "Error: " . $update . "<br>" . $conn->error;
}
}
?>
<!doctype html>
<html>
<head>
<link rel="shortest icon" type="text/css" href="image/bomb2.jpg">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>


<body>

<form method="post">
<h1>Update Record</h1>
<input type="text" name="a" placeholder="complain_id" value="<?php echo $row['complain_id']; ?>"><br>
<input type="text"  name="b" placeholder="C_description" value="<?php echo $row['C_description']; ?>"><br>
<input type="text"  name="c" placeholder="amount" value="<?php echo $row['amount']; ?>"><br>
<input type="text" name="d" placeholder="warden_id" value="<?php echo $row['warden_id']; ?>"><br>
<input type="text" name="e" placeholder="registration_number" value="<?php echo $row['registration_number']; ?>"><br>


<button type="submit" name="btn-update" id="btn-update" ><strong>Update</strong></button>
<a href="Corecord.php"><button type="button" value="button">Cancel</button></a>
</form>

</body>
</html>