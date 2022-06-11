<?php 

require 'db.php';

$id = $_GET['id'];

  $sql = 'DELETE FROM `lists` WHERE `id` = ?';
  $query = $pdo->prepare($sql);
  $query->execute([$id]);

  header('Location: index.php');

 ?>