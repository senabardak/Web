<?php
//mysqli connection string 
try {
     $db = new mysqli("us-cdbr-iron-east-03.cleardb.net", "bf4804bed08816", "ed0017ea", "ad_976319092ebfd52");
	 $db->set_charset("utf8");
	 
} catch ( Exception $e ){
     print $e->getMessage();
}
?>