<div id="desktop">	
	<?php foreach($query->result() as $row) : ?>
	    <?php echo $row->prenom; ?>
	    <?php echo $row->nom; ?>
	    <?php echo $row->position; ?>
	    <br />
	<?php endforeach; ?>
</div>