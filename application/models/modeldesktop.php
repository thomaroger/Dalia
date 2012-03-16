<?php 

class Modeldesktop extends CI_MODEL {
        
    function __construct(){
        parent::__construct();
    }
    
    function getDesktops(){
        return  $this->db->get('desktop');
    }
    
    function getDesktopById($desktopId){
        if(!empty($desktopId)){
	        $this->db->where('id',$desktopId);
	    }
	    return $this->db->get('desktop');
    }
    
}