<?php 
    require './../../app/Database_Connect.php';
    $sql = "SELECT *  FROM `guide` WHERE `softDeletes` = 0";
    $guide=mysqli_query($conn, $sql);
