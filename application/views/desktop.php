<?php $this->load->view('header');?>
<?php $this->load->view('layout');?>

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream

<div id="desktop">
	<?php foreach($desktop->result() as $row) : ?>
	    <?php echo $row->prenom; ?>
	    <?php echo $row->nom; ?>
	    <?php echo $row->position; ?>
	    <br />
	<?php endforeach; ?>
=======
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
<div id="content">
    <div id="desktop">
    	<?php foreach($desktop->result() as $row) : ?>
    	    <?php echo $row->prenom; ?>
    	    <?php echo $row->nom; ?>
    	    <?php echo $row->position; ?>
    	    <br />
    	<?php endforeach; ?>
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
>>>>>>> Stashed changes

    <?php if ($row->id == $daliaDesktop) : ?>
        <div id="anchor">
            <?php echo anchor('postit/add/'.$row->id, 'ajouter un PostId'); ?>
        <div>
    <?php endif; ?>
    <?php if (empty($daliaDesktop)) : ?>
        <div id="anchor">
            <?php echo anchor('desktop/associate/'.$row->id, "s'associer a ce bureau"); ?>
        <div>
    <?php endif; ?>
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes

    <div class="demo ui-widget ui-helper-clearfix">

<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
<<<<<<< Updated upstream
        <ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
        <?php foreach($postits->result() as $postit) : ?>
            <li class="ui-widget-content ui-corner-tr">
                <h5 class="ui-widget-header"><?php echo $postit->titre ?></h5>
                <img src="/img/postit-min.png" alt="postit" width="96" height="72" />
                <span class="text"><?php echo $postit->texte ?></span>
                <span class="date"><?php echo $postit->date ?></span>
                <a href="/img/postit.png" title="post-it" class="ui-icon ui-icon-zoomin">Aggrandir</a>
            </li>
        <?php endforeach; ?>
        </ul>

    </div>
    <?php $this->load->view('bin');?>
</div>


=======
        <?php if ($row->id == $daliaDesktop) : ?>
            <div id="anchor">
                <?php echo anchor('postit/add/'.$row->id, 'ajouter un PostId'); ?>
            <div>
        <?php endif; ?>
        <?php if (empty($daliaDesktop)) : ?>
            <div id="anchor">
                <?php echo anchor('desktop/associate/'.$row->id, "s'associer a ce bureau"); ?>
            <div>
        <?php endif; ?>

        <div class="demo ui-widget ui-helper-clearfix">

            <ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
            <?php foreach($postits->result() as $postit) : ?>
                <li class="ui-widget-content ui-corner-tr">
                    <h5 class="ui-widget-header"><?php echo $postit->titre ?></h5>
                    <img src="/img/postit-min.png" alt="postit" width="96" height="72" />
                    <span class="text"><?php echo $postit->texte ?></span>
                    <span class="date"><?php echo $postit->date ?></span>
                    <a href="/img/postit.png" title="post-it" class="ui-icon ui-icon-zoomin">Aggrandir</a>
                </li>
            <?php endforeach; ?>
            </ul>

        </div>
        <?php $this->load->view('bin');?>
    </div>
</div>

>>>>>>> Stashed changes
=======
        <?php if ($row->id == $daliaDesktop) : ?>
            <div id="anchor">
                <?php echo anchor('postit/add/'.$row->id, 'ajouter un PostId'); ?>
            <div>
        <?php endif; ?>
        <?php if (empty($daliaDesktop)) : ?>
            <div id="anchor">
                <?php echo anchor('desktop/associate/'.$row->id, "s'associer a ce bureau"); ?>
            <div>
        <?php endif; ?>

        <div class="demo ui-widget ui-helper-clearfix">

            <ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
            <?php foreach($postits->result() as $postit) : ?>
                <li class="ui-widget-content ui-corner-tr">
                    <h5 class="ui-widget-header"><?php echo $postit->titre ?></h5>
                    <img src="/img/postit-min.png" alt="postit" width="96" height="72" />
                    <span class="text"><?php echo $postit->texte ?></span>
                    <span class="date"><?php echo $postit->date ?></span>
                    <a href="/img/postit.png" title="post-it" class="ui-icon ui-icon-zoomin">Aggrandir</a>
                </li>
            <?php endforeach; ?>
            </ul>

        </div>
        <?php $this->load->view('bin');?>
    </div>
</div>

>>>>>>> Stashed changes
=======
        <?php if ($row->id == $daliaDesktop) : ?>
            <div id="anchor">
                <?php echo anchor('postit/add/'.$row->id, 'ajouter un PostId'); ?>
            <div>
        <?php endif; ?>
        <?php if (empty($daliaDesktop)) : ?>
            <div id="anchor">
                <?php echo anchor('desktop/associate/'.$row->id, "s'associer a ce bureau"); ?>
            <div>
        <?php endif; ?>

        <div class="demo ui-widget ui-helper-clearfix">

            <ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
            <?php foreach($postits->result() as $postit) : ?>
                <li class="ui-widget-content ui-corner-tr">
                    <h5 class="ui-widget-header"><?php echo $postit->titre ?></h5>
                    <img src="/img/postit-min.png" alt="postit" width="96" height="72" />
                    <span class="text"><?php echo $postit->texte ?></span>
                    <span class="date"><?php echo $postit->date ?></span>
                    <a href="/img/postit.png" title="post-it" class="ui-icon ui-icon-zoomin">Aggrandir</a>
                </li>
            <?php endforeach; ?>
            </ul>

        </div>
        <?php $this->load->view('bin');?>
    </div>
</div>

>>>>>>> Stashed changes
=======
        <?php if ($row->id == $daliaDesktop) : ?>
            <div id="anchor">
                <?php echo anchor('postit/add/'.$row->id, 'ajouter un PostId'); ?>
            <div>
        <?php endif; ?>
        <?php if (empty($daliaDesktop)) : ?>
            <div id="anchor">
                <?php echo anchor('desktop/associate/'.$row->id, "s'associer a ce bureau"); ?>
            <div>
        <?php endif; ?>

        <div class="demo ui-widget ui-helper-clearfix">

            <ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
            <?php foreach($postits->result() as $postit) : ?>
                <li class="ui-widget-content ui-corner-tr">
                    <h5 class="ui-widget-header"><?php echo $postit->titre ?></h5>
                    <img src="/img/postit-min.png" alt="postit" width="96" height="72" />
                    <span class="text"><?php echo $postit->texte ?></span>
                    <span class="date"><?php echo $postit->date ?></span>
                    <a href="/img/postit.png" title="post-it" class="ui-icon ui-icon-zoomin">Aggrandir</a>
                </li>
            <?php endforeach; ?>
            </ul>

        </div>
        <?php $this->load->view('bin');?>
    </div>
</div>

>>>>>>> Stashed changes
<?php $this->load->view('stock');?>
<?php $this->load->view('footer');?>