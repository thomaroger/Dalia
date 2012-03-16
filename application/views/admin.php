<?php $this->load->view('header');?>
<?php $this->load->view('layout');?>

<div id="desktops">	
    <ul>
	    <li>
	        <span> Desktop </span>        
             <div id="anchor">
                <?php echo anchor('admin/desktops', 'voir les desktops'); ?>
             </div>
	    </li>
	    <li>
	        <span> Postit </span>        
             <div id="anchor">
                <?php echo anchor('admin/postits', 'voir les postits'); ?>
             </div>
	    </li>
    </ul>	
</div>

<?php $this->load->view('footer');?>