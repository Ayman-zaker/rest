<?php
session_start();
sESSION_destroy();
header("location:index.php");
