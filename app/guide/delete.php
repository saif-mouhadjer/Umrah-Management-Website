<?php  
    if(isset($_POST['b_delete'])){
        $DEL= $_POST['id_delete'];

        $sgl="UPDATE `guide` SET `softDeletes` = 1 WHERE `num_g` = $DEL ";
        mysqli_query($conn, $sgl);

        $sql = "SELECT * FROM guide WHERE `softDeletes` = 0";
        $guide = mysqli_query($conn, $sql);
        
    }