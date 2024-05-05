<?php

    session_start();
    include "../functions/functions.php";

    $user = GetSpeUser($_SESSION["id"]);


    $inputUsername =empty(trim(htmlentities($_POST["inputUsername"]))) ? $user["username"] : htmlentities($_POST["inputUsername"]);
    $inputMail = empty(trim(htmlentities($_POST["inputMail"]))) ? $user["mail"] : htmlentities($_POST["inputMail"]);
    $inputPasswd = empty(trim($_POST["inputPasswd"])) ? $user["pass"] : $_POST["inputPasswd"];
    $fileName = $user["pic"];
    

    $notAcceptExtens = ["php","exe"];
    $acceptType = ["image/jpg","image/jpeg","image/png","image/webp"];
    

    if($_FILES["filePic"]["error"] == 0 && in_array($_FILES["filePic"]["type"],$acceptType) && !in_array(pathinfo($_FILES["filePic"]["name"])["extension"],$notAcceptExtens)){
        
        $extens = pathinfo($_FILES["filePic"]["name"])["extension"];

        $fileName = md5(time()).".".$extens;

        move_uploaded_file($_FILES["filePic"]["tmp_name"],"../assets/images/profilePic/".$fileName);

        $_SESSION["message"] = "Dosya yüklendi";
        $_SESSION["color"] = "success";

        UpdateUser($_SESSION["id"],$inputUsername,$inputMail,$inputPasswd,$fileName);
        header("Location:../");
        exit();

    }else if($_FILES["filePic"]["error"] == 0 && !in_array($_FILES["filePic"]["type"],$acceptType) || in_array(pathinfo($_FILES["filePic"]["name"])["extension"],$notAcceptExtens)){
        $_SESSION["message"] = "İstenilen türde dosya yükleyiniz";
        $_SESSION["color"] = "warning";

        UpdateUser($_SESSION["id"],$inputUsername,$inputMail,$inputPasswd,$fileName);
        header("Location:../");
        exit();

    }else if($_FILES["filePic"]["size"] == 0){

        UpdateUser($_SESSION["id"],$inputUsername,$inputMail,$inputPasswd,$fileName);
        header("Location:../");
        exit();
    }







?>