<?php
session_start();
if(isset($SESSION["user_name"])){
    echo"Welcome".$_SESSION["user_name"]."Click here to<a href='logout.php'>Logout.";
}else{
    header("Location:index.php");
}
?>