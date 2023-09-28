<?php
  ini_set('display_startup_errors', 1);
  ini_set('display_errors',1);
  error_reporting(-1);
  $connection = new pdo("mysql:host=localhost;dbname=ITI-CU","root","");
$stm = $connection->prepare("delete from employee where id=?");
$stm->execute([$_GET['id']]);
header("Location:list.php");

?>