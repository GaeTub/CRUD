<?php

$host = "localhost";
$dbName = "ecommerce";
$username = "root";
$password = "";

try {
    // $connection = new PDO("msql:host=$host;dbname=$dbName,username,password");
    $connex = new PDO("mysql:host=" . $host . ";dbname=" . $dbName . "", $username, $password);
    $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Ma reponse est fausse:' . $e->getMessage();
}

if ($connex) {
    # code...
    $sqlGet = "SELECT * FROM users";
    $req=$connex->prepare($sqlGet);
    $req->execute();

    $datas = $req->fetchAll(PDO::FETCH_ASSOC);


    foreach ($datas as $key => $data) {
        # code...
        echo $data["email"].", ";
    }

    // $sqlSelect = "INSERT * FROM table WHERE elmt";
}
