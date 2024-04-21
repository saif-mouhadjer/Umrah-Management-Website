<?php 
        require './../../app/Database_Connect.php';

        $id = $_GET['id'];

        $sql = "SELECT *  FROM `mouhtamir` WHERE `Num_p` = $id";
        $user = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($user);

        $sql = "SELECT * FROM  residence WHERE Num_p = '$id'";
        $residence = mysqli_query($conn, $sql);
        $residence = mysqli_fetch_assoc($residence);

        $id_vol=$residence['Num_vol'];
        $sql = "SELECT * FROM  voyage  WHERE Num_vol = '$id_vol'";
        $voyage = mysqli_query($conn, $sql);
        $voyage = mysqli_fetch_assoc($voyage);

        $num_g=$voyage['num_g'];

        $sql = "SELECT Prénom_g FROM  guide  WHERE num_g = '$num_g'";
        $Prénom_g = mysqli_query($conn, $sql);
        $Prénom_g = mysqli_fetch_assoc($Prénom_g);


        if($residence['Paiement']== 1){
            $sql = "SELECT *  FROM `visa` WHERE `Num_p` = $id";
            $visa = mysqli_query($conn, $sql);
            $visa = mysqli_fetch_assoc($visa);

        }else{
            $msg="لم تقم بالدفع . ليس لديك تأشيرة بعد ";
        }