<?php
session_start();
ob_start();
require 'db.php';

$id = $_GET["id"];
$Vendor = $_SESSION['Vendor'];


/*echo $numberPlus."<br>";
echo $number;*/

//check Id

$queryCheck = "SELECT PickUp from Orders2 where Id='$id'";

$check = $mysqli->query($queryCheck) or die($mysqli->error());
$checkFetch = $check->fetch_assoc();     
$checkFinal = $checkFetch['PickUp'];




if($checkFinal == 1){
   
      $message = "This order has already been picked up";
      echo "<script type='text/javascript'>alert('$message');</script>";

    
}
else{


	//update ready for pickup

	$received = "UPDATE Orders2 SET PickUp='1' WHERE Id='$id'";

	$mysqli->query($received) or die($mysqli->error());

	header("location: https://ouideliver.xyz/Trial/admin/index.php?vendor=$Vendor");


}


?>