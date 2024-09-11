<?php
session_start();
include ("frontcode.php");
include ("meno.php");
?>

<h5 class="mb-0">Basic Layout</h5></div>
<div class="card-body">
Admin page
<?php  

echo "Welcome ".$_SESSION['Name'];
?>
                  

<?php include("rear.php");?>