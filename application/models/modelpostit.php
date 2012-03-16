<?php 

class Modelpostit extends CI_MODEL {
    
        
    const STATE_OK = 1;
    const STATE_DELETED = 0;
    
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
    
        $this->posX = !empty($_POST['posX'])?$_POST['posX']:0;
        $this->posY = !empty($_POST['posY'])?$_POST['posY']:0;
        $this->date = date('Y-m-d H:i:s',time());
        $this->desktop_id = $_POST['desktop_id'];
        $this->db->update('postit', $this, array('id' => $_POST['id']));
    }
    
    
    function getPostItByDesktopId($desktopId){
        if(!empty($desktopId)){
	        $this->db->where('desktop_id',$desktopId);
	    }
	    $this->db->where('statut',self::STATE_OK);
	    return $this->db->get('postit');
    }
    
    function deletePostIt(){
       $this->statut = self::STATE_DELETED;
       $this->db->update('postit', $this, array('id' => $_POST['id'])); 
    }
    
    
    
}