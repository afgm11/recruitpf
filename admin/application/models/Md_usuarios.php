<?php

class md_usuarios extends CI_Model
 {
	function __construct()
	{
		parent::__construct();
	}
	
   public function list_usuarios()
	{
		
		//
		//$idtpusuario=$_SESSION["tpusuarios"];
		
		$this->db->select('a.iduser,a.nomcompleto,a.nuser,npass,a.estado,a.tpusuarios,a.mailuser,
		(select b.nomtipo from wd_tpusuarios b where b.idtpusuario=a.tpusuarios) as tpuser');
        $this->db->from('wd_usuarios a');
      
	    //$this->db->where('b.estado',0);
		
		$this->db->order_by('a.iduser','asc');
		
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
	
	public function valexisuser($usuario)
	{
	
		$this->db->select('a.iduser,a.nomcompleto');
        $this->db->from('wd_usuarios a');
        $this->db->where('a.nuser',$usuario);
		
				
		$query = $this->db->get();
	  
		if($query -> num_rows() >= 1)
		{
			return $query->result();
			return true;
		}
		else
		{
		   return false;
		}
	
	
	}
	
	public function ingresasuario($nomcompleto,$username,$contrasegna,$tpusuario){
	
	
		$data2 = array(
				'nomcompleto' => $nomcompleto,
				'nuser' => $username,
				'npass' => $contrasegna,
				'tpusuarios' => $tpusuario,
				'fingreso' => date("Y-m-d")
			);
				
		$this->db->insert('wd_usuarios',$data2);
		$idusuario=$this->db->insert_id();
		return $idusuario;
	}
	
	public function actualizasuario($nomcompleto,$username,$contrasegna,$tpusuario,$idusuario){
	
	
		$data2 = array(
				'nomcompleto' => $nomcompleto,
				'nuser' => $username,
				'npass' => $contrasegna,
				'tpusuarios' => $tpusuario,
				'fingreso' => date("Y-m-d")
			);
				
		$this -> db -> where('iduser',$idusuario);		
		$this->db->update ('wd_usuarios',$data2);
	}
	
	
	public function eliusuario($idusuario,$estado){
	
	   
	
		$data2 = array(
				'estado' => $estado,
			);
		$this -> db -> where('iduser',$idusuario);		
		$this->db->update ('wd_usuarios',$data2);
		
	}
	
	
	public function borrapermisouser($idusuario){
	
	
		$data2 = array(
				'iduser' => $idusuario,
			);
				
		$this->db->delete('wd_permisos',$data2);
		
	}
	
	public function addpermisouser($idusuario,$opcsistema){
	
	
		$data2 = array(
				'iduser' => $idusuario,
				'idopsist' => $opcsistema,
				'estado' => 0,
			);
				
		$this->db->insert('wd_permisos',$data2);
		
	}
	
	
	
	
	
	
	public function data_usuarios($idusuario)
	{
		
		//
		//$idtpusuario=$_SESSION["tpusuarios"];
		
		$this->db->select('a.iduser,a.nomcompleto,a.nuser,npass,a.estado,a.tpusuarios,a.mailuser');
        $this->db->from('wd_usuarios a');
      
	    $this->db->where('a.iduser',$idusuario);
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
	
	public function list_tpusuario(){
	    
		$this->db->select('a.idtpusuario,a.nomtipo,a.estado');
        $this->db->from('wd_tpusuarios a');
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
