<?php

    session_start();

    include "../functions/functions.php";

    if(isset($_POST["loginMail"]) && isset($_POST["loginPass"])){
        $mail = (trim($_POST["loginMail"]));
        $pass = (trim($_POST["loginPass"]));

        $datas = Login($mail,$pass);

        $id = $datas[1];
        $datas = $datas[0];
        if($datas){
            $_SESSION["login"] = "true";
            $_SESSION["color"] = "success";
            $_SESSION["message"] = "Başarıyla giriş yapıldı";
            $_SESSION["id"] = $id;

            header("Location:../index.php");
            exit();
        }else{
            $_SESSION["color"] = "danger";
            $_SESSION["message"] = "Hatalı mail/şifre";
            header("Location:login.php");
            exit();
        }
    }






?>