<?php 

    if(isset($_POST['search'])){
        $num_search =$_POST['num_search'];
        if(empty($num_search)){
            $sql = "SELECT v.Num_vol, v.Date_vol_d, v.Date_vol_r, COUNT(b.Num_bon_recept) AS row_count
            FROM voyage v
            LEFT JOIN bon_reception b ON v.Num_vol = b.Num_vol
            WHERE v.softDeletes = 0
            GROUP BY v.Num_vol, v.Date_vol_d, v.Date_vol_r
            ORDER BY v.Num_vol DESC";
            $voyage = mysqli_query($conn, $sql);
        }else{
            $sql = "SELECT v.Num_vol, v.Date_vol_d, v.Date_vol_r, COUNT(b.Num_bon_recept) AS row_count
            FROM voyage v
            LEFT JOIN bon_reception b ON v.Num_vol = b.Num_vol
            WHERE v.softDeletes = 0 AND v.Num_vol = '$num_search'
            GROUP BY v.Num_vol, v.Date_vol_d, v.Date_vol_r
            ORDER BY v.Num_vol DESC";
            $voyage = mysqli_query($conn, $sql);
        }  
        
        
    }
