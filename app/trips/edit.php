<?php
require './../../app/Database_Connect.php';

$todayDate = date('Y-m-d');

$sql = "SELECT *
FROM voyage
WHERE  	Date_vol_d > '$todayDate'";

$voyage = mysqli_query($conn, $sql);
$voyage = mysqli_fetch_assoc($voyage);

$num_guide =$voyage['num_g'];
$sql = "SELECT Prénom_g ,num_g  FROM `guide` WHERE `num_g` = $num_guide";
$thisguide = mysqli_query($conn, $sql);
$thisguide = mysqli_fetch_assoc($thisguide);

$sql = "SELECT Prénom_g, num_g  FROM `guide` WHERE activite = 0";
$guide=mysqli_query($conn, $sql);


if(isset($_POST['edit'])){
    $Nom_lentrepise = $_POST["Nom_lentrepise"];
    $Date_vol_d = $_POST["Date_vol_d"];
    $Time_vol_d = $_POST["Time_vol_d"];
    $Date_vol_r = $_POST["Date_vol_r"];
    $Time_vol_r = $_POST["Time_vol_r"];
    $Decollage_d = $_POST["Decollage_d"];
    $Decollage_r = $_POST["Decollage_r"];
    $Montant_omra = $_POST["Montant_omra"];
    $num_g = $_POST["num_g"];
    echo $Date_vol_d;
    $msg=null;
    $todayDate = date('Y-m-d');
    if($Date_vol_d<$todayDate){$msg="لا يمكن ان يكون تاريخ الانطلاق قبل تاريخ اليوم";}
    if($Date_vol_d>$Date_vol_r){$msg="لا يمكن ان يكون تاريخ العودة قبل تاريخ الانطلاق";}
    if (strlen($Montant_omra) > 10) {$msg="طول حقل السعر اكبر من المتوقع";}
    
    if($msg == null){
        $sgl="UPDATE `guide` SET `activite` = 0 WHERE `num_g` = $num_guide ";
        mysqli_query($conn, $sgl);

        $sgl="UPDATE `guide` SET `activite` = 1 WHERE `num_g` = $num_g ";
        mysqli_query($conn, $sgl);

        $id=$voyage['Num_vol'];
        
        $sql = "UPDATE `voyage`
        SET `Nom_lentrepise` = '$Nom_lentrepise',
            `Date_vol_d` = '$Date_vol_d',
            `Time_vol_d` = '$Time_vol_d',
            `Date_vol_r` = '$Date_vol_r',
            `Time_vol_r` = '$Time_vol_r',
            `Decollage_d` = '$Decollage_d',
            `Decollage_r` = '$Decollage_r',
            `Montant_omra` = '$Montant_omra',
            `num_g` = '$num_g'
        WHERE `Num_vol` = '$id'";

        mysqli_query($conn, $sql);

        header("Location: Trips.php");
    }
    
}