<?php
$dsn = 'mysql:host=localhost;dbname=25ans';


$username = 'tddllllll';

$password = 'root';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}
