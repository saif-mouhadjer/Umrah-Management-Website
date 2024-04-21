<?php  
    if(isset($_POST['b_delete'])){
        $DEL= $_POST['id_delete'];

        $sgl="UPDATE `voyage` SET `softDeletes` = 1 WHERE `Num_vol` = $DEL ";
        mysqli_query($conn, $sgl);

        $todayDate = date('Y-m-d');
        $sql = "SELECT v.Num_vol, v.Date_vol_d, v.Date_vol_r, COUNT(b.Num_bon_recept) AS row_count
        FROM voyage v
        LEFT JOIN bon_reception b ON v.Num_vol = b.Num_vol
        WHERE v.softDeletes = 0 AND `Date_vol_d` < '$todayDate'
        GROUP BY v.Num_vol, v.Date_vol_d, v.Date_vol_r
        ORDER BY v.Num_vol DESC";
        $voyage =mysqli_query($conn, $sql);
        
    }