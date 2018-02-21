<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct()
	{
	  parent::__construct();
	  
	   $this->load->model('md_urls','',TRUE);
	  	
	}


	public function url()
	{
		header('Access-Control-Allow-Origin: *');
        header("Content-Type: application/json; charset=UTF-8");

        /*$token='9naWYcVEYpI-~|xDSy';
		$mail = "afgm11@gmail.com";
		$url = "http://www.google.cl";*/

		$token = $_POST['token'];
		$mail = $_POST['mail'];
		$url = $_POST['url'];
		// separa token

		$resultado = '&jkcff9'.substr($token, 5).'%9zq!@';
		// valida si api corresponde si es asi realiza el ingreso de la url y mail a la bd 
		// y ademas retorna datos al formulario

		if ($resultado == "&jkcff9cVEYpI-~|xDSy%9zq!@" ) {

			$q = str_replace('/', '', $url);
			$urls = urldecode($url);
			$format = strtolower($url);
		
			$length=5;
			$urlcorta=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 
	
			$resultado=$this->md_urls->ingurl($mail,$urls,$urlcorta);
			//$idusuario=$resultado;
			$urlresul=base_url()."index.php/acceso/?gt=".$urlcorta;
			echo json_encode($urlresul);

		} else {

			echo 'Sin Acceso';
		}
	}
}
