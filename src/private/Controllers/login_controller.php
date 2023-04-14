<?php
require_once "../Config/config.php";
$user = User::find_by_Email($_POST["email"]);
if ($user->password==$_POST["password"]){
    header("location: ../../private/View/login/logout.php");
}else{
    header("location: ../../private/View/login/login.php?msg=invalid");
}
?>