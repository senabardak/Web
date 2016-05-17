<?php
   include "baglan.php";
mysql_query("SET NAMES UTF8");



ob_start();
session_start();
 
if (!isset($_SESSION["login"])){
    header("http://qualitywebapi.eu-gb.mybluemix.net/kullanici/index.php");
}
else {
    echo "<center>Hosgeldiniz..! ";
    //echo "<a href="logout.php">Guvenli cikis</a></center>";
}
?>





 <html>
 <head>

 <title> User Page </title>
 <meta http-equiv="Content_Type" content="text/html; charset=iso-8859-9" />
 <style type="text/css">
body {
    margin: 0;
    font-family: 'Lato', sans-serif;
    background-color: #D0FFCE;
}
#myNav{

}
.overlay {

    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;

}

.overlay-content {
    position: relative;
    top: 0%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 12px;
    color: #FFF;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #FFF;
}

.closebtn {
    position: absolute;
    top: 10px;
    right: 45px;
    font-size: 60px !important;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .closebtn {
    font-size: 40px !important;
    top: 15px;
    right: 35px;
  }
}
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 0px;
  height: 40px;
  width: 70px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '+1';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -60px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
 </style>

 </head>
<body>

<div id="myNav" class="overlay">
	
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  
  <div class="overlay-content">
  	
 	
<?php

error_reporting(E_ALL ^ E_NOTICE);

if($_GET['id']){

	$sql = "SELECT id, topic, `desc`,address,vote FROM compliments WHERE id ='".$_GET['id']. "'";
	$sorgu = mysql_query($sql);
	$sonuc = mysql_result($sorgu, 0, "desc");
	echo "<p>" .$sonuc."</p>";

}
else{
	$sql = "SELECT id, topic, `desc`,address,vote FROM compliments ORDER BY id DESC LIMIT 5";
	$sorgu = mysql_query($sql);

	while($sonuc = mysql_fetch_array($sorgu)){
		$vote = $sonuc['vote'];
		
		
		echo "<a>".$sonuc['topic']."&nbsp----&nbsp";
		echo $sonuc['desc']."&nbsp&nbsp<a>";
		echo $sonuc['address']."&nbsp&nbsp";
		
		echo " <a href=\"vote.php?vote=".$sonuc['id']."\"> <button class=\"button\"><span>Oyla</span></button> </a><br/>";

		
		
	}
	
}

?>
  
  </div>

</div>
<a href="logoutUser.php"><button>Logout</button></a>
<span style="font-size:30px;cursor:pointer; border:solid; position:relative; left:1420px;" onclick="openNav()">☰ Oylama</span>
<h2>Welcome <?php echo $_SESSION['login_user'] ;?> </h2>

<script>
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}
</script>
     
</body>
</html>