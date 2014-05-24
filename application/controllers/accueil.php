<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
	    if(!$this->session->userdata('logged_in'))
   			{ 
   			redirect('connexion','refresh');
   			}
      
   	}

	public function index()
	{
		$this->layout->view('V_accueil');
	}

}

/* End of file accueil.php */
/* Location: ./application/controllers/accueil.php */