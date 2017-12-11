<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../store/connect.php');

$id=$_GET['id'];

$mysqli->query("DELETE from Oui_Deliver_Shop where id='$id'");
/* $sql = "delete from internet_shop where id='$id'";
 mysql_query( $sql);*/

header("location: products.php");

?>