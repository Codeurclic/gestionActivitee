	<div class="container">
		<div class="span12">
			<div class="carousel slide" id="carousel-32642">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-32642">
					</li>
					<li data-slide-to="1" data-target="#carousel-32642">
					</li>
					<li data-slide-to="2" data-target="#carousel-32642">
					</li>
					<li data-slide-to="3" data-target="#carousel-32642">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img  alt="" src="<?php echo img_url("ajst1.jpg") ; ?>">
						<div class="carousel-caption">
							<h4> Free Software Day - Mai 2012 </h4>
							
						</div>
					</div>
					<div class="item">
						<img alt="" src="<?php echo img_url("ajst2.jpg"); ?>">
						<div class="carousel-caption">
							<h4>
								Nuit des étoiles Chaouech - Juin 2013
							</h4>
							
						</div>
					</div>
					<div class="item">
						<img alt="" src="<?php echo img_url("ajst4.jpg") ; ?>">
						<div class="carousel-caption">
							<h4>
								Jeunes Sciences-ESI 2013
							</h4>
							
						</div>
					</div>
				</div> <a data-slide="prev" href="#carousel-32642" class="left carousel-control">‹</a> <a data-slide="next" href="#carousel-32642" class="right carousel-control">›</a>
			</div>
			<br>
			<div class="hero-unit">
				<h3> Jeunes Science | Platforme Web de gestion de l'animation scientifique </h3>
				<p> Cette web -application a pour but de gestionner les activités de chaque section scientifique dans l'association Jeunes et science. Elle permet les animateurs d'avaluer leurs activité durant toute l'année et leurs progressions.</p>
			</div>
		</div>
	
	<div class="row">
		<div class="span5 bordure1 alert alert-info"> 
			<h3>
				Statistiques <em>Adhérents</em>
			</h3>				
			<div class="progress progress-striped active">
	    		<div class="bar" style="width: 100%;">Nombre d'adhérents : <?php echo $nombre_adherents ;?></div>
	    	</div>		
			<div class="progress progress-striped active">
	    		<div class="bar" style="width: 100%;">Moyenne d'age des adhérents : <?php echo (int)$moyenne_age ; ?></div>
	    	</div>		
		</div>
		<div class="span5 bordure1 alert alert-info">
			<h3>
				Statistiques <em>Projets</em>
			</h3>
			<div class="progress progress-striped active">
	    		<div class="bar" style="width: 100%;">Nombre de projets : <?php echo $nombre_projet ; ?></div>
	    	</div>
		</div>
	</div>
</div>