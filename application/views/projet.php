    <div class="container">
    	<div class="row-fluid">
    		<ul class="thumbnails">
    		<?php foreach($projets as $projet) {?>
    			<li class="span3">
				    <div class="thumbnail" style="padding: 0">
				   		<div style="padding:4px" class="center;">
				    		<img alt="Preview" style="width: auto ; height: 70px;" src="<?php echo $projet->lien_preview ;?>">
				    	</div>
   				 		<div class="caption">
						    <h2><?php echo $projet->titre ; ?></h2>
						    <p><?php echo $projet->description ;?></p>
						</div>
    					<div class="modal-footer" style="text-align: left">
	    					<div class="progress progress-striped active" style="background: #ddd">
	    						<div class="bar" style="width: 100%;"></div>
	    					</div>
	   			 			<div class="row-fluid">
							    <div class="span6"><b>100%</b><br/><small>TERMINE</small></div>
							    <div class="span6"><b><a href="<?php echo $projet->fiche_projet ; ?>">Fiche projet</a></b></div>
						    </div>
    					</div>
    				</div>
    			</li>
    		<?php } ?>
    		</ul>
    </div>
   </div>
  </div>
 </div>