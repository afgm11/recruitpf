.<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class salir extends CI_Controller {

	
	function __construct()
	 {
	   parent::__construct();
	   if(!isset($_SESSION["tknsession"])){
		 session_destroy();
		 redirect('/login','refresh');
		}  
	 } 
	 
	public function index()
	{
		session_destroy();
		$this->load->view('login');

	}
	
	
}
?>
