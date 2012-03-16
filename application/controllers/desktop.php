<?php

class Desktop extends CI_Controller {

    function Desktop(){
        parent::__construct();
        
    }

	public function index()
	{
	    $data = array();
	    $data['name'] = "Helloworld";
	    $data['query'] = $this->db->get('entries');
		$this->load->view('desktop', $data);
	}
}
