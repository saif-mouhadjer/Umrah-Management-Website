<?php
    require './../../app/Database_Connect.php';
    $sql = "SELECT v.Num_vol, v.Date_vol_d, v.Date_vol_r, COUNT(b.Num_visa) AS row_count
    FROM voyage v
    LEFT JOIN visa b ON v.Num_vol = b.Num_vol
    WHERE v.softDeletes = 0
    GROUP BY v.Num_vol, v.Date_vol_d, v.Date_vol_r
    ORDER BY v.Num_vol DESC";
    $voyage =mysqli_query($conn, $sql);