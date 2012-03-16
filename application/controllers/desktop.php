<?php

class Desktop extends CI_Controller {

    function Desktop(){
        parent::__construct();
    }

	public function index()
	{
	    $data = array();
	    $desktopId = (int) $this->uri->segment(3);
	    $data['desktop'] = $this->modeldesktop->getDesktopById($desktopId);
	    $data['postits'] = $this->modelpostit->getPostItByDesktopId($desktopId);
	    $data['daliaDesktop'] = $this->input->cookie('daliaDesktop');
	    $this->load->view('desktop', $data);
	}
	
	public function associate(){
	    $cookie = array('name' => 'daliaDesktop', 
            'value' => (int) $this->uri->segment(3),
            'expire' => '86500',
            'domain' => '.tf1.fr',
            'path'   => '/');
	    $this->input->set_cookie($cookie);
	    redirect('desktops');
	}
}
