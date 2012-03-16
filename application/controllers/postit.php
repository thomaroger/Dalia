<?php

class Postit extends CI_Controller {

    function Desktops(){
        parent::__construct();
    }

	public function add()
	{   
	    $data = array();
	    $desktopId = (int) $this->uri->segment(3);
	    $data['desktop'] = $this->modeldesktop->getDesktopById($desktopId);
	    $this->load->view('add_postit', $data);
	}
	
	public function insert(){
	    
	    $this->modelpostit->insertPostIt();
	    redirect('desktop/index/'.$_POST['desktop_id']);
	}


    public function update(){
         $this->modelpostit->updatePostIt();
    }
}
