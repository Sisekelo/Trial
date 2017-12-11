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
				$name=$row['Name'];
				$price=$row['Price'];
				$Ingredient1 = $row['Ingredient_1'];
				$Ingredient2 = $row['Ingredient_2'];
				$Ingredient3 = $row['Ingredient_3'];
				$Ingredient4 = $row['Ingredient_4'];
				$Availability = $row['Available'];
			}
?>
<form action="execeditproduct.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id?>">
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
	
	<input type="submit" value="Edit" id="button1">
</form>