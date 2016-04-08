<?php
require_once('../configuration.php'); //include db connection
if($_GET){

$topic = $_GET["topic"];
$desc = $_GET["desc"];
$typeid = '1';
$coorx = $_GET["coorx"];
$userid = '1';
$coory = $_GET["coory"];
$address = $_GET["address"];
$img = " ";
$vote = 0;
if($img != " "){
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
file_put_contents('/../imgs/image.png', $data);
}
$query = $db->query("insert into compliments values (NULL,'".$userid."','".$typeid."','".$coorx."','".$coory."',Now(),'".$desc."','".$topic."','Onaylanmamış','".$photo."','".$address."','".$vote."')");


if($db->affected_rows > 0){
	$arr = array ('success'=> 'yes');
	echo json_encode($arr);
	 
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