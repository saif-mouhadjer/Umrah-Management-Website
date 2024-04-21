<?php
if(isset($_POST['login'])){
    require './../../app/Database_Connect.php';
    $num_pas_p = $_POST["num_pas_p"];
    $password = $_POST["password"];

    $hashed_password = md5($password);
    $sql = "SELECT * FROM `mouhtamir` WHERE `Num_pas_p` = '$num_pas_p' AND `password` = '$hashed_password'";
    $user = mysqli_query($conn, $sql);


    if(mysqli_num_rows($user) > 0){
        $user = mysqli_fetch_assoc($user);
        $id=$user["Num_p"];

        $sql="SELECT Paiement FROM `residence` WHERE `Num_p` = $id ";
        $Paiement = mysqli_query($conn, $sql);
        $Paiement = mysqli_fetch_assoc($Paiement);

        if($Paiement["Paiement"]==1){
            header("Location: show_user.php?id=$id");
        }else{
            header("Location: payment.php?id=$id");
        }
    }else{
        $sql = "SELECT num_g FROM `guide` WHERE `Téle_g` = '$num_pas_p' AND `password` = '$hashed_password'";
        $guide = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($guide) > 0){
            $guide = mysqli_fetch_assoc($guide);
            $id =$guide['num_g'];
            header("Location: show_guide.php?id=$id");
        }else{
            $msg=true;
        }
    }
}