<?php
if(isset($_POST['login'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($username=="admin" && $password=="admin"){
        header("Location: admin_home.php");
    }else{
        $msg=true;
    }
}