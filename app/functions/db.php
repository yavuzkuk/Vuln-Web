<?php

try {
    $host = "mysql";
    $dbname = "gamesstore";
    $username = "root";
    $password = "password";
    

    // PDO bağlantı dizgesini düzeltme
    $connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);


    // PDO bağlantı özelliklerini ayarlama
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Hata durumunda uygun bir işlem yapma
    echo "Bağlantı hatası: " . $e->getMessage();
}
?>
