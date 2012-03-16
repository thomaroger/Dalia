<?php

class Desktop extends CI_Controller {

    function Desktop(){
        parent::__construct();
    }

	public function index()
	{
	    $data = array();
	    $desktopId = (int) $this->uri->segment(3);
	    $data['query'] = $this->modeldesktop->getDesktopById($desktopId);
		$this->load->view('desktop', $data);
	}
}
