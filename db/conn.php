<?php
$host = 'localhost';
$db = 'form_db';
$user = 'root';
$password ='root';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn,$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {
    // echo "<h1>No database found</h1>";
    throw new PDOException($e-> getMessage());
}
require_once 'crud.php';
$crud = new crud($pdo);