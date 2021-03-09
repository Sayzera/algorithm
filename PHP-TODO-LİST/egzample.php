<?php 

session_start();
$id = $_GET['id'];

 
 unset($_SESSION['names'][$id]);
header('location:http://localhost/TODO-LİST');

 
?>