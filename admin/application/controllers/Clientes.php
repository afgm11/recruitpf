<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clientes extends CI_Controller {

	
	function __construct()
	 {
	   parent::__construct();
	   if(!isset($_SESSION["tknsession"])){
		 session_destroy();
		 redirect('/login','refresh');
		}
	    $this->load->model('md_clientes','',TRUE);
		$this->load->model('md_menu','',TRUE);
	     
	 } 
	 
	public function index()
	{
		

	}
	
	public function listado()
	{
		
		$datcons=$this->input->get('datcons');  
		$tpcons=$this->input->get('tpcons');
		$codmens=$this->input->get('cod');		
		//menu de opciones 		
		$data['menuopc'] = $this->md_menu->list_menu();
		$data['idopcpadre']=272;
		$data['idopc']=273;
		// breadcump
		$data1['nomopc']='Clientes';
		$data1['nomruta1']='Listado Clientes';
		$data1['listclientes']= $this->md_clientes->list_clientes($datcons,$tpcons);
		
		$data1['codmens']=$codmens;
    		
		$this->load->view('v_headers');  // camila 
		$this->load->view('v_menu',$data); //menu opciones
		$this->load->view('cl_listado',$data1); //  contenido
		$this->load->view('v_footers'); // footers
	}

	public function urlclientes()
	{
		
		$datcons=$this->input->get('datcons');  
		$tpcons=$this->input->get('tpcons');
		$codmens=$this->input->get('cod');		
		//menu de opciones 		
		$data['menuopc'] = $this->md_menu->list_menu();
		$data['idopcpadre']=307;
		$data['idopc']=322;
		// breadcump
		$data1['nomopc']='Urls Clientes';
		$data1['nomruta1']='Listado URLS Clientes';
		$data1['listclientes']= $this->md_clientes->list_clientes_urls();
		
		$data1['codmens']=$codmens;
    		
		$this->load->view('v_headers');  // camila 
		$this->load->view('v_menu',$data); //menu opciones
		$this->load->view('urls_listado',$data1); //  contenido
		$this->load->view('v_footers'); // footers
	}
	
	public function listadoexcel()
	{
		
		$datcons=$this->input->get('datcons');  
		$tpcons=$this->input->get('tpcons');
		$codmens=$this->input->get('cod');		
		//menu de opciones 		
		$data['menuopc'] = $this->md_menu->list_menu();
		$data['idopcpadre']=272;
		$data['idopc']=273;
		// breadcump
		$data1['nomopc']='Clientes';
		$data1['nomruta1']='Listado Clientes';
	    $data1['listclientes']= $this->md_clientes->list_clientes($datcons,$tpcons);
		$data1['codmens']=$codmens;
    		
		//echo "aaa";
		 $headers = ''; // just creating the var for field headers to append to below
    	 $datos="Idaccount;Rut;Nombre o Razon Social;Nombre de Fantasia;Mail 1;Mail 2;\n";
		 if ($data1['listclientes']!=""){
				foreach($data1['listclientes'] as $rowus)
	 			 {
				$datos.= $rowus->idaccount.";".$rowus->id.";".$rowus->name.";".$rowus->fantasy_name.";".$rowus->mail.";".$rowus->mail_opt.";\n";
				
                  }
             }
             
		 
		$datos.="";
		//echo $datos;
		$filename='listaclientes';
	
		 header("Content-type: application/x-msdownload");
          header("Content-Disposition: attachment; filename=$filename.csv");
		  echo mb_convert_encoding("$datos",'utf-16','utf-8');
		//$this->load->view('cl_listado',$data1); //  contenido
		
	}
	
	public function modmailcli(){
		
		$idcliente=$this->input->get('cliente');  
	
	//menu de opciones 		
		$data['menuopc'] = $this->md_menu->list_menu();
		$data['idopcpadre']=272;
		$data['idopc']=273;
		// breadcump
		$data1['nomopc']='Clientes';
		$data1['nomruta1']='Modificaci&oacute;n Clientes';
	    $data1['listclientes']= $this->md_clientes->list_clientes_cons($idcliente);
    	
		$this->load->view('v_headers');  // camila 
		$this->load->view('v_menu',$data); //menu opciones
		$this->load->view('cl_modificacion',$data1); //  contenido
		$this->load->view('v_footers'); // footers
	}
	
	public function modcliente(){
		 $post=$this->input->post(NULL,TRUE);
		
		$idcliente=$this->input->post('idcliente');  
		$mailcliente=$this->input->post('mailcliente');
	    
		$datcons="";  
		$tpcons="";
		
		$this->md_clientes->mdcliente($idcliente,$mailcliente);
	
	    redirect('/clientes/listado/?cod=2','refresh');
	
	}
	
	public function validacliente(){
		 $post=$this->input->get(NULL,TRUE);
		
		$idcliente=$this->input->get('cdcot');  
		$tiposel=$this->input->get('tp');  
		
	    $data1= $this->md_clientes->val_clientes($idcliente,$tiposel);
		
	 		if ($data1!=""){
				
				
				foreach($data1 as $row)
				 {
					
					$idaccount=$row->idaccount;
					$name=$row->name;
					$id=$row->id;
					$mail=$row->mailclie;
					$fantasy_name=$row->fantasy_name;
					$mail_opt=$row->mail_opt;
					$direccion=$row->direccion;
					$idcomuna=$row->idcomuna;
					$idregion=$row->idregion;
					$giro=$row->giro;

					
					if ($mail_opt==""){
						$mail_opt=$mail;
					}else{
						$mail_opt=$row->mail_opt;
					}
					
					
				 }
				
				$data="0|".$idaccount."|".$name."|".$id."|".$mail."|".$fantasy_name."|".$mail_opt."|".$direccion."|".$idcomuna."|".$idregion."|".$giro;
				
		 	 }else{
				$data="1|0";
			
		 	 } 
			 echo utf8_encode($data);
	
	}
	
		
	
}
?>
