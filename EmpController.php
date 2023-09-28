<?php
  ini_set('display_startup_errors', 1);
  ini_set('display_errors',1);
  error_reporting(-1);
$connection = new pdo("mysql:host=localhost;dbname=ITI-CU","root","");
echo "jjj";
// '{$_POST['id']}'
if(isset($_POST['add'])){
    echo 'hiiiiii from add';

// echo "insert into employee( 'id','first_name','last_name','address','country','gender','skills','username','password','department','code') values('{$_POST['firstName']}','{$_POST['lastName']}','{$_POST['address']}', "","" ,"", '{$_POST['username']}', '{$_POST['password']}','{$_POST['department']}','{$_POST['captcha']}')";
  $connection->query("insert into employee( first_name,last_name,address,username,password,
  department,code) values('{$_POST['firstName']}','{$_POST['lastName']}','{$_POST['address']}', 
  '{$_POST['username']}', '{$_POST['password']}','{$_POST['department']}','{$_POST['captcha']}')");
}
else if(isset($_POST['update'])){
    echo 'hiiiiii from updata';
$connection->query("update employee set first_name='{$_POST['firstName']}', last_name='{$_POST['lastName']}',address='{$_POST['address']}',username='{$_POST['username']}',password='{$_POST['password']}',department='{$_POST['department']}',code='{$_POST['captcha']}' where id = '{$_POST['id']}'");
}
header("Location:list.php");


?>