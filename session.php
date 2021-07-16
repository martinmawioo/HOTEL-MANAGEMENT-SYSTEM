<?php
session_start();

if (!isset($_SESSION['id'])){
header('location:order.php');
}

$ses_id = $_SESSION['id'];

?>