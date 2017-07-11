<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>History</title>
	<style type="text/css">
	table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
</head>
<body>
<?php
include('dbconfig.php');
$sql = "SELECT * from kms";
$result = mysqli_query($dbconfig,$sql);
echo "<table class='table table-bordered table-hover'><tr><th>KMS</th></tr>";
if(mysqli_num_rows($result) > 0) {
	while($row=mysqli_fetch_array($result)) {
		echo '<tr><td>'.$row["kms"].'</td></tr>';
	}
}
echo '</table>';
?>