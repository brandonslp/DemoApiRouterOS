<?php 
	require_once('controller/ApiClient.class.php'); 
?>
<?php
	$client = new ApiClient();
	$client->connect();
	if ($client->isconnected()):
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mikrotik Api Test</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		<?php 
			var_dump($client->exec("/system/ident/getall"));
			var_dump($client->exec("/system/licen/getall"));
			var_dump($client->exec("/system/reso/getall"));
			var_dump($client->exec("/system/pack/getall"));
		 ?>
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		<div action="exec.php" method="POST" role="form">
			<legend>Ejecutar comando</legend>
		
			<div class="form-group">
				<label for="">label</label>
				<input type="text" class="form-control" id="comando" placeholder="Input field">
			</div>
			<button  id="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 jumbotron">
		<h1>Resultado</h1>
  		<p id="result"></p>
	</div>
	<script type="text/javascript" charset="utf-8" async defer>
		var button = document.getElementById('submit');
		
		button.onclick = function () {
			var command = document.getElementById('comando').value;
			var result = document.getElementById('result');
			$.post( "exec.php", { command: command})
				  .done(function( data ) {
				    //alert( "Data Loaded: " + data);
				    $('#result').html(data);
				  });
		}
	</script>
</body>
</html>
<?php 
	else:
		echo "No se pudo conectar";
	endif;
 ?>