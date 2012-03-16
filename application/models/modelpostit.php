<?php 

class Modelpostit extends CI_MODEL {
    
    

    var $user_id  = "";
    var $desktop_id  = "";
    var $titre = "";
    var $texte = "";
    var $date = '';
    var $posX = '';
    var $posY = '';
    
    const STATE_OK = 0;
    const STATE_DELETED = 1;
    
    function __construct(){
        parent::__construct();
    }
    
    function insertPostIt(){
        $this->user_id = $this->input->cookie('daliaDesktop');
        $this->desktop_id = $_POST['desktop_id'];
        $this->titre = $_POST['titre'];
        $this->texte = $_POST['texte'];
        $this->posX = !empty($_POST['posX'])?$_POST['posX']:0;
        $this->posY = !empty($_POST['posY'])?$_POST['posY']:0;
        $this->date = date('Y-m-d H:i:s',time());
        $this->statut = self::STATE_OK;
        $this->db->insert('postit', $this); 
    }
    
    function updatePostIt(){
        $this->posX = $_POST['posX'];
        $this->posY = $_POST['posY'];
        $this->user_id = $_POST['user_id'];
        $this->db->update('postit', $this, array('id' => $_POST['id']));
    }
    
    
    function getPostItByDesktopId($desktopId){
        if(!empty($desktopId)){
	        $this->db->where('desktop_id',$desktopId);
	    }
	    return $this->db->get('postit');
    }
    
    function deletePostIt(){
       $this->statut = self::STATE_DELETED;
       $this->db->update('postit', $this, array('id' => $_POST['id'])); 
    }
    
    
    
}