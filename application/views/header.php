<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $titre_page ;?> </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="<?php echo css_url('bootstrap.min'); ?>">
		<link rel="stylesheet" href="<?php echo css_url('bootstrap-responsive.min'); ?>">
		
		<link href="<?php echo css_url("style2");?>" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="<?php echo js_url('html5shiv'); ?>"></script>
	      <script src="<?php echo js_url('respond.min'); ?>"></script>
	    <![endif]-->
	    <link rel="shortcut icon" href="<?php echo img_url("Logoajst.ico") ;?>">
	</head>
	<body>
		<div class="row">
			<div class="container">
				<div class="span12">
					<div class="navbar">
						<div class="navbar-inner">
							<div class="container-fluid">						
							 	<a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="#" class="brand"><img src="<?php echo img_url("Logoajst.ico");?>" class="logo"></a>
								<div class="nav-collapse collapse navbar-responsive-collapse">
									<ul class="nav">
										<?php if (isset($menu1)) {?><li class="active"><?php } else {?><li><?php }?>
											<a href="<?php echo site_url() ;?>">Accueil</a>
										</li>
										<?php if (isset($menu2)) {?><li class="active"><?php } else {?><li><?php }?>
											<a href="<?php echo site_url();?>/animateur/afficher_adherents">Adhérants</a>
										</li>
										<?php if (isset($menu3)) {?><li class="active"><?php } else {?><li><?php }?>
											<a href="<?php echo site_url();?>/animateur/afficher_rapports">Rapports</a>
										</li>
										<?php if (isset($menu4)) {?><li class="active"><?php } else {?><li><?php }?>
											<a href="<?php echo site_url();?>/animateur/afficher_projets">Projets</a>
										</li>
									</ul>
									<ul class="nav pull-right">
										<li>
											<a href="<?php echo site_url();?>/animateur/deconnexion"> Log out</a>
										</li>
										<li class="divider-vertical"></li>
										<?php if (isset($menu5)) {?><li class="active"><?php } else {?><li><?php }?>
											<a href="<?php echo site_url();?>/administrateur"> Admin</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		