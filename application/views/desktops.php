<?php if(!$isAjax) : ?>
    <?php $this->load->view('header');?>
    <?php $this->load->view('layout');?>
<?php endif; ?>

<?php if($daliaDesktop === false) : ?>
    <div id="alert">
        Vous devez vous associer a un bureau
    </div>
<?php endif; ?>

<div id="desktops">
    <ul>
	<?php foreach($desktops->result() as $desktop) : ?>
	    <li class='user_space'>
        <?php echo form_hidden('desktop_id', $desktop->id); ?>
	    <span><?php echo ucfirst($desktop->prenom)." ".strtoupper($desktop->nom); ?></span>
	    <?php if($daliaDesktop == $desktop->id) : ?>
            <span class="assiociate"> bureau associé </span>
        <?php endif; ?>
	    <span class="position"><?php echo $desktop->position; ?></span>

         <div class="anchor" onclick="seeDesktop(<?php echo $desktop->id ?>)">
            voir le desktop
        </div>
        
	    </li>
	<?php endforeach; ?>
    </ul>
</div>
<?php if(!$isAjax) : ?>
    <?php $this->load->view('footer');?>
<?php endif; ?>

    <?php $this->load->view('open_space_js');?>
</div>

