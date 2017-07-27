<?php
	require_once 'vendor/autoload.php';
	
	use SWServices\Authentication\AuthenticationService as Authentication;
	$params = array(
	    "url"=>"http://services.test.sw.com.mx",
	    "user"=>"demo",
	    "password"=> "12345678a9"
	);
	
	try {
	    $auth = Authentication::auth($params);
		$result = $auth::Token();
		header('Content-type: text/plain');
		if($result->status == "success") {
			echo $result->data->token;
		} else { //lógica de error independiente para cada proyecto
			echo $result->message;
		}
	} catch(Exception $e){
	    echo 'Caught exception: ',  $e->getMessage(), "\n";
	}

?>