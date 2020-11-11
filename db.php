<?php
$dsn = 'mysql:host=localhost;dbname=25ans';
$username = 'tot';
$password = 'root';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}
