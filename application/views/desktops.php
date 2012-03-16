<?php $this->load->view('header');?>
<?php $this->load->view('layout');?>

<div id="desktop">	
	<?php foreach($desktops->result() as $desktop) : ?>
	    <?php echo $desktop->prenom; ?>
	    <?php echo $desktop->nom; ?>
	    <?php echo $desktop->position; ?>
        <?php if($daliaDesktop == $desktop->id) : ?>
            <span class="assiociate"> bureau associé </span>    
        <?php endif; ?>
         <div id="anchor">
            <?php echo anchor('desktop/index/'.$desktop->id, 'voir le desktop'); ?>
        <div>
	    <br />
	<?php endforeach; ?>
</div>

<?php $this->load->view('footer');?>