<?php 
	require_once('controller/ApiClient.class.php'); 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$client = new ApiClient();
		$client->connect();
		$command = $_REQUEST['command'];
		if ($client->isconnected()){
			if (isset($command)) {
				$result = $client->exec($command);
				echo json_encode($result);
			}else echo "campo vacio";
		}
	}else echo "Error"

?>