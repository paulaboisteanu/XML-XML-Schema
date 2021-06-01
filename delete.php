<?php
include "connection.php";
$sql1="SELECT* FROM images WHERE id='{$_GET['id']}'";
$quert=mysqli_quert($con,$aql1)or die(mysqli_error($con));

$row=mysqli_fetch_array($quert);

unlink($row["image"]);
$sql2="SELECT* FROM images WHERE id='{$_GET['id']}'";
$quert=mysqli_quert($con,$aql2)or die(mysqli_error($con));

header('location:index.php');
?>