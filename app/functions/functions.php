<?php

    function GetSearchGame($searchKey){
        include "db.php";

        $query = "SELECT * FROM games INNER JOIN gamescategory ON games.gcategory = gamescategory.id WHERE gTitle LIKE '%$searchKey%'";

        //Güvenli kod
        // $text = "%".$searchKey."%";
        // $query = "SELECT * FROM games INNER JOIN gamescategory ON games.gcategory = gamescategory.id WHERE gTitle LIKE :inputText";
        
        $stmt = $connect->prepare($query);

        // $stmt->execute([":inputText"=>$text]);
        // $stmt->execute();

        return $stmt->fetchAll();
    }


    function GetSpeGame($id){
        include "db.php";

        $query = "SELECT * FROM games INNER JOIN gamescategory ON games.gcategory = gamescategory.id WHERE games.id = :id";

        $stmt = $connect->prepare($query);

        $stmt->execute([":id"=>$id]);

        return $stmt->fetch();
    }

    function GetCategory($limit){
        include "db.php";

        $query;
        if($limit){
            $query = "SELECT * FROM gamescategory LIMIT $limit";
        }else{
            $query = "SELECT * FROM gamescategory";

        }


        $stmt = $connect->prepare($query);

        $stmt->execute();
        return $stmt->fetchAll();
    }

    function Login($mail,$pass){
        include "db.php";

        $query = "SELECT * FROM users WHERE mail = '$mail' AND pass = '$pass'";

        $stmt = $connect->prepare($query);
        
        $stmt->execute();
        
        return [$stmt->rowCount(),$stmt->fetch()["id"]];
    }

    function GetLast4Games(){
        include "db.php";

        $query = "SELECT games.id,games.gtitle,games.gdesc,games.price,gamescategory.categoryName FROM games INNER JOIN gamescategory ON games.gcategory = gamescategory.id ORDER BY games.gdate DESC LIMIT 4 ";

        $stmt = $connect->prepare($query);

        $stmt->execute();
    
        return $stmt->fetchAll();
    }

    function GetSpeUser($id){
        include "db.php";

        $query = "SELECT * FROM users WHERE id = :id";

        $stmt = $connect->prepare($query);

        $stmt->execute([":id"=>$id]);

        return $stmt->fetch();
    }

    function UpdateUser($id,$inputuserName,$userMail,$passwd,$fileName){
        include "db.php";

        $query = "UPDATE users SET username = :username, mail = :mail, pass = :passwd, pic = :userFile WHERE id = :id";

        $stmt = $connect->prepare($query);

        $stmt->execute([":username"=>$inputuserName,":mail"=>$userMail,":passwd"=>$passwd,":userFile"=>$fileName,":id"=>$id]);
    }




?>