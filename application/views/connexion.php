<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!-- General meta information -->
	<title><?php echo $titre_page ;?></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="robots" content="index, follow" />
	<meta charset="utf-8" />
	<!-- // General meta information -->
	
	<!-- Load stylesheets -->
	<link type="text/css" rel="stylesheet" href="<?php echo css_url("style") ; ?>" media="screen" />
	<!-- // Load stylesheets -->
	
	<link rel="shortcut icon" href="<?php echo img_url("Logoajst.ico") ;?>">
	
	<script>
		$(document).ready(function(){
			$("#submit1").hover(
				function() {
					$(this).animate({"opacity": "0"}, "slow");
				},
				function() {
					$(this).animate({"opacity": "1"}, "slow");
				});
	 	});
	</script>
	
</head>
<body>

	<div id="wrapper">
		<div class="error" style="font-weight:bold; color:black"><?php echo validation_errors()?></div>
		<div class="error" style="font-weight:bold; color:black">
		<?php foreach($errors as $error) {
			echo $error."<br/>" ; 
		}?></div>
		<div id="wrappertop"></div>

		<div id="wrappermiddle">
			
			<?php echo form_open('animateur'); ?>
			<h2>Connexion</h2>
			<div id="username_input">
				<div id="username_inputleft"></div>
				<div id="username_inputmiddle">
					<input type="text" name="mail" id="url" value="Email" onclick="this.value = ''">
					<img id="url_user" src="<?php echo img_url('mailicon.png');?>" alt="">
				</div>

				<div id="username_inputright"></div>
			</div>
				<div id="password_input">
					<div id="password_inputleft"></div>
					<div id="password_inputmiddle">
						<input type="password" name="mdp" id="url" value="Mot de passe" onclick="this.value = ''">
						<img id="url_password" src="<?php echo img_url('passicon.png') ; ?>" alt="">
					</div>
	
	-				<div id="password_inputright"></div>
				</div>
	
				<div id="submit">
					<input type="image" src="<?php echo img_url('submit_hover.png') ; ?>" id="submit1" value="Connexion">
					<input type="image" src="<?php echo img_url('submit.png') ; ?>" id="submit2" value="Connexion">
				</div>
			</form>
		</div>
		<div id="wrapperbottom"></div>
		<div id="powered">
		<p>Powered by <a href="http://jeunesscience.com">Association Jeunes Science Tunisie</a></p>
		</div>
	</div>
	
	<!-- Load Javascript -->
	<script type="text/javascript" src="<?php echo js_url("jquery") ; ?>"></script>
	<script type="text/javascript" src="<?php echo js_url("query-2.1.7") ; ?>"></script>
	<script type="text/javascript" src="<?php echo js_url("rainbows") ; ?>"></script>
	<!-- // Load Javascipt -->
	
</body>
</html>