<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class salir extends CI_Controller {

	
	function __construct()
	 {
	   parent::__construct();
	     
	 } 
	 
	public function index()
	{
		session_destroy();
		$this->load->view('login');

	}
	
	
}
?>
