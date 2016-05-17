<? php
require_once('../configuration.php'); 

	$name=$_POST['name']; 
	$surname=$_POST['surname'];
	$email=$_POST['email'];
	$telno=$_POST['telno'];
	$password=$_POST['password'];
	$usergroup=$_POST['usergroup']; 

	mysql_query("set names 'utf8'");
	$encrypted_password = $hash["encrypted"]; // encrypted password
	$result = mysql_query("Select name,username,email,telno,password,usergroup FROM users")
	or die(mysql_error());

	$json = array();
	while($row = mysql_fetch_array($result)) {

		$json[] = array{

		'Name' ==> $row['name'],
		'Surname' ==> $row['surname'],
		'E-Mail' ==> $row['email'],
		'Tel-No' ==> $row['telno'],
		'Password' ==> $row['password'],
		'usergroup' ==> $row['usergroup'],
	};
		}

		$jsonS = json_encode($json,JSON_UNESCAPED_UNICODE);
		echo $jsonS;


?>