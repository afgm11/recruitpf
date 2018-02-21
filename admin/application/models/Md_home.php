<?php

class md_home  extends CI_Model
 {
	function __construct()
	{
		parent::__construct();
	}
	
	public function resumendatos()
	{
		
		$this->db->select('1 as tt, 
		(select count(*) from vm_pagoswebpay where estpago=2 and tppago=1) as wpexito,
		(select count(*) from vm_pagoswebpay where estpago=3 and tppago=1) as wpanula,
		(select count(*) from vm_pagoswebpay where estpago=5 and tppago=1) as wperror,
		(select count(*) from vm_pagoswebpay where estpago=4 and tppago=1) as wpcancelado,
		
		(select count(*) from vm_pagoswebpay where estpago=2 and tppago=2) as ptexito,
		(select count(*) from vm_pagoswebpay where estpago=3 and tppago=2) as ptanula,
		(select count(*) from vm_pagoswebpay where estpago=5 and tppago=2) as pterror,
		(select count(*) from vm_pagoswebpay where estpago=4 and tppago=2) as ptcancelado,
		');
        
		$this->db->from('vm_pagoswebpay a');
		$this -> db -> limit(1);
		
	
       
		
	  
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
