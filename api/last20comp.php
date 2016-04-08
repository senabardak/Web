<?php
require_once('../configuration.php'); //include db connection
$query =  $db->stmt_init();
$query = $db->query('select * from users u left join compliments c on c.userid=u.id order by c.id desc');
$arr = array();
//create array for list complains in JSON Format
$arr['observations'] = array();

while($obj = $query->fetch_object()){ 
            $arr['observations'][] = array ('id'=> $obj->id,'topic'=> $obj->topic,'status'=> $obj->status,'user'=> $obj->name." ".$obj->surname,'vote'=> $obj->vote,'date'=> $obj->date,'summary'=> $obj->desc,'address'=> $obj->address,'date'=> $obj->date,'lat'=> $obj->coorx,'lng'=> $obj->coory); 
        } 	

echo json_encode($arr);



?>