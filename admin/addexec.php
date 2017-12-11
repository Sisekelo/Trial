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
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"../store/img/products/" . $_FILES["image"]["name"]);

			$name = $_POST['Name'];
			$Ingredient1 = $_POST['Ingredient1'];
			$Ingredient2 = $_POST['Ingredient2'];
			$Ingredient3 = $_POST['Ingredient3'];
			$Ingredient4 = $_POST['Ingredient4'];
			$price = $_POST['price'];
			
			$location=$_FILES["image"]["name"];
			$type=$_POST['type'];
			$rate=$_POST['rate'];
			$desc=$_POST['desc'];				

			$update = $mysqli ->query("INSERT INTO Oui_Deliver_Shop (Name, Ingredient_1, Ingredient_2,Ingredient_3,Ingredient_4,Price) 
				VALUES 
				('$name','$Ingredient1','$Ingredient2','$Ingredient3','$Ingredient4','$price')");
			

			
			/*$update=mysql_query("INSERT INTO internet_shop (name, price, description, img)
VALUES
('$type','$rate','$desc','$location')");*/
header("location: products.php");
			exit();
		
			
	


?>
