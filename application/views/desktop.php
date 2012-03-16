<div id="desktop">
	<h1>Welcome <?php echo $name; ?></h1>
	
	<?php foreach($query->result() as $row) : ?>
	    <?php echo $row->prenom; ?>
	    <?php echo $row->nom; ?>
	    <?php echo $row->position; ?>
	<?php endforeach; ?>
</div>