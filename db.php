<?php
$dsn = 'mysql:host=localhost;dbname=25ans';


$username = 'tddddde';

$password = 'root';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {

}
