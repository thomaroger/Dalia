<?php

class Desktops extends CI_Controller {

    function Desktops(){
        parent::__construct();
    }

	public function index()
	{
	    $data = array();
	    $data['query'] = $this->db->get('desktop');
		$this->load->view('desktops', $data);
	}
}
