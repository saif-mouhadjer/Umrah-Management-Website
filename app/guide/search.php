<?php   
    if(isset($_POST['search'])){
        $num_search =$_POST['num_search'];
        if(empty($num_search)){
            $sql = "SELECT * FROM guide WHERE `softDeletes` = 0";
            $guide = mysqli_query($conn, $sql);
        }else{
            $sql = "SELECT * FROM guide WHERE `softDeletes` = 0 AND `num_g` = '$num_search'";
            $guide = mysqli_query($conn, $sql);
        }      
    }