    <?php 
        require './../../app/Database_Connect.php';

        $id = $_GET['id'];

        $sql = "SELECT *  FROM `guide` WHERE `num_g` = $id";
        $guide = mysqli_query($conn, $sql);

        $guide = mysqli_fetch_assoc($guide);
        $id=$guide['num_g'];

        if($guide['activite']== 1){
            $sql = "SELECT *  FROM `voyage` WHERE `num_g` = $id";
            $voyage = mysqli_query($conn, $sql);
            $voyage = mysqli_fetch_assoc($voyage);

        }else{
            $msg="ليس لديك رحلات";
        }
    