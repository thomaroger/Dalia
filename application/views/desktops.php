<?php $this->load->view('header');?>
<?php $this->load->view('layout');?>

<div id="desktops">	
    <ul>
        
	<?php foreach($desktops->result() as $desktop) : ?>
	    <li>
	    <span><?php echo ucfirst($desktop->prenom)." ".strtoupper($desktop->nom); ?></span>
	    <?php if($daliaDesktop == $desktop->id) : ?>
            <span class="assiociate"> bureau associé </span>    
        <?php endif; ?>
	    <span class="position"><?php echo $desktop->position; ?></span>
        
         <div id="anchor">
            <?php echo anchor('desktop/index/'.$desktop->id, 'voir le desktop'); ?>
         </div>
	    </li>
	<?php endforeach; ?>
</ul>	
</div>

<?php $this->load->view('footer');?>