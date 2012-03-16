<?php

class Desktop extends CI_Controller {

    function Desktop(){
        parent::__construct();
        
    }

	public function index()
	{
	    $data = array();
	    $data['query'] = $this->db->get('desktop');
		$this->load->view('desktop', $data);
	}
}
