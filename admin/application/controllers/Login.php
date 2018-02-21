<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	function __construct()
	 {
	   parent::__construct();
	     $this->load->model('validalogin','',TRUE);
	 } 
	 
	public function index()
	{
		$this->load->view('login');
	}
	
	 function valusuarios()
	 {
	 $post=$this->input->post(NULL,TRUE);
		
	   //Field validation succeeded.  Validate against database
	   $username = $this->input->post('username');
		$password = md5($this->input->post('password'));

	
		//pgfacil2017.
		
	 
	   //query the database
	  $result = $this->validalogin->val_login($username, $password);
	
		 if ($result!=""){
		
				foreach($result as $row)
				 {
					$_SESSION["iduser"]=$row->iduser;
					$_SESSION["nomcompleto"]=$row->nomcompleto;
					$_SESSION["nuser"]=$row->nuser;
					$_SESSION["tpusuarios"]=$row->tpusuarios;
					$_SESSION["mailuser"]=$row->mailuser;
					$_SESSION["tknsession"]=uniqid();
				 }
			 
			// $this->load->view('v_home');
			 redirect('/home','refresh');
		  }else{
			$data['estado']=1;
			$this->load->view('login',$data);
		  } 
	 
	 
	  
	
	 }
 
 
 
}
?>
