<?php
require_once('../configuration.php'); //include db connection
if($_GET){
	//get all variables
$id = $_GET["id"];
$topic = $_GET["konu"];
$desc = $_GET["aciklama"];
$date = $_GET["tarih"]." ".$_GET["zaman"];
$datetime = date("Y-m-d H:i:s", strtotime($date)); 
$address = $_GET["adres"];
$coorx = $_GET["latitude"];
$coory = $_GET["longitude"];

$sql = "update compliments set topic = '".$topic."', date='".$datetime."',address='".$address."',coorx='".$coorx."',coory='".$coory."',`desc`='".$desc."' where id = '".$id."'";
$result = $db->query($sql) or exit("Error code ({$db->errno}): {$db->error}"); //update database if occurs error, print error

if($db->affected_rows > 0){	
	$arr = array ('success'=> 'yes');
	echo json_encode($arr);
	header('Location: ' . $_SERVER['HTTP_REFERER']);	 
}
else{
	$arr = array ('success'=> 'no');
	echo json_encode($arr);	
}
}
else{
	$arr = array ('success'=> 'no');
	echo json_encode($arr);
}
?>