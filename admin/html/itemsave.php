<?php 
include('connection.php');
$itemname=$_POST['itemname'];
$price=$_POST['price'];
$expiredate=$_POST['expiredate'];
$types=$_POST['types'];
$quntity=$_POST['quntity'];

$conn->query("INSERT INTO `items`( `name`, `price`, `expiredate`, `types`, `quntity`) VALUES ('$itemname','$price','$expiredate','$types','$quntity')");
header("location:item.php?allgood");
