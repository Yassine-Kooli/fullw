<?php
$host = 'localhost';
$db = 'form_db';
$user = 'root';
$password ='root';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try{
$pdo = new PDO($dsn,$user,$password);
echo "hello data base";
}catch(PDOException $e){
    echo "<h1>No database found</h1>";
//throw new PDOException($e-> getMessage());

}