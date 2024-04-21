<?php


if(isset($_POST['create'])){
    require './../../app/Database_Connect.php';
    $name = $_POST["Prénom_p"];
    $lastname = $_POST["Nom_p"];
    $birthdate = $_POST["Date_naiss_p"];
    $birthplace = $_POST["Lieu_naiss_p"];
    $phone = $_POST["Téle_p"];
    $password = $_POST["password"];
    $confirm_password = $_POST["conf_password"];
    $adresse_p = $_POST["adresse_p"];
    $Sexe_p = $_POST["Sexe_p"];
    $Num_pas_p = $_POST["Num_pas_p"];
    $distance_ch = $_POST["distance_ch"];
    $natu_fod = $_POST["natu_fod"];
    $type_ch = $_POST["type_ch"];

    
    $hashed_password = md5($password);
    $msg=null;
    if ($password != $confirm_password){$msg="تأكد من صحة كلمة المرور";}

    if (strlen($name) > 25) {$msg="طول حقل الاسم اكبر من المتوقع";}
    if (strlen($lastname) > 25) {$msg="طول حقل اللقب اكبر من المتوقع";}
    if (strlen($birthplace) > 20) {$msg="طول حقل اللقب اكبر من المتوقع";}
    if (strlen($phone) > 10) {$msg="طول حقل الهاتف اكبر من المتوقع";}
    if (strlen($Num_pas_p) > 10) {$msg="طول حقل جواز السفر اكبر من المتوقع";}
    if (strlen($adresse_p) > 50) {$msg="طول حقل العنوان اكبر من المتوقع";}
    if (strlen($password) > 20) {$msg="طول حقل كلمة المرور اكبر من المتوقع";}
    
    if($msg == null){
        $sql = "INSERT INTO mouhtamir (`Prénom_p`, `Nom_p`, `Date_naiss_p` ,`Lieu_naiss_p`, `Téle_p` ,`password` ,`Sexe_p` ,`adresse_p` ,`Num_pas_p`) 
        VALUES ('$name', '$lastname', '$birthdate' , '$birthplace', '$phone' , '$hashed_password' ,'$Sexe_p' ,'$adresse_p' ,'$Num_pas_p')";
        mysqli_query($conn, $sql);
        $id = mysqli_insert_id($conn);
        
        $todayDate = date('Y-m-d');

        $sql = "SELECT Num_vol,Montant_omra
        FROM voyage
        WHERE  	Date_vol_d > '$todayDate'";

        $voyage = mysqli_query($conn, $sql);
        $voyage = mysqli_fetch_assoc($voyage);
        $id_voyage=$voyage['Num_vol'];
        $Montant_omra_total=$voyage['Montant_omra'];

        if($distance_ch == 1000){$Montant_omra_total += 1000000;}
        if($distance_ch == 500){$Montant_omra_total += 2000000;}

        if($natu_fod == "نصف كامل"){$Montant_omra_total += 1000000;}
        if($natu_fod == "كامل"){$Montant_omra_total += 2000000;}

        if($type_ch == "ثنائية"){$Montant_omra_total += 1000000;}
        if($type_ch == "احادية"){$Montant_omra_total += 2000000;}

        $todayDate = date('Y-m-d');

        $sql = "INSERT INTO residence (`Num_vol`, `Num_p`, `distance_ch` ,`natu_fod`, `Montant_omra_total`, `type_ch` , `date_ch` ) 
        VALUES ('$id_voyage', '$id', '$distance_ch' , '$natu_fod', '$Montant_omra_total' , '$type_ch', '$todayDate')";
        mysqli_query($conn, $sql);

        header("Location: payment.php?id=$id");
    }
    
}
//header("Location: Guide.php");
