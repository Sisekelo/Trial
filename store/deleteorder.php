<?php
include('connect.php');
if($_GET['id'])
{
	$id=$_GET['id'];

$mysqli->query("DELETE from orders WHERE id='$id'");

 //$sql = "DELETE from orders WHERE id='$id'";
 header("location: index.php");
 //mysql_query( $sql);
}

?>