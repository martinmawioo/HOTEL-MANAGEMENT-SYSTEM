<?php
include('admin/connect.php');
$get_id=$_GET['id'];
mysql_query("delete from order_details where orderid='$get_id'")or die(mysql_error());
header('location:user_cart.php');
?>
