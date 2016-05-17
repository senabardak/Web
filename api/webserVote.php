<?php
require_once('../configuration.php'); 
if($_GET){

$id = $_GET["id"]; 

$sql = "update compliments set vote = (vote+1) where id = '".$id."'";
$result = $db->query($sql); 


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