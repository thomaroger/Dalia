<?php $this->load->view('header');?>
<?php $this->load->view('layout');?>
<div id="desktop">	
	<?php foreach($query->result() as $row) : ?>
	    <?php echo $row->prenom; ?>
	    <?php echo $row->nom; ?>
	    <?php echo $row->position; ?>
	    <br />
	<?php endforeach; ?>
</div>
<div id="anchor">
    <?php echo anchor('postIt/add/'.$row->id, 'ajouter un PostId'); ?>
<div>
<?php $this->load->view('footer');?>