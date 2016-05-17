<?php
//mysqli connection string 
error_reporting(E_ALL ^ E_NOTICE);
try {
     $db = new mysqli("us-cdbr-iron-east-03.cleardb.net", "b46327d2f15015", "b4f0e631", "ad_cd2a422a2bab758");
	 $db->set_charset("utf8");
	 
} catch ( Exception $e ){
     print $e->getMessage();
}
?>