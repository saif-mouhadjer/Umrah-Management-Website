<?php


if(isset($_POST['create'])){
    require './../../app/Database_Connect.php';
    $name = $_POST["Prénom_g"];
    $lastname = $_POST["Nom_g"];
    $birthdate = $_POST["Date_naiss_g"];
    $birthplace = $_POST["Lieu_naiss_g"];
    $phone = $_POST["Téle_g"];
    $password = $_POST["password"];
    $confirm_password = $_POST["conf_password"];

    $hashed_password = md5($password);
    $msg=null;
    if ($password != $confirm_password){$msg="تأكد من صحة كلمة المرور";}

    if (strlen($name) > 25) {$msg="طول حقل الاسم اكبر من المتوقع";}
    if (strlen($lastname) > 25) {$msg="طول حقل اللقب اكبر من المتوقع";}
    if (strlen($birthplace) > 20) {$msg="طول حقل اللقب اكبر من المتوقع";}
    if (strlen($phone) > 10) {$msg="طول حقل الهاتف اكبر من المتوقع";}
    if (strlen($password) > 20) {$msg="طول حقل كلمة المرور اكبر من المتوقع";}
    
    if($msg == null){
        $sql = "INSERT INTO guide (`Prénom_g`, `Nom_g`, `Date_naiss_g` ,`Lieu_naiss_g`, `Téle_g` ,`password`) 
        VALUES ('$name', '$lastname', '$birthdate' , '$birthplace', '$phone' , '$hashed_password')";
        mysqli_query($conn, $sql);
        header("Location: Guide.php");
    }
    
}
