<?php

class Desktop extends CI_Controller {

    function Desktop(){
        parent::__construct();
    }

	public function index()
	{
	    $data = array();
	  
	    $desktopId = (int) $this->uri->segment(3);
	    if(!empty($desktopId)){
	        $this->db->where('id',$desktopId);
	    }
	    $data['query'] = $this->db->get('desktop');
		$this->load->view('desktop', $data);
	}
}
