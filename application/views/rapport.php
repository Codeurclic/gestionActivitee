<div class="row">
	<div class="container">
	    <div class="span12">
			<!-- table -->
			<table class="table">
				<caption> Liste des rapports </caption>
			        <thead>
			          <tr>
			            <th>#</th>
			            <th>Date</th>
			            <th> Rapport </th>
			            <th> Supprimer </th>
			          </tr>
			        </thead>
			        <tbody>
			        <?php foreach ($rapports as $rapport) { ?>
			          <tr>
			            <td><?php echo $rapport->id ;?></td>
			            <td><?php echo date('d:m:Y à H:i', $rapport->temps) ;?></td>
			            <td><?php echo $rapport->texte ;?></td>
			  			<td><a href="<?php echo site_url()."/animateur/supprimer_rapport/".$rapport->id ;?>">Supprimer</a></td>
			          </tr>
			         <?php } ?>
			        </tbody>
			</table>
			<hr/>
		</div>
		<div class="span12">
			<!-- Form -->
			<form class="form-horizontal" method="post" action="<?php echo site_url() ;?>/animateur/ajouter_rapport">
				<fieldset>
					<!-- Form Name -->
					<legend> Ajouter un rapport </legend>
					<h4> Date : <?php echo date('\L\e d/m/Y - h:i', time())?></h4>
					<!-- Text input-->
					<div class="control-group">
					  	<label class="control-label" for="prenom">Texte</label>
					  	<div class="controls">
					    	<textarea style="width:650px;" rows="14" name="texte" ></textarea>	
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