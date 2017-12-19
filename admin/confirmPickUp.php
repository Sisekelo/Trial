<?php
session_start();
ob_start();
require 'db.php';

$id = $_GET["id"];
$Vendor = $_SESSION['Vendor'];

$number= $_GET["number"];
$numberPlus = '+'.$number;


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

	$SMSmessage = "Your Oui Deliver order has been picked up and is on its way";

	$received = "UPDATE Orders2 SET PickUp='1' WHERE Id='$id'";

	$mysqli->query($received) or die($mysqli->error());

	include ( "Nexmo-PHP-lib-master/NexmoMessage.php" ); 
	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('d6726b9a', '005e2f3453ccb56c');
	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( $numberPlus, 'MyApp', $SMSmessage);

	/*echo $nexmo_sms->displayOverview($info);*/

	header("location: https://ouideliver.xyz/Trial/admin/pickUp.php");
}


?>