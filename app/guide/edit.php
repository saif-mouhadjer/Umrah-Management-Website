<?php
require './../../app/Database_Connect.php';

$id = $_GET['id'];

$sql = "SELECT *
FROM guide
WHERE  	num_g = '$id'";
$guide=mysqli_query($conn, $sql);
$guide = mysqli_fetch_assoc($guide);

if(isset($_POST['edit'])){
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
        $sql = "UPDATE `guide`
        SET `Prénom_g` = '$name',
            `Nom_g` = '$lastname',
            `Date_naiss_g` = '$birthdate',
            `Lieu_naiss_g` = '$birthplace',
            `Téle_g` = '$phone',
            `softDeletes` = 0,
            `password` = '$hashed_password'
        WHERE `num_g` = '$id'";

        mysqli_query($conn, $sql);

        header("Location: Guide.php");
    }
    
}