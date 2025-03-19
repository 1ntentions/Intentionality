<?php
  
$host = 'localhost:8889';
$db_name = 'intentionality';
$db_user = 'root';
$db_pass = 'root';
$charset = 'utf8mb4';
  
$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $db_user, $db_pass, $options);
?>