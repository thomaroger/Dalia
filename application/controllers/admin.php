<?php

class Admin extends CI_Controller {

    function Admin(){
        parent::__construct();
    }

	public function index(){ 
	    $this->load->view('admin', array());
	}
	
	public function desktops(){

	}
	
	public function postits(){

	}
}
