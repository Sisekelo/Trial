<?php
	require_once('../auth.php');

	$Vendor =$_SESSION['Vendor'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard | Modern Admin</title>
<link rel="stylesheet" type="text/css" href="css/960.css" />
<link rel="stylesheet" type="text/css" href="css/reset.css" />
<link rel="stylesheet" type="text/css" href="css/text.css" />
<link rel="stylesheet" type="text/css" href="css/blue.css" />
<link type="text/css" href="css/smoothness/ui.css" rel="stylesheet" />  
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>

<body>
<!-- WRAPPER START -->
<div class="container_16" id="wrapper">	
<!-- HIDDEN COLOR CHANGER -->      
      <div style="position:relative;">
  	<!--LOGO-->
	<div class="grid_8" id="logo">GPST Administration user = <?= $Vendor ?></div>
    <div class="grid_8">
<!-- USER TOOLS START -->
      <div id="user_tools"><span><a href="../index.php">Logout</a></span></div>
    </div>
<!-- USER TOOLS END -->    
<div class="grid_16" id="header">
<!-- MENU START -->
<div id="menu">
	<ul class="group" id="menu_group_main">
		<li class="item first" id="one"><a href="index.php" class="main"><span class="outer"><span class="inner dashboard">Dashboard</span></span></a></li>
		<li class="item middle" id="four"><a href="message.php" class="main"><span class="outer"><span class="inner media_library">Messages</span></span></a></li>  
		<li class="item last" id="eight"><a href="rooms.php" class="main current"><span class="outer"><span class="inner settings">Products</span></span></a></li>        
    </ul>
</div>
<!-- MENU END -->
</div>


<!-- CONTENT START -->
    <div class="grid_16" id="content">
    <!--  TITLE START  --> 
    <div class="grid_9">
    <h1 class="dashboard">Products</h1>
    </div>
    <div class="clear">
    </div>
    <!--  TITLE END  -->    
    <!-- #PORTLETS START -->
    <div id="portlets">
    
	<!--  SECOND SORTABLE COLUMN END -->
    <div class="clear"></div>
    <!--THIS IS A WIDE PORTLET-->
		<div class="portlet">
			<div class="portlet-header fixed"><img src="images/icons/user.gif" width="16" height="16" alt="Latest Registered Users" /> 
			<label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" />
			<a rel="facebox" href="addproduct.php?vendor=<?= $Vendor ?>">Add Product</a>
			</div>
			<div class="portlet-content nopadding">
			<form action="" method="post">
			
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<!-- <th  style="border-left: 1px solid #C1DAD7"> Type </th> -->
								<!-- <th>Id</th> -->
								<th> Name </th>
								<th> Description </th>
								<th> Price </th>
								<th> Flavour 1</th>
								<th> Flavour 2 </th>
								<th> Flavour 3 </th>
								<th> Flavour 4 </th>
								<th> Topping 1 </th>
								<th> Topping 2 </th>
								<th> Topping 3 </th>
								<th> Topping 4 </th>
								<th> Availability </th>
								<th> Edit </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../store/connect.php');
							$result = $mysqli -> query("SELECT * FROM Oui_Deliver_Shop ORDER BY Available DESC");
							/*$result = mysql_query("SELECT * FROM internet_shop");*/
							while($row = mysqli_fetch_array($result))
								{
									/*echo '<tr class="record">';*/
									/*echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['Id'].'</td>';*/
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['Name'].'</td>';
									echo '<td><div align="left">'.$row['Description'].'</div></td>';
									echo '<td><div align="left">'.$row['Price'].'</div></td>';
									echo '<td><div align="left">'.$row['Flavour_1'].'</div></td>';
									echo '<td><div align="left">'.$row['Flavour_2'].'</div></td>';
									echo '<td><div align="left">'.$row['Flavour_3'].'</div></td>';
									echo '<td><div align="left">'.$row['Flavour_4'].'</div></td>';
									echo '<td><div align="left">'.$row['Topping_1'].'</div></td>';
									echo '<td><div align="left">'.$row['Topping_2'].'</div></td>';
									echo '<td><div align="left">'.$row['Topping_3'].'</div></td>';
									echo '<td><div align="left">'.$row['Topping_4'].'</div></td>';
									echo '<td><div align="left">'.$row['Available'].'</div></td>';
									/*echo '<td><a rel="facebox" href="editproductimage.php?id='.$row['id'].'"><img src="../store/img/products/'.$row['img'].'" width="80" height="50"></a></td>';*/
									echo '<td><div align="center"><a rel="facebox" href="editproductetails.php?id='.$row['Id'].'">edit</a> | <a href="deleteproduct.php?id='.$row['Id'].'" title="Click To Delete">delete</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
			</form>
			</div>
		</div>
<!--  END #PORTLETS -->  
   </div>
    <div class="clear"> </div>
<!-- END CONTENT-->    
  </div>
<div class="clear"> </div>

</div>
</div>
<!-- WRAPPER END -->
<!-- FOOTER START -->
<div class="container_16" id="footer">
Website Administration by <a href="../index.htm">WebGurus</a></div>
<!-- FOOTER END -->
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteproduct.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>
