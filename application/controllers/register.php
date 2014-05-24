<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
	$this->load->view('users/V_register');	
	}

	public function newregister()
	{
		echo 'register';
	}

}

/* End of file register.php */
/* Location: ./application/controllers/register.php */