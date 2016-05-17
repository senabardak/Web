<?php

require_once('../configuration.php');

if($_SERVER['REQUEST_METHOD']=="POST"){

$uName = $_POST['uName'];
$uPassword = $_POST['uPassword'];



$sql = $db->query("Select * From user2 Where uEmail ='".$uName."' and Password='".$uPassword."'");

if($sql){
	echo json_encode($response);
}
else
	echo json_encode($response);
}
}

?>