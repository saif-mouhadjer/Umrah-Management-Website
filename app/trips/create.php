<?php
require './../../app/Database_Connect.php';

$sql = "SELECT Prénom_g, num_g  FROM `guide` WHERE activite = 0";
$guide=mysqli_query($conn, $sql);


if(isset($_POST['create'])){
    $Nom_lentrepise = $_POST["Nom_lentrepise"];
    $Date_vol_d = $_POST["Date_vol_d"];
    $Time_vol_d = $_POST["Time_vol_d"];
    $Date_vol_r = $_POST["Date_vol_r"];
    $Time_vol_r = $_POST["Time_vol_r"];
    $Decollage_d = $_POST["Decollage_d"];
    $Decollage_r = $_POST["Decollage_r"];
    $Montant_omra = $_POST["Montant_omra"];
    $num_g = $_POST["num_g"];
    $msg=null;
    $todayDate = date('Y-m-d');
    if($Date_vol_d<$todayDate){$msg="لا يمكن ان يكون تاريخ الانطلاق قبل تاريخ اليوم";}
    if($Date_vol_d>$Date_vol_r){$msg="لا يمكن ان يكون تاريخ العودة قبل تاريخ الانطلاق";}
    if (strlen($Montant_omra) > 10) {$msg="طول حقل السعر اكبر من المتوقع";}
    
    if($msg == null){
        $sgl="UPDATE `guide` SET `activite` = 1 WHERE `num_g` = $num_g ";
        mysqli_query($conn, $sgl);
        $sql = "INSERT INTO voyage (`Nom_lentrepise`, `Date_vol_d`, `Time_vol_d` ,`Date_vol_r`, `Time_vol_r` ,`Decollage_d` ,`Decollage_r` ,`Montant_omra` ,`num_g`) 
        VALUES ('$Nom_lentrepise', '$Date_vol_d', '$Time_vol_d' , '$Date_vol_r', '$Time_vol_r' , '$Decollage_d' , '$Decollage_r' , '$Montant_omra' , '$num_g')";
        mysqli_query($conn, $sql);
        header("Location: Trips.php");
    }
    
}
