<?php
session_start();
ob_start();
require 'db.php';
?>



<script type="text/javascript">
function validateForm()
{
var a=document.forms["addroom"]["type"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the room type");
  return false;
  }
var b=document.forms["addroom"]["rate"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the room rate");
  return false;
  }
var d=document.forms["addroom"]["desc"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the room description");
  return false;
  }
 var e=document.forms["addroom"]["image"].value;
if (e==null || e=="")
  {
  alert("Pls. browse an image");
  return false;
  }
/*if (c.which!=8 && c.which!=0 && (c.which<48 || c.which>57))
  {
  alert("The input U enter in Quantity field is not valid, only numbers are accepted (ex. 1, 2, 3, 4.......)");
  return false;
  }
if (b.which!=8 && b.which!=0 && (b.which<48 || b.which>57))
  {
  alert("The input U enter in Quantity field is not valid, only numbers are accepted (ex. 1, 2, 3, 4.......)");
  return false;
  }*/
}
</script>

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
<!--sa input that accept number only-->
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

<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">


  Name<input required name="Name" type="text" class="ed" /><br/>
  Description<input required name="Desc" type="text" class="ed" /><br/>
  Flavour 1<input required name="Flavour_1" type="text" class="ed" />
  Flavour 2<input required name="Flavour_2" type="text" class="ed" />
  Flavour 3<input required name="Flavour_3" type="text" class="ed" />
  Flavour 4<input required name="Flavour_4" type="text" class="ed" />
  <br/>
  Topping 1<input required name="Topping_1" type="text" class="ed" />
  Topping 2<input required name="Topping_2" type="text" class="ed" />
  Topping 3<input required name="Topping_3" type="text" class="ed" />
  Topping 4<input required name="Topping_4" type="text" class="ed" />
  Price<br/>
  <input required name="price" type="text" id="rate" class="ed" onkeypress="return isNumberKey(event)" />
  <br/>
  Available<br/>
    <input required name="Availability" type="radio" value="1" class="ed" onkeypress="return isNumberKey(event)" />YES
    <br/>
    <input required name="Availability" type="radio" value="0"  class="ed" onkeypress="return isNumberKey(event)" />No
  <br/>
  <input  disabled required name="Vendor" type="text" class="ed" value="<?= $_GET["vendor"]?>"/>


  <!-- Description<br/>
  <input name="desc" type="text" class="ed" /><br />
  Room Image: <br /><input type="file" name="image" class="ed"><br />  -->
  <input type="submit" name="Submit" value="save" id="button1" />

 
</form>
