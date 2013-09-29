<div class="row">
	<div class="container">
	    <div class="span12">
			<!-- table -->
			<table class="table">
				<caption> Liste des animateurs </caption>
			        <thead>
			          <tr>
			            <th>#</th>
			            <th> Identifiant </th>
			            <th>Nom</th>
			            <th>Prénom</th>
			            <th> Mail </th>
			            <th> Admin </th>
			            <th> Supprimer </th>
			          </tr>
			        </thead>
			        <tbody>
			        <?php foreach ($animateurs as $animateur) { ?>
			          <tr>
			            <td><?php echo $animateur->id ;?></td>
			            <td><?php echo $animateur->identifiant ;?></td>
			            <td><?php echo $animateur->nom ;?></td>
			            <td><?php echo $animateur->prenom ;?></td>
			            <td><?php echo $animateur->mail ;?></td>
			            <td><?php echo $animateur->admin ;?></td>
			  			<td><a href="<?php echo site_url()."/administrateur/supprimer_animateur/".$animateur->id ;?>">Supprimer</a></td>
			          </tr>
			         <?php } ?>
			        </tbody>
			</table>
			<hr/>
		</div>
		<div class="span12">
			<!-- Form -->
			<form class="form-horizontal" method="post" action="<?php echo site_url() ;?>/administrateur/ajouter_animateur">
				<fieldset>
					<!-- Form Name -->
					<legend> Ajouter un animateur </legend>
			
					<!-- Text input-->
					<div class="control-group">
					  	<label class="control-label" for="identifiant">Identifiant</label>
					  	<div class="controls">
					    	<input id="identifiant" name="identifiant" placeholder="Identifiant" class="input-xlarge" required="" type="text">
					  	</div>
					</div>
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
					  	<label class="control-label" for="mdp">Mot de passe</label>
					  	<div class="controls">
					    	<input id="mdp" name="mdp" placeholder="Mot de passe" class="input-xlarge" required="" type="password">
					  	</div>
					</div>
					<div class="control-group">
					  	<label class="control-label" for="mail">Mail</label>
					  	<div class="controls">
					    	<input id="mail" name="mail" placeholder="Mail" class="input-xlarge" required="" type="text">
					  	</div>
					</div>
					<div class="control-group">
					  	<label class="control-label" for="admin"> Admin ? </label>
					  	<div class="controls">
					    	<input id="mail" name="admin" type="checkbox">
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