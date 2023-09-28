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
    
      }
   
   catch(PDOException $e){
     echo $e->getMessage();
   }
        
}

?>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Document</title>
    <style>
      form * {
        display: block;
        margin: 10px;
      }
      * {
        font-size: 25px;
      }
      div * {
        display: inline;
      }
    </style>
  </head>
  <body>
    <form action="EmpController.php" method="post">
        <input type="text" value="<?=$row['id']?>" name="id" hidden>
      <label>
        First Name
        <input type="text" name="firstName" value="<?=$row['first_name']?>"/>
      </label>
      <label>
        Last Name
        <input type="text" name="lastName" value="<?=$row['last_name']?>" />
      </label>
      <!-- <div style="display: flex;"> -->
      <label style="text-align: start">
        Address
        <textarea name="address" id="" cols="20" rows="5" value="<?=$row['address']?>"></textarea>
      </label>
      <!-- </div> -->
     
     
      <label>
        Username
        <input type="text" name="username" value="<?=$row['username']?>" />
      </label>
      <label>
        Password
        <input type="password" name="password" value="<?=$row['password']?>" />
      </label>
      <label>
        Department
        <input type="text" value="OpenSource" name="department" value="<?=$row['department']?>"  />
      </label>
      <!-- <label for=""id="code">Sh68Sa</label>     
            <p>Please Insert the code in the below box</p>
            <input type="text"  name="code"> -->
      <label>Captcha Code</label>
      <img src="captcha.php" alt="PHP Captcha" />
      <label>Enter Captcha</label>
      <input type="text" class="form-control" name="captcha" id="captcha" value="<?=$row['code']?>" />

      <div>
        <button
          type="submit"
          id="btn"
          name="update"
        >
          Update
        </button>
        <button type="reset">Reset</button>
      </div>
    </form>
  
  </body>
</html>
