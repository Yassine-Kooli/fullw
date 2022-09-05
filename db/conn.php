<?php

      //develepment code connection
$host = 'localhost';
$db = 'form_db';
$user = 'root';
$password ='root';
$charset = 'utf8mb4';
 /*  
// romote connection
   $host = 'remotemysql.com';
    $db = 'XjNabWUcV6';
    $user = 'XjNabWUcV6';
    $password ='BdG29S28oM';
    $charset = 'utf8mb4';
*/

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn,$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} catch(PDOException $e) {
    // echo "<h1>No database found</h1>";
    throw new PDOException($e-> getMessage());
}
require_once 'crud.php';
require_once 'user.php';
$crud = new crud($pdo);
$user = new user($pdo);
$user->insertUser("admin","password");


?>