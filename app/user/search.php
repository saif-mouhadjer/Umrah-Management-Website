<?php   
    if(isset($_POST['search'])){
        $id_user =$_POST['id_user'];
        if(empty($id_user)){
            $sql = "SELECT m.* , r.Paiement 
            FROM mouhtamir m
            LEFT JOIN residence r ON m.Num_p = r.Num_p
            GROUP BY m.Num_p";
            $user=mysqli_query($conn, $sql);
        }else{
            $sql = "SELECT m.* , r.Paiement 
            FROM mouhtamir m
            LEFT JOIN residence r ON m.Num_p = r.Num_p
            WHERE m.Num_pas_p = '$id_user'
            GROUP BY m.Num_p";
            $user=mysqli_query($conn, $sql);
        }      
    }