<?php
require_once('../configuration.php'); //include db connection
if($_GET){

$id = $_GET["id"]; //get id from web

$sql = "update compliments set vote = (vote+1) where id = '".$id."'";
$result = $db->query($sql); // set vote + 1 selected id

// print result in json format
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