<?php
require_once('../configuration.php'); //include db connection
if($_GET){
$email = $_GET["email"];
$password = $_GET["password"];
$sql = "select * from users where password = '".$password."' and email = '".$email."'";
$result = $db->query($sql); // run query for inputs

//if row count > 0 return user info in JSON Format
if(mysqli_num_rows($result) > 0){
	
	$row = $result->fetch_object();
	$arr = array ('name'=> $row->name,'surname'=> $row->surname,'id'=> $row->id,'email'=> $row->email);
	echo json_encode($arr);	
	 
}
else{
	$arr = array ('success'=> 'no2');
	echo json_encode($arr);
}
}
else{
	$arr = array ('success'=> 'no');
	echo json_encode($arr);
}
?>