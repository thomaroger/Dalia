<?php

class Desktop extends CI_Controller {

    function Desktop(){
        parent::__construct();
    }

	public function index()
	{
	    $data = array();
	  
	    $desktopId = $this->uri->segment(3);
	    if(!empty($desktopId) && is_numeric($desktopId)){
	        $this->db->where('id',$desktopId);
	    }
	    $data['query'] = $this->db->get('desktop');
		$this->load->view('desktop', $data);
	}
}
