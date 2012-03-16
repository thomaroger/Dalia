<?php $this->load->view('header');?>
<?php $this->load->view('layout');?>


<div id="desktop">
    <div id="desktopPers">
    	<?php foreach($desktop->result() as $row) : ?>
    	   <span><strong><?php echo ucfirst($row->prenom)." ".strtoupper($row->nom); ?></strong></span>
    	     <span class="position"><?php echo $row->position; ?></span>
    	    <br />
    	<?php endforeach; ?>
    <?php if ($row->id == $daliaDesktop) : ?>
        <div id="anchor" onclick="addPostIt(<?php echo $row->id;?>)">
            ajouter un PostId
        </div>
    <?php endif; ?>
    <?php if (empty($daliaDesktop)) : ?>
        <div id="anchor">
            <?php echo anchor('desktop/associate/'.$row->id, "s'associer a ce bureau"); ?>
        </div>
    <?php endif; ?>
    </div>


    <div class="demo ui-widget ui-helper-clearfix">

        <ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
        <?php foreach($postits->result() as $postit) : ?>
            <li class="ui-widget-content ui-corner-tr">
                <?php echo form_hidden('postit_id', $postit->id); ?>
                <h5 class="ui-widget-header"><?php echo $postit->titre ?></h5>
                
                <?php 
                $postitimg  = '/img/postit-min.png';
                if($postit->type == 1) {
                   $postitimg  = '/img/post-it-bleu.png'; 
                }
                if($postit->type == 2) {
                   $postitimg  = '/img/post-it-vert.png'; 
                }
                if($postit->type == 3) {
                   $postitimg  = '/img/post-it-rouge.png'; 
                }
                ?>
                <img src="<?php echo $postitimg?>" alt="postit" width="96" height="72" />
                <span class="text"><?php echo $postit->texte ?></span>
                <span class="date"><?php echo $postit->date ?></span>
                <a href="/img/postit.png" title="post-it" class="ui-icon ui-icon-zoomin">Agrandir</a>
            </li>
        <?php endforeach; ?>
        </ul>
    </div>
    <?php $this->load->view('bin');?>
</div>

<?php $this->load->view('footer');?>



