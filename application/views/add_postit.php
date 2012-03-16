
<div id="postform">	
    <h2>Ajout d'un post it</h2>
    <?php echo form_open("/postit/insert"); ?>
    <?php echo form_hidden('desktop_id', $this->uri->segment(3)); ?>
    <div>
        <div class="ligne">
            <label> Titre </label>
            <br />
            <input type="text" name="titre" />  
        </div>
        <div class="ligne">
            <label> Texte </label>
            <br />
            <textarea name="texte" ></textarea>  
        </div>
        <div class="ligne">
            <label> Couleur </label>
            <br />
            <select name="type">
                <option value="0">Jaune</option>
                <option value="1">Bleu</option>
                <option value="2">Vert</option>
                <option value="3">Rouge</option>
            </select>
        </div>
        <div class="ligne">
            <input type="submit" value="ajouter" />
        </div>
    <div>
</div>
