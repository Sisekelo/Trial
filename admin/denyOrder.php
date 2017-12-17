<?php
session_start();
ob_start();
require 'db.php';

$number= $_GET["number"];
$numberPlus = '+'.$number;
$numberPlus = str_replace(' ', '', $numberPlus);
$id = $_GET["id"];
$Vendor = $_GET["Vendor"];

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

<form action="denyExec.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">

  Vendor<input   name="Vendor" type="text" class="ed" value="<?= $Vendor ?>" /><br/>
  Order ID<input   name="ID" type="text" class="ed" value="<?= $id ?>" /><br/>
  Client_number<input  name="Number" type="text" class="ed" value="<?= $numberPlus ?>" /><br/>
  Reason for denying order <br><input required name="Reason" type="textarea" class="ed" /><br/>

  <input type="submit" name="Submit" value="Deny order" id="button1" />

 
</form>
