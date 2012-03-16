
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<?php if(!$isAjax) : ?>
    <?php $this->load->view('header');?>
    <?php $this->load->view('layout');?>
<?php endif; ?>

<div id="desktops">
    <ul>
	<?php foreach($desktops->result() as $desktop) : ?>
	    <li>
	    <span><?php echo ucfirst($desktop->prenom)." ".strtoupper($desktop->nom); ?></span>
	    <?php if($daliaDesktop == $desktop->id) : ?>
=======
=======
>>>>>>> Stashed changes
<div id="desktop">
	<?php foreach($desktops->result() as $desktop) : ?>
	    <?php echo $desktop->prenom; ?>
	    <?php echo $desktop->nom; ?>
	    <?php echo $desktop->position; ?>
        <?php if($daliaDesktop == $desktop->id) : ?>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
            <span class="assiociate"> bureau associé </span>
        <?php endif; ?>
	    <span class="position"><?php echo $desktop->position; ?></span>

         <div id="anchor">
            <?php echo anchor('desktop/index/'.$desktop->id, 'voir le desktop'); ?>
         </div>
	    </li>
	<?php endforeach; ?>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    </ul>
</div>
<?php if(!$isAjax) : ?>
    <?php $this->load->view('footer');?>
<?php endif; ?>
</div>

=======
</div>
>>>>>>> Stashed changes
=======
</div>
>>>>>>> Stashed changes
