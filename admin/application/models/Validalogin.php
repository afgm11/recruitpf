<?php

class validalogin extends CI_Model
 {
	function __construct()
	{
		parent::__construct();
	}
	
	public function val_login($nomusuarios,$passusuario)
	{
		
		
		$this -> db -> where('nuser',$nomusuarios);
		$this -> db -> where('npass',$passusuario);
		$this -> db -> where('estado',0);
      // $this -> db -> limit(1);
		$query = $this -> db -> get('wd_usuarios');

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
