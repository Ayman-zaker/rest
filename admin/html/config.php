<?php 
session_start();
if(!isset($_SESSION['check']))
{
    header("location:login.php?fromup");
    die();
}

?>



