<?php
session_start();
$captcha = $_POST["captcha"];
$captchaUser = filter_var($_POST["captcha"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
// if($_SESSION['CAPTCHA_CODE'] == $captchaUser)
{
// to display errors
ini_set('display_startup_errors', 1);
ini_set('display_errors',1);
error_reporting(-1);

if($_POST["gender"]=="female"){
    echo "Thanks Miss. ".$_POST["firstName"]." ".$_POST["lastName"]."<br>";
}
else{
    echo "Thanks Mr. ".$_POST["firstName"]." ".$_POST["lastName"]."<br>";

}
// echo "Please Review Your Information:"."<br>";
// echo "Name: ".$_POST["firstName"]." ".$_POST["lastName"]."<br>";
// echo "Address: ".$_POST["address"]."<br>";
// echo "Your Skills: "."<br>";
// $skill = $_POST['skill'];
// foreach($skill as $sk){
//     echo $sk.", ";
// }
// echo "<br>Department: ".$_POST["department"];

$data= implode(",", $_POST);
$file= fopen("test.txt" , "a");
fwrite($file,"\n".$data);
fclose($file);

// file_put_contents("test.txt","\n".$data,FILE_APPEND);
header("Location:list.php");
}
// else{
//     echo 'incorrect captcha';
// }

?>