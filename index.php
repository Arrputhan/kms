<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<title>Kilometres</title>
</head>
<body style="background-color: pink;">
<form action="index.php" method="post">
<div class="container">
<img src="2.jpg">
<div style="margin-top: 100px;" class="form-group">
	<label for="kms">Kilometres</label>
	<input type="text" name="kms" id="kms" placeholder="kms"><br>
	<input type="submit" name="send" value="update">
	<h3><a href="view.php">View kms</a></h3>
</div>
</div>
</form>
<?php
if(isset($_POST['kms'])) {
	$kms = $_POST['kms'];
	include('dbconfig.php');
	$sql = "INSERT INTO kms VALUES ('$kms')";
if (mysqli_query($dbconfig, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($dbconfig);
}
}
?>
</body>
</html>
