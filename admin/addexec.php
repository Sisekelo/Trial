<?php
include('../store/connect.php');





	/*if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{*/
	/*$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
	$image_size= getimagesize($_FILES['image']['tmp_name']);*/

	
		/*if ($image_size==FALSE) {
		
			echo "That's not an image!";
			
		}else{*/
			
			/*move_uploaded_file($_FILES["image"]["tmp_name"],"../store/img/products/" . $_FILES["image"]["name"]);*/

			$Name = $_POST['Name'];
			$Description = $_POST['Desc'];
			$Flavour_1 = $_POST['Flavour_1'];
			$Flavour_2 = $_POST['Flavour_2'];
			$Flavour_3 = $_POST['Flavour_3'];
			$Flavour_4 = $_POST['Flavour_4'];

			$Topping_1 = $_POST['Topping_1'];
			$Topping_2 = $_POST['Topping_2'];
			$Topping_3 = $_POST['Topping_3'];
			$Topping_4 = $_POST['Topping_4'];

			$price = $_POST['price'];
			$Availability = $_POST['Availability'];
			$Vendor = $_POST['Vendor'];
			
			/*$location=$_FILES["image"]["name"];*/
			/*$type=$_POST['type'];
			$rate=$_POST['rate'];
			$desc=$_POST['desc'];	*/			

			$update = $mysqli ->query("INSERT INTO Oui_Deliver_Shop (Name, Flavour_1,Flavour_2,Flavour_3,Flavour_4,Vendor,Topping_1,Topping_2,Topping_3,Topping_4,Price,Description,Available) 
				VALUES 
				('$Name','$Flavour_1','$Flavour_2','$Flavour_3','$Flavour_4','$Vendor','$Topping_1','$Topping_2','$Topping_3','$Topping_4','$price','$Description','$Availability')");
			

			
			/*$update=mysql_query("INSERT INTO internet_shop (name, price, description, img)
VALUES
('$type','$rate','$desc','$location')");*/
header("location: products.php?vendor=".$Vendor."");*/
			exit();
		
			
	


?>
