<div class="row">
	<div class="container">
	    <div class="span12">
			<!-- table -->
			<table class="table">
				<caption> Liste des adhérents </caption>
			        <thead>
			          <tr>
			            <th>#</th>
			            <th>Nom</th>
			            <th>Prénom</th>
			            <th> Mail </th>
			            <th> Age </th>
			            <th> Lycée </th>
			            <th> Supprimer </th>
			          </tr>
			        </thead>
			        <tbody>
			        <?php foreach ($adherents as $adherent) { ?>
			          <tr>
			            <td><?php echo $adherent->id ;?></td>
			            <td><?php echo $adherent->nom ;?></td>
			            <td><?php echo $adherent->prenom ;?></td>
			            <td><?php echo $adherent->mail ;?></td>
			            <td><?php echo $adherent->age ;?></td>
			  			<td><?php echo $adherent->lycee ;?></td>
			  			<td><a href="<?php echo site_url()."/animateur/supprimer_adherent/".$adherent->id ;?>">Supprimer</a></td>
			          </tr>
			         <?php } ?>
			        </tbody>
			</table>
			<hr/>
		</div>
		<div class="span12">
			<!-- Form -->
			<form class="form-horizontal" method="post" action="<?php echo site_url() ;?>/animateur/ajouter_adherent">
				<fieldset>
					<!-- Form Name -->
					<legend> Ajouter un adhérent </legend>
			
					<!-- Text input-->
					<div class="control-group">
					  	<label class="control-label" for="prenom">Prénom</label>
					  	<div class="controls">
					    	<input id="prenom" name="prenom" placeholder="Prénom" class="input-xlarge" required="" type="text">
					  	</div>
					</div>
					<div class="control-group">
					  	<label class="control-label" for="nom">Nom</label>
					  	<div class="controls">
					    	<input id="nom" name="nom" placeholder="Nom" class="input-xlarge" required="" type="text">
					  	</div>
					</div>
					<div class="control-group">
					  	<label class="control-label" for="mail">Mail</label>
					  	<div class="controls">
					    	<input id="mail" name="mail" placeholder="Mail" class="input-xlarge" required="" type="text">
					  	</div>
					</div>					
					<div class="control-group">
					  	<label class="control-label" for="age">Age</label>
					  	<div class="controls">
					    	<input id="age" name="age" placeholder="Age" class="input-xlarge" required="" type="text">
					  	</div>
					</div>	
					<div class="control-group">
					  	<label class="control-label" for="lycee">Lycée</label>
					  	<div class="controls">
					    	<input id="lycee" name="lycee" placeholder="Lycée" class="input-xlarge" required="" type="text">
					  	</div>
					</div>	
					<!-- Button -->
					<div class="control-group">
					  	<div class="controls">
					    	<button class="btn btn-success">Ajouter</button>
					  	</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>