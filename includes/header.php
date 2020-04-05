<?php include "includes/init.php"; ?>
<?php ob_start(); ?>
<?php session_start(); ?>
<?php 
if(!isset($_SESSION['user_id'])) {
	$sql = "DELETE FROM orders WHERE user_id='0'";
	if(!mysqli_query($connection, $sql)){
		echo mysql_error($connection);
	}
	$_SESSION['user_id'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Homepage</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="public/css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="public/css/bootstrap.css">
    <script src="public/js/all.js"></script>
</head>

<body>
