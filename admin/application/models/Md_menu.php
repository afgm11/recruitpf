<?php

class md_menu  extends CI_Model
 {
	function __construct()
	{
		parent::__construct();
	}
	
   public function list_menu()
	{
		
		$idusuario=$_SESSION["iduser"];
		//$idtpusuario=$_SESSION["tpusuarios"];
		
		$this->db->select('b.idopcsist,b.titulo,b.pagina,b.tipo,b.icono, b.nropag');
        $this->db->from('wd_permisos a');
        $this->db->join('wd_opcionessistema b', 'a.idopsist= b.idopcsist');
	    $this->db->where('a.iduser',$idusuario);
		$this->db->where('b.estado',0);
		$this->db->order_by('b.orden','asc');
		$this->db->order_by('b.ordenint','asc');
		
		$query = $this->db->get();
	  
		if($query -> num_rows() >= 1)
		{
		
			return $query->result();
			return true;
		}
		else
		{
			//var_dump($query);
		
		   return false;
		}
		
		
	}
	
	public function list_menu_usuario($usuario)
	{
		if ($usuario=="0"){
		  $usuario=1;
		}else{
		  $usuario=$usuario;
		}
	
		
		$this->db->select('b.idopcsist,b.titulo,b.pagina,b.tipo,b.icono, b.nropag, (select count(*) from wd_permisos a where a.idopsist=b.idopcsist and a.iduser='.$usuario.') as opcionexis');
        $this->db->from('wd_opcionessistema b');
		$this->db->where('b.estado',0);
		$this->db->order_by('b.idopcsist','asc');
		
		$query = $this->db->get();
	 
		if($query -> num_rows() >= 1)
		{
		
			return $query->result();
			return true;
		}
		else
		{
			//var_dump($query);
		
		   return false;
		}
		
		
	}
}
