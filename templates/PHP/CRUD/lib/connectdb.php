<?php
$host = 'localhost';
$dbname = '';
$user = '';
$pass = '';


//make connection
$conn = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';

$db = new PDO($conn, $user, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);