<?php

$host = '5.2.87.140';
$db   = 'destekgi_db_ajax';
$user = 'destekgi_user';
$pass = 'qwe123rfv!';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $pass);

?>