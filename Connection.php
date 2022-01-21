<?php
$host = "localhost";
$db = "banco_PDO";
$user = "root";
$pass = "";

try{
    $pdo = new PDO("mysql:host=".$host.";dbname=".$db, $user,$pass);
    return $pdo;
}catch(PDOException $e){
    echo $e->getMessage();
}

?>