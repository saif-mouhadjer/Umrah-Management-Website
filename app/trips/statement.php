<?php
require './../../app/Database_Connect.php';

$id =$_GET['id'];

$sql = "SELECT *
FROM voyage
WHERE  	Num_vol = '$id'";

$voyage = mysqli_query($conn, $sql);
$voyage = mysqli_fetch_assoc($voyage);

$id_guide=$voyage['num_g'];

$sql = "SELECT  Prénom_g 	
FROM guide
WHERE  	num_g = '$id_guide'";

$guide = mysqli_query($conn, $sql);
$guide = mysqli_fetch_assoc($guide);

$sql="SELECT m.*
FROM mouhtamir AS m
INNER JOIN residence AS r ON m.Num_p = r.Num_p
WHERE r.Num_vol = '$id';
";
$mouhtamir=mysqli_query($conn, $sql);


