<?php

class Desktops extends CI_Controller {

    function Desktops(){
        parent::__construct();
    }

	public function index()
	{
	    $data = array();
	    $data['query'] = $this->modeldesktop->getDesktops();
		$this->load->view('desktops', $data);
	}
}
