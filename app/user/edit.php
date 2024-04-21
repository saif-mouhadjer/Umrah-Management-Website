<?php
require './../../app/Database_Connect.php';

$id = $_GET['id'];

$sql = "SELECT *
FROM mouhtamir
WHERE  	Num_p = '$id'";
$user=mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($user);

if(isset($_POST['edit'])){
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
        $sql = "UPDATE `mouhtamir`
        SET `Prénom_p` = '$name',
            `Nom_p` = '$lastname',
            `Date_naiss_p` = '$birthdate',
            `Lieu_naiss_p` = '$birthplace',
            `Téle_p` = '$phone',
            `adresse_p` = '$adresse_p',
            `Sexe_p` = '$Sexe_p',
            `Num_pas_p` = '$Num_pas_p',
            `password` = '$hashed_password'
        WHERE `Num_p` = '$id'";
        mysqli_query($conn, $sql);

        $sql = "UPDATE `residence`
        SET `distance_ch` = '$distance_ch',
            `natu_fod` = '$natu_fod',
            `type_ch` = '$type_ch'
        WHERE `Num_p` = '$id'";
        mysqli_query($conn, $sql);


        header("Location: list_user.php");
    }
    
}