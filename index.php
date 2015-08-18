<?php
	include_once 'language/config-language.php';
?>
<!DOCTYPE>
<html>
<head>
	<title><?php echo $lang['title'];?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="keywords" content=""/>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/main.css" type="text/css">
		<link rel="shortcut icon" href="img/logo.ico">
		<link id="stylesheet" rel="stylesheet" type="text/css" href="css/turquoise.css">

	
</head>
<body class="pb-pattern">
	<div class="container center bgColor shadow animated bounceInDown">
		<div class="row">
			<div class="col-md-10">
			<div class="col-md-6 fRight">
				<h2><?php echo $lang['label-login']; ?></h2>
				<span><?php echo $lang['label-disclaimer-login']; ?></span>
				<div class="social"><a href="#" class="fb"><span class="ifb"></span><?php echo $lang['login-facebook']; ?></a><a href="#" class="tw"><span class="itw"></span><?php echo $lang['login-twitter']; ?></a></div>
				<form id="login"class="form-horizontal border">
					<div class="form-group">
					    <div class="col-lg-12">
					      <input type="email" class="form-control" id="email" name="email"placeholder="<?php echo $lang['label-placeholder-login-email']; ?>">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-lg-12">
					      <input type="password" class="form-control" id="pass" name="pass"placeholder="<?php echo $lang['label-placeholder-login-pass']; ?>">
					    </div>
					</div>
					<button id="btnlogin"type="submit" class="btn btn-color"><?php echo $lang['label-login-input']; ?></button>
					<div class="forgot">
							<p><?php echo $lang['label-forgot-pass']; ?> <a href="#"><span><?php echo $lang['label-placeholder-login-pass']; ?></span></a>?</p>
					</div>
				</form>
			</div>
			<div class="col-md-6 fLeft borderRight">
				<h2><?php echo $lang['label-register'];?></h2>				
				<span><?php echo $lang['label-disclaimer-register'];?></span>
				<form id="register"class="form-horizontal border">
					<div class="form-group">
					    <div class="col-lg-12">
					      <input type="name" class="form-control" id="name"name="name" placeholder="<?php echo $lang['label-placeholder-register-name'];?>">
					    </div>
					</div>
					<div class="form-group">
					    <div class="col-lg-12">
					      <input type="email" class="form-control" id="emailRegister" name="emailRegister" placeholder="<?php echo $lang['label-placeholder-register-email'];?>">
					    </div>
					</div>
					<div class="form-group">
					    <div class="col-lg-12">
					      <input type="password" class="form-control" id="password" name="password"placeholder="<?php echo $lang['label-placeholder-register-password'];?>">
					    </div>
					</div>
					<div class="form-group">
					    <div class="col-lg-12">
					      <input type="password" class="form-control" id="rPassword" name="rPassword" placeholder="<?php echo $lang['label-placeholder-register-repeat-password'];?>">
					    </div>
					</div>
					<div class="checkbox">
				    <label >
				      <input id="term" name="term" type="checkbox"><?php echo $lang['label-placeholder-register-terms'];?>
				    </label>
				  </div>
					<button id="BtnRegister"type="submit" class="btn btn-color"><?php echo $lang['label-register-input'];?></button>
				</form>
			</div>
			</div>
		</div>
	</div>
	<div class="tab">
		<div class="contentOption hide">
		<div class="tabColor">Colors
			<ul class="contencolor hide">
				<li class="color" data-color="turquoise"><a href="#"></a></li>
				<li class="color" data-color="blue" ><a href="#"></a></li>
				<li class="color" data-color="orange"><a href="#"></a></li>
				<li class="color" data-color="red"><a href="#"></a></li>
				<li class="color" data-color="green"><a href="#"></a></li>
			</ul>
		</div>
		<div class="tablang">Lang
			<ul class="contenLan hide">
				<li class="lang" data-lang=""><a href="?lang=en">EN</a></li>
				<li class="lang" data-lang=""><a href="?lang=es">ES</a></li>
				<li class="lang" data-lang=""><a href="?lang=de">DE</a></li>
				<li class="lang" data-lang=""><a href="?lang=fr">FR</a></li>
			</ul>
		</div>
		</div>

		<div class="fRight nut"><a class="" href="#"><img src="img/nut.png"></a></div>
	</div>


	<!-- jQuery -->
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<!-- jQuery main -->
	<script src="js/main.js"type="text/javascript"></script>

</body>
</html>
