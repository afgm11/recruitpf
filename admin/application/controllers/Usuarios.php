<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuarios extends CI_Controller {

	
	function __construct()
	 {
	  parent::__construct();
	  if(!isset($_SESSION["tknsession"])){
		 redirect('/login','refresh');
		}
	   
	    $this->load->model('md_usuarios','',TRUE);
	    $this->load->model('md_menu','',TRUE);
	 } 
	 
	public function index()
	{
		//session_destroy();
		//$this->load->view('login');

	}
	
	public function listado()
	{
		//session_destroy();
		
		//menu de opciones 		
		$data['menuopc'] = $this->md_menu->list_menu();
		$data['idopcpadre']=268;
		$data['idopc']=269;
		$codmens=$this->input->get('cod');		
		// breadcump
		$data1['nomopc']='Usuarios';
		$data1['nomruta1']='Listado usuarios';
	    $data1['listusuarios']= $this->md_usuarios->list_usuarios();
		$data1['codmens']=$codmens;
			
		$this->load->view('v_headers');  // camila 
		$this->load->view('v_menu',$data); //menu opciones
		$this->load->view('us_listado',$data1); //  contenido
		$this->load->view('v_footers'); // footers
		
		

	}
	
	public function nuevo(){
		
		//menu de opciones 		
		$data['menuopc'] = $this->md_menu->list_menu();
		$data['idopcpadre']=268;
		$data['idopc']=270;
		
		// breadcump
		$data1['nomopc']='Nuevo usuario';
		$data1['nomruta1']='Nuevo usuario';
		$data1['menuselec'] = $this->md_menu->list_menu_usuario(0);
		$data1['tpusuarios'] = $this->md_usuarios->list_tpusuario();
		

		// llamar a la vista del usuario
	    $this->load->view('v_headers');  // camila 
		$this->load->view('v_menu',$data); //menu opciones
		$this->load->view('us_nuevo',$data1); //  contenido
		$this->load->view('v_footers'); // footers
	
	}
	
	public function modusuario(){
		$idusuario=$this->input->get('user');  
	
		//menu de opciones 		
		$data['menuopc'] = $this->md_menu->list_menu();
		$data['idopcpadre']=268;
		$data['idopc']=271;
		
		// breadcump
		$data1['nomopc']='Modificaci&oacute;n usuario';
		$data1['nomruta1']='Modificaci&oacute;n usuario';
		$data1['menuselec'] = $this->md_menu->list_menu_usuario($idusuario);
		
		$data1['listtpusuarios'] = $this->md_usuarios->list_tpusuario();
		$data1['datausuario'] = $this->md_usuarios->data_usuarios($idusuario);
		
		// llamar a la vista del usuario
	    $this->load->view('v_headers');  // camila 
		$this->load->view('v_menu',$data); //menu opciones
		$this->load->view('us_modificacion',$data1); //  contenido
		$this->load->view('v_footers'); // footers
	}
	
	
	public function validausuario(){
	 $post=$this->input->get(NULL,TRUE);
	 $nuser=$this->input->get('nuser');  
	
	$data1= $this->md_usuarios->valexisuser($nuser);
 //var_dump($data1);
		
	 		if ($data1!=""){
				$data="0|0";
			 }else{
				$data="1|0";
			
		 	 } 
			 echo utf8_encode($data);
	}
	
	public function guardausuario(){
		
		 $post=$this->input->post(NULL,TRUE);

		$nomcompleto=$this->input->post('nomcompleto');  
		$username=$this->input->post('username');  
		$contrasegna=md5($this->input->post('contrasegna'));  
		$tpusuario=$this->input->post('tpusuario');  
		$cantidad=$this->input->post('cantidad');  
	
			$resultado=$this->md_usuarios->ingresasuario($nomcompleto,$username,$contrasegna,$tpusuario);
			$idusuario=$resultado;
			
			 for ($i=1;$i<=$cantidad;$i++) {
				  
				  
				  if (isset($_POST["selpermiso".$i]))
				  {
				  	$accpost=$_POST["selpermiso".$i];  
					  $idpagina=$_POST["idpagina".$i];
					 
					
					if ($accpost=="on"){
						$this->md_usuarios->addpermisouser($idusuario,$idpagina);
					}
				  }
			 }
	

			 redirect('/usuarios/listado/?cod=1','refresh');
	
	}
	
	public function updateusuario(){
		
		 $post=$this->input->post(NULL,TRUE);

		$nomcompleto=$this->input->post('nomcompleto');  
		$username=$this->input->post('username');  
		$contrasegna=md5($this->input->post('contrasegna'));  
		$tpusuario=$this->input->post('tpusuario');  
		$cantidad=$this->input->post('cantidad');
		$idusuario=$this->input->post('idusuario');  
	
			$this->md_usuarios->actualizasuario($nomcompleto,$username,$contrasegna,$tpusuario,$idusuario);
			
			
			$this->md_usuarios->borrapermisouser($idusuario);
			
			 for ($i=1;$i<=$cantidad;$i++) {
				  
				  
				  if (isset($_POST["selpermiso".$i]))
				  {
				  	$accpost=$_POST["selpermiso".$i];  
					  $idpagina=$_POST["idpagina".$i];
					 
					
					if ($accpost=="on"){
						$this->md_usuarios->addpermisouser($idusuario,$idpagina);
					}
				  }
			 }
	

			 redirect('/usuarios/listado/?cod=2','refresh');
	
	}
	
	public function eliusuario(){
	$idusuario=$this->input->get('user');  
	$estado=$this->input->get('estado');  
	
	if ($estado==0){
	 $cambiaestado=1;
	}elseif ($estado==1){
	 $cambiaestado=0;
	}
	
	$this->md_usuarios->eliusuario($idusuario,$cambiaestado);
	
	redirect('/usuarios/listado/?cod=3','refresh');

	
	}
	
	
}
?>
