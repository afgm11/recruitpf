<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceso extends CI_Controller {

	function __construct()
	{
	  parent::__construct();
	  
	   $this->load->model('md_urls','',TRUE);
	  	
	}

	public function index(){

		$urlcorta=$_GET["gt"];

		$data1=$this->md_urls->list_url($urlcorta);
		
	 		if ($data1!=""){
				foreach($data1 as $row)
				 {	
					$urlacc=$row->url;
				 }
			}

		echo $urlacc;
?>
		<meta http-equiv=refresh content="0;URL=<?php echo $urlacc; ?>"><a href="<?php echo $urlacc; ?>">Continue</a><script>location.href=<?php echo json_encode($urlacc, JSON_HEX_TAG | JSON_UNESCAPED_SLASHES); ?></script>-->
<?php

}

	
}
