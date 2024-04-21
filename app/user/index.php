<?php
require './../../app/Database_Connect.php';
    $sql = "SELECT m.* , r.Paiement 
    FROM mouhtamir m
    LEFT JOIN residence r ON m.Num_p = r.Num_p
    GROUP BY m.Num_p";
    $user=mysqli_query($conn, $sql);
