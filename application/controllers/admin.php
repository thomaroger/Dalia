<?php

class Admin extends CI_Controller {

    function Admin(){
        parent::__construct();
        $this->load->library('grocery_CRUD');    
    }

	public function index(){ 
	    $this->load->view('admin', array());
	}
	
	function groceryTemplate($output = null)
	{
		$this->load->view('groceryTemplate.php',$output);	
	}
	
	public function desktops(){
      try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('desktop');
			$crud->set_subject('Desktop');
			$crud->required_fields('prenom','nom','position');
			$crud->columns('prenom','nom','position');
			
			$output = $crud->render();
			
			$this->groceryTemplate($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	public function postits(){
        try{
			/* This is only for the autocompletion */
			$crud = new grocery_CRUD();

			$crud->set_table('postit');
			$crud->set_subject('postit');
			$crud->required_fields('user_id','desktop_id','titre', 'texte', 'statut');
			$crud->columns('user_id','desktop_id','titre', 'texte', 'statut');
			
			$output = $crud->render();
			
			$this->groceryTemplate($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
}
