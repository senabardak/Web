<?php
require_once('../configuration.php');


 $id = $_GET['vote'];
 $ip=$_SERVER['REMOTE_ADDR']; 



 	$ip_sql =$db->query("SELECT ip_add from Vote_IP where comp_id='$id' and ip_add='$ip'");
 	$count = mysqli_num_rows($ip_sql);
 	if($count == 0){

	$sorgum = $db->query ("UPDATE compliments set vote=vote + 1 where id='$id'");
	$sorgum_= $db->query ("INSERT INTO Vote_IP (comp_id,ip_add) values ('$id','$ip')");

echo "  <script type='text/javascript'>  
alert('Talebiniz Alınmıştır, Teşekkürler'); 
</script> ";

header("Refresh: 0; url=http://localhost/quality/kullanici/index.php");
}
else{
	echo "  <script type='text/javascript'>  
alert('Bunu zaten oyladınız'); 
</script> ";

header("Refresh: 0; url=http://localhost/quality/kullanici/index.php");

}




?>