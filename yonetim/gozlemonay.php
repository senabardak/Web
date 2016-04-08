<?php
require_once('../configuration.php'); //include db connection
if($_GET){
$id = $_GET["id"];
$sql = "update compliments set status = 'Onaylanmış' where id = '".$id."'";
$result = $db->query($sql);

if($db->affected_rows > 0){
	
	$arr = array ('success'=> 'yes');
	echo json_encode($arr);
	header('Location: ' . $_SERVER['HTTP_REFERER']); //return back
	 
}
else{
	$arr = array ('success'=> 'no');
	echo json_encode($arr);
	header('Location: ' . $_SERVER['HTTP_REFERER']);  //return back
}
}
else{
	$arr = array ('success'=> 'no');
	echo json_encode($arr);
	header('Location: ' . $_SERVER['HTTP_REFERER']);  //return back
	
}
?>