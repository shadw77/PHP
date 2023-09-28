<ul>
<?php
  ini_set('display_startup_errors', 1);
  ini_set('display_errors',1);
  error_reporting(-1);
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $connection = new pdo("mysql:host=localhost;dbname=ITI-CU","root","");

  try{ 
      $data = $connection->query("select * from employee where id=$id");
      $row  =  $data->fetch(PDO::FETCH_ASSOC);
      foreach($row as $value){
            echo "<li>$value</li>";
         } 
      }
   
   catch(PDOException $e){
     echo $e->getMessage();
   }
        
}

?></ul>