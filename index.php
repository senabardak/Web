
<?php session_start(); ?>

<header>

<style type="text/css">
body {
	background-color: #76b852;
}
#indexPhp {
	
	
	text-align: center;
	margin-top: 360px;
} 
</style>

</header>

<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.6&appId=399761586899278";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<script type="text/javascript" src="./quality/kullanici/fb.js"></script>
 <html>
	<div id = "indexPhpp">
		<?php if(isset($_SESSION['name'])){} else { ?><div class="fb-login-button" data-scope="public_profile,email" onlogin="checkLoginState();"></div>
		<?php }?>
		
		</div>
		<div id = "indexPhp">
	<a href= "http://qualitywebapi.eu-gb.mybluemix.net/kullanici/login.php"><button style="background-color: #ffc019; color: white; margin-right: 100px; font-weight: bold;"><p>Login</p></button></a>
	<a href= "http://qualitywebapi.eu-gb.mybluemix.net/kullanici/registration.php"><button style="background-color: #fdff00; color: grey; font-weight: bold;"><p>Register</p></button></a>
	</div>
 </html>
</body>