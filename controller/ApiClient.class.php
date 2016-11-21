<?php 
/**
* 
*/
define('__ROOT__', dirname(dirname(__FILE__))); 
//include_once(__ROOT__.'/connection/connection.php');
class ApiClient
{
	
	private $api;

	public function connect(){
		if (!isset($api)) {
			# code...
			require_once(__ROOT__.'/api/routeros_api.class.php');
			require_once(__ROOT__.'/connection/connection.php');
			$this->api = new RouterosAPI();
			//$this->api->debug=true;
			$this->api->connect($ip,$user,$pass,$port);
		}
	}

	public function isconnected(){
		return $this->api->connected;
	}

	public function exec($command){
		$this->api->write($command,true);
		$read = $this->api->read(false);
		return $this->api->parseResponse($read);
	}
}

?>