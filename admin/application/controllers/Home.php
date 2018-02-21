<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	function __construct()
	 {
	   parent::__construct();
	    if(!isset($_SESSION["tknsession"])){
		 session_destroy();
		 redirect('/login','refresh');
		}
		 $this->load->model('md_home','',TRUE);
		 $this->load->model('md_menu','',TRUE);
	     
	 } 
	 
	public function index()
	{
		
		//menu de opciones 		
		$data['menuopc'] = $this->md_menu->list_menu();
		$data['idopcpadre']=266;
		$data['idopc']=267;
		

		
		// breadcump
		$data1['nomopc']='Dashboard';
		$data1['nomruta1']='Resumen';
		
		$this->load->view('v_headers');  // camila 
		$this->load->view('v_menu',$data); //menu opciones
		$this->load->view('v_home',$data1); //  contenido
		$this->load->view('v_footers'); // footers
		
	}
}

?>