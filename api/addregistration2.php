<?php
require_once('../configuration.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
	
$uName = $_POST["uName"];
$uSurname = $_POST["uSurname"];
$uEmail = $_POST["uEmail"];
$uTelno = $_POST["uTelno"];
$sql = $db->query ("insert into user2 values (NULL,'".$uName."','".$uSurname."','".$uEmail."','".$uTelno."','".$uPassword."')");
}
?>

