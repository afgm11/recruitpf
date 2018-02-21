<?php

class md_urls extends CI_Model
 {
	function __construct()
	{
		parent::__construct();
	}
	
	
	public function ingurl($email,$urls,$urlcorta){
	
		$data2 = array(
				'mailcliente' => $email
			);
        $this->db->insert('wd_clientes',$data2);
        $idcliente=$this->db->insert_id();
        
        $data3 = array(
            'idcliente' => $idcliente,
            'url' => $urls,
            'urlcorta' => $urlcorta
        );
        $this->db->insert('wd_urls',$data3);
       
       
		return $idcliente;
	}
	
    public function list_url($urlscort)
	{

		$this->db->select('url');
        $this->db->from('wd_urls');
        $this->db->where('urlcorta',$urlscort);
		
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
