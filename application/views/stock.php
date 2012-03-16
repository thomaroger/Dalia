<div id="trash" class="ui-widget-content ui-state-default">
	<h4 class="ui-widget-header">
        <span class="ui-icon ui-icon-trash">

        </span>
        Stock
    </h4>

    <div class='zoom'>
        <?php echo form_hidden('desktop_id', $this->uri->segment(3)); ?>
        <a class="ui-icon-plus">
            <img src="/img/icone-plus.png" class="zoom plus" width="50px" height="50px">
        </a>
        <a class="ui-icon-moins">
            <img src="/img/icone-moins.png" class="zoom moins" width="50px" height="50px">
        </a>
    </div>
</div>