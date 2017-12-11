<?php
	include('../store/connect.php');

	



			$roomid = $_POST['roomid'];
			echo $roomid;
			$name = $_POST['name'];
			echo $name;
			$Ingredient1 = $_POST['Ingredient1'];
			echo $Ingredient1;
			$Ingredient2 = $_POST['Ingredient2'];
			echo $Ingredient2;
			$Ingredient3 = $_POST['Ingredient3'];
			echo $Ingredient3;
			$Ingredient4 = $_POST['Ingredient4'];
			echo $Ingredient4;
			$price = $_POST['price'];
			echo $price;
			$Availability = $_POST['Availability'];
			echo $Availability;
			
			/*$location=$_FILES["image"]["name"];*/
			/*$type=$_POST['type'];
			$rate=$_POST['rate'];
			$desc=$_POST['desc'];	*/			

			$mysqli->query("UPDATE Oui_Deliver_Shop  SET Name = '$name', Price = '$price', Ingredient_1 = '$Ingredient1', Ingredient_2 = '$Ingredient2', Ingredient_3 = '$Ingredient3', Ingredient_4 = '$Ingredient4',Available ='$Availability' WHERE Id='$roomid'");
			
	/*$roomid = $_POST['roomid'];
	$type=$_POST['type'];
	$rate=$_POST['rate'];
	$description=$_POST['description'];
	mysql_query("UPDATE internet_shop SET name='$type', price='$rate', description='$description' WHERE id='$roomid'");*/
	header("location: products.php");
?>