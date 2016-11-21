<?php 
	// Data Conection
	$ip="192.168.0.250";
	$user="apiTest";
	$pass="apiTest";
	$port="8728";
	//----------------
	/*$router = new RouterosAPI();
	$router->debug =false;
	if ($router->connect($ip,$user,$pass,$port)) {
		$router->write("/system/ident/getall", true);
		$read = $router->read(false);
		$array = $router->parseResponse($read);
		//var_dump($array);
		$name = $array[0]["name"];
		if (count($array)>0) {
			$router->write("/system/licen/getall",true);
			$read = $router->read(false);
			$array = $router->parseResponse($read);
			//var_dump($array);
			$nlevel = $array[0]["expires-in"];
		
			$router->write("/system/reso/getall",true);
			$read = $router->read(false);
			$routerDetails = $router->parseResponse($read);
			var_dump($routerDetails);

			$router->write("/system/pack/getall",true);
			$read = $router->read(false);
			$array = $router->parseResponse($read);
			var_dump($array);
		}
	}else echo "No se puedo conectar";*/
?>