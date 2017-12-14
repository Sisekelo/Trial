<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	include('../store/connect.php');
	$id=$_GET['id'];

	$result = $mysqli->query("SELECT * FROM Oui_Deliver_Shop where Id='$id'");


	/*$result = mysql_query("SELECT * FROM Oui_Deliver_Shop where id='$id'");*/
		while($row = mysqli_fetch_array($result))
			{
				/*$name=$row['Name'];
				$price=$row['Price'];
				$Ingredient1 = $row['Ingredient_1'];
				$Ingredient2 = $row['Ingredient_2'];
				$Ingredient3 = $row['Ingredient_3'];
				$Ingredient4 = $row['Ingredient_4'];
				$Availability = $row['Available'];*/

				$Name = $row['Name'];
				$Description = $row['Description'];
				$Flavour_1 = $row['Flavour_1'];
				$Flavour_2 = $row['Flavour_2'];
				$Flavour_3 = $row['Flavour_3'];
				$Flavour_4 = $row['Flavour_4'];

				$Topping_1 = $row['Topping_1'];
				$Topping_2 = $row['Topping_2'];
				$Topping_3 = $row['Topping_3'];
				$Topping_4 = $row['Topping_4'];

				$Price = $row['Price'];
				$Availability = $row['Available'];
			}
?>
<form action="execeditproduct.php" method="post">
<!-- 	<input type="hidden" name="roomid" value="<?php echo $id?>">
	Name:<br><input type="text" name="name" value="<?php echo $name ?>" class="ed"><br>
	Price:<br><input type="text" name="price" value="<?php echo $price ?>" class="ed"><br>
	Ingredient 1<br/>
	  <input name="Ingredient1" value="<?php echo $Ingredient1 ?>" type="text" class="ed" />
	  <br/>
	  Ingredient 2<br/>
	  <input name="Ingredient2" value="<?php echo $Ingredient2 ?>" type="text" class="ed" />
	  <br/>
	  Ingredient 3<br/>
	  <input name="Ingredient3" value="<?php echo $Ingredient3 ?>" type="text" class="ed" />
	  <br/>
	  Ingredient 4<br/>
	  <input name="Ingredient4" value="<?php echo $Ingredient4 ?>" type="text" class="ed" />
	  Available<br/>
	  <input required name="Availability" type="radio" value="1" class="ed" />YES
	  <br/>
	  <input required name="Availability" type="radio" value="0"  class="ed" />No
	  <br/>
	
	<input type="submit" value="Edit" id="button1"> -->

	  Name<input name="Name" type="text" value="<?php echo $Name ?>" class="ed" /><br/>
	  Description<input  name="Desc" value="<?php echo $Description ?>" type="text" class="ed" /><br/>
	  Flavour 1<input  name="Flavour_1" value="<?php echo $Flavour_1 ?>" type="text" class="ed" />
	  Flavour 2<input  name="Flavour_2" value="<?php echo $Flavour_2 ?>" type="text" class="ed" />
	  Flavour 3<input  name="Flavour_3" value="<?php echo $Flavour_3 ?>" type="text" class="ed" />
	  Flavour 4<input  name="Flavour_4" value="<?php echo $Flavour_4 ?>" type="text" class="ed" />
	  <br/>
	  Topping 1<input  name="Topping_1" value="<?php echo $Topping_1 ?>" type="text" class="ed" />
	  Topping 2<input  name="Topping_2" value="<?php echo $Topping_2 ?>" type="text" class="ed" />
	  Topping 3<input  name="Topping_3" value="<?php echo $Topping_3 ?>" type="text" class="ed" />
	  Topping 4<input  name="Topping_4" value="<?php echo $Topping_4 ?>" type="text" class="ed" />
	  Price<br/>
	  <input  name="price" type="text" id="rate" value="<?php echo $Price ?>" class="ed" onkeypress="return isNumberKey(event)" />
	  <br/>
	  Available<br/>
	    <input required name="Availability" type="radio" value="1" class="ed" onkeypress="return isNumberKey(event)" />YES
	    <br/>
	    <input required name="Availability" type="radio" value="0"  class="ed" onkeypress="return isNumberKey(event)" />No
	  <br/>
	  <input  disabled required name="Vendor" type="text" class="ed" value="<?php echo $roomid ?>"/>


	  <!-- Description<br/>
	  <input name="desc" type="text" class="ed" /><br />
	  Room Image: <br /><input type="file" name="image" class="ed"><br />  -->
	  <input type="submit" name="Submit" value="save" id="button1" />





</form>