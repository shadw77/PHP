<a href="index.html">Add</a>
<table border=2>
  <tr>
    <th>id</th>
    <th>First name</th>
    <th>Last name</th>
    <th>Address</th>
    <th>Username</th>
    <th>Password</th>
    <th>Department</th>
    <th>Code</th>
    <th>Action</th>




  </tr>

  <?php
   ini_set('display_startup_errors', 1);
   ini_set('display_errors',1);
   error_reporting(-1);

$connection = new pdo("mysql:host=localhost;dbname=ITI-CU","root","");
try{


   $data = $connection->query("select * from employee");
   while($row  =  $data->fetch(PDO::FETCH_ASSOC)){
   echo "<tr>";
   foreach($row as $key=>$value){
         echo "<td>$value</td>";
      }
      echo "<td>
      <a href='view.php?id={$row['id']}'>View</a>
      <a href='edit.php?id={$row['id']}'>Edit</a>
      <a href='delete.php?id={$row['id']}'>Delete</a>
      </td>";
      echo "</tr>";
   }
}
catch(PDOException $e){
  echo $e->getMessage();
}
 
 
 
 ?>

</table>




