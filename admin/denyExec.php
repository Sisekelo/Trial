<?php
session_start();
ob_start();
require 'db.php';

$id = $_POST['ID'];
$number = $_POST['Number'];
$Reason = $_POST['Reason'];
$Vendor = $_POST['Vendor'];

$message = "".$Vendor." denied your order because: ".$Reason."";

 $givepoints =$mysqli->query("UPDATE Orders2 SET Deny='1' WHERE Id='$id'") or die($mysqli->error()); //update db saying we denied order

//send SMS to user

	include ( "Nexmo-PHP-lib-master/NexmoMessage.php" ); 
	/*$conmessage = 'Your order has just been confirmed. It is coming soon ;) Home: http://ouideliver.xyz/index.php';*/
	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('d6726b9a', '005e2f3453ccb56c');
	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( $number, 'MyApp', $message);

	/*echo $nexmo_sms->displayOverview($info);*/

	header("location: https://ouideliver.xyz/Trial/admin/index.php?vendor=$Vendor");

?>