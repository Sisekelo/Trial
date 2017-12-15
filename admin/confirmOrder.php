<?php
session_start();
ob_start();
require 'db.php';

$number= '+'.$_GET["number"];
$id = $_GET["id"];

//check Id

$queryCheck = "SELECT Confirm from Orders2 where Id='$id'";

$check = $mysqli->query($queryCheck) or die($mysqli->error());
$checkFetch = $check->fetch_assoc();     
$checkFinal = $checkFetch['Confirm'];




if($checkFinal == 1){
   
      $message = "This order has already been confirmed";
      echo "<script type='text/javascript'>alert('$message');</script>";
    
}
else{

	//check if this person has ordered before
    $first = $mysqli->query("SELECT * FROM Orders2 WHERE Buyer_Number='$number'") or die($mysqli->error());
    if($first->num_rows == 0){
        $referal = $mysqli->query("SELECT Referer FROM details WHERE number='$number'") or die($mysqli->error());
        
         $user = $referal->fetch_assoc();
        
        $emailReferer = $user['Referer'];
        
        if($emailReferer != ""){
             $givepoints =$mysqli->query("UPDATE details SET Points=Points+1 WHERE email='$emailReferer'") or die($mysqli->error());
        }
    }

    //Check if person has enough points for discount

	$PointsCheck = "SELECT * from details where number='$number'";
	$CheckQuery = $mysqli->query($PointsCheck) or die($mysqli->error());
	$checkFetch = $CheckQuery->fetch_assoc();
	$checkPoints = $checkFetch['Points'];

	if($checkPoints > 10){ // if that person has more than 10 points

		$points = $checkPoints - 10;
		$mysqli->query("UPDATE details SET Points='$points' WHERE number='$number'") or die($mysqli->error);

		$SMSmessage = "Your order has just been confirmed.\n You just got a 100 Rps discount on your meal.\n Keep ordering to earn more points";

		$mysqli->query("UPDATE Orders2 SET Discount='1' WHERE Id='$id'") or die($mysqli->error);

	}	
	else{//just give them an extra point
		$mysqli->query("UPDATE details SET Points=Points+1 WHERE number='$number'") or die($mysqli->error);
		
	}

	//update order

	$received = "UPDATE Orders2 SET Confirm='1' WHERE Id='$id'";

	$mysqli->query($received) or die($mysqli->error());


	include ( "Nexmo-PHP-lib-master/NexmoMessage.php" ); 
	/*$conmessage = 'Your order has just been confirmed. It is coming soon ;) Home: http://ouideliver.xyz/index.php';*/
	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('d6726b9a', '005e2f3453ccb56c');
	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( $number, 'MyApp',$SMSmessage);

	echo "<script type='text/javascript'>alert('Orderconfirmed');</script>";

}


?>