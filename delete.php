<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'DELETE FROM inscriptions WHERE id=:id';
$statement = $connection->prepare($sql);
if ($statement->execute([':id' => $id])) {
  header("Location: index.php");
}