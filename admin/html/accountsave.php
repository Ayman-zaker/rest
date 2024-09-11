<?php
print_r($_POST);
$accountname = $_POST['accountname'];
$accountamount = $_POST['accountamount'];
$inorout = $_POST['inorout'];
$accountdate = $_POST['accountdate'];
$accountdesc = $_POST['accountdesc'];

include('connection.php');

$conn->query("INSERT INTO `account`( `accountname`, `accountamount`, `inorout`, `accountdate`, `accountdesc`) VALUES ('$accountname','$accountamount','$inorout','$accountdate','$accountdesc');");
header("location:accounts.php?allgood");