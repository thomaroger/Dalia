
<div id="form">	
    Ajouter un postIt
    <?php echo form_open("/postit/insert"); ?>
    <?php echo form_hidden('desktop_id', $this->uri->segment(3)); ?>
    <div class="ligne">
        <label> Titre : </label>
        <input type="text" name="titre" />  
    </div>
    <div class="ligne">
        <label> Texte : </label>
        <textarea name="texte" ></textarea>  
    </div>
    <div class="ligne">
        <input type="submit" value="ajouter" />
    </div>
</div>
