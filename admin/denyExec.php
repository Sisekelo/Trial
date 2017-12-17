<?php
session_start();
ob_start();
require 'db.php';

$id = $_POST['ID'];
$number = $_POST['Number'];
$Reason = $_POST['Reason'];

 $givepoints =$mysqli->query("UPDATE Orders2 SET Deny='1' WHERE Id='$id'") or die($mysqli->error());


/*echo $numberPlus."<br>";
echo $number;*/

//check Id

?>