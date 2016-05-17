<?php
require_once('../configuration.php'); 

if($_SERVER['REQUEST_METHOD']=="POST"){
$uName = $_POST["uName"];
$uSurname = $_POST["uSurname"];
$uEmail = $_POST["uEmail"];
$uTelno = $_POST["uTelno"];
$uPassword = $_POST["uPassword"];




$sql = $db->query ("insert into user2 values (NULL,'".$uName."','".$uSurname."','".$uEmail."','".$uTelno."','".$uPassword."')");


if($sql){
	$response["message"] = "User Successfully Added!";
	echo json_encode($response);
}
else
	echo json_encode($response);
}
?>