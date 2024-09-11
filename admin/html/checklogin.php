<?php
session_start();
$usernameform = $_POST['username'];
$passwordform = $_POST['password'];

include('connection.php');

$result = $conn->query("SELECT `id`, `username`, `password`, `name`, `dateofmembership`, `prelivigous` FROM `members` WHERE `username` = '$usernameform' and `password` ='$passwordform' ");

while ($row = $result->fetch_assoc()) {
    header("location:adminhomepage.php");
    $_SESSION['check'] = 'yes';
    $_SESSION['Name'] = $row['name'];
    die();
}


header("location:index.php?wrong");
die();
