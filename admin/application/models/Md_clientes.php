<?php

class md_clientes  extends CI_Model
 {
	function __construct()
	{
		parent::__construct();
	}
	
   public function list_clientes($datcons,$tpcons)
	{

		$this->db->select('idcliente,mailcliente');
        $this->db->from('wd_clientes ');
		$this->db->order_by('idcliente','desc');
		
		
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

	public function list_clientes_cons($idcliente)
	{

		$this->db->select('idcliente,mailcliente');
		$this->db->from('wd_clientes ');
		$this->db->where('idcliente',$idcliente);
		
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

	public function list_clientes_urls()
	{

		$this->db->select('a.id,a.url,a.urlcorta,b.mailcliente,b.idcliente');
		$this->db->from('wd_urls a');
		$this->db->join('wd_clientes b', 'b.idcliente=a.idcliente');
		$this->db->order_by('a.id','desc');
		
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
	

	
	
}
