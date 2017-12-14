<?php
include('connect.php');
$id=$_GET['id'];
$result2 = $mysqli->query("SELECT * FROM oui_deliver_shop WHERE Id='$id'");
//$result2 = mysql_query("SELECT * FROM internet_shop WHERE id='$id'");
while($row2 = mysqlI_fetch_array($result2))
	{
	$price=$row2['Price'];
	$name=$row2['Name'];
	echo '<img src="img/products/'.$row2['Pic'].'" width="109" height="109" class="pngfix" /><br>';
	echo '<span style="color:#B80000; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">'.$row2['Name'].'</span><br>';
	//echo '<span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">'.$row2['description'].'</span>';
	}
?>
<script type="text/javascript" language="Javascript">
	var sum=0;
	price = document.frmOne.select1.value;
	document.frmOne.txtDisplay.value = price;
    function OnChange(value){
		
		price = document.frmOne.select1.value;
		quantity = document.frmOne.select2.value;
        sum = price * quantity;
		
		document.frmOne.txtDisplay.value = sum;
    }
</script>
<SCRIPT language=Javascript>
			  <!--
			  function isNumberKey(evt)
			  {
				 var charCode = (evt.which) ? evt.which : event.keyCode
				 if (charCode > 31 && (charCode < 48 || charCode > 57))
					return false;

				 return true;
			  }
			  //-->
		</SCRIPT>
<form NAME = "frmOne" action="initiateorder.php" method="post" enctype="multipart/form-data">

  <input type="" name="Ingredient">


	<input type="hidden" name="transnum" value="<?php echo $_GET['trnasnum'] ?>" />
	<INPUT TYPE = "Text" name = "select1" size = "35" value ="<?php echo $price ?>" style="display:none;">
	<INPUT TYPE = "Text" name = "pname" size = "35" value ="<?php echo $name ?>" style="display:none;">
    <br>
    <span style="font-size:11px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">Quantity : </span>
	<input type="text" name="select2" onkeyup="OnChange(this.value)" onKeyPress="return isNumberKey(event)" style="width:60px;" /> 
	
	 <span style="color:#B80000; font-size:16px; font-weight:bold; font-family:Arial, Helvetica, sans-serif;">=</span> 
    <INPUT TYPE = "Text" name = "txtDisplay" size = "35" value ="" style="border:#999999 solid 1px; background-color:#FFF; width:100px; height:20px;" readonly><br>
    <span style="font-size:10px; font-family:Arial, Helvetica, sans-serif; text-align:left; line-height:17px;color:#000000;">
    In the note area you can specify what you want(<?=$row2['Pic']?>)
    <br />
    <?php
    if($name=='T-shirt')
    {
    ?>
    *format for tshirt(size, color, qty)<br />
    &nbsp;&nbsp;tshirt available size(small, medium, large, xl, xxl)<br />
    &nbsp;&nbsp;tshirt color(blue, red, black, white, green)<br />
   <?php
   }
   ?>
   <?php
    if($name=='PVC Bag Tag')
    {
    ?>
    *format for PVC Bag Tag(size)<br />
    &nbsp;&nbsp;PVC Bag Tag available size(wallet size, a4 size, a5 size)<br />
    <?php
   }
   ?>
   <?php
    if($name=='Button Pins')
    {
    ?>
    *format for Button Pins(size)<br />
    &nbsp;&nbsp;Button Pins available size(small, Big)<br />
    <?php
   }
   ?>
   <?php
    if(($name=='Keychain') || ($name=='keychain'))
    {
    ?>
    *format for Keychain(Shapes)<br />
    &nbsp;&nbsp;Keychain available shapes(Butterfly, heart, circle, square, tshirt)<br />
	<?php
   }
   ?>
   <?php
    if(($name=='Magic Mug') || ($name=='Mug') || ($name=='Thumbler'))
    {
    ?>
    *format for thumbler, mugs ang magic mugs(put none)
	<?php
   }
   ?>
    <br />
    </span>
    Note:<input type="text" name="note" class="ed">
	<br>
	Design:<input type="file" name="image" class="ed">
	<br>
	<input type="submit" value="Add To Cart" style="padding:10px; border-radius:15px; background-color:green; border:none; color:#ffffff; font-weight:bold; border: 1px solid #000000"/>
</form>