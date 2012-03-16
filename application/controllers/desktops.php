<?php

class Desktops extends CI_Controller {

    function Desktops(){
        parent::__construct();
    }

	public function index()
	{
	    $data = array();
	    $data['desktops'] = $this->modeldesktop->getDesktops();
        $data['isAjax'] = $this->input->isAjax();
	    $data['daliaDesktop'] = $this->input->cookie('daliaDesktop');
		$this->load->view('desktops', $data);
	}
}
