<?php

	define('DEV',1);

	if (DEV ==1 ){ 
		/*$server="192.168.1.122";
		$db="vulcano_fb_tabs";
		$login="root";
		$pass="";*/

		$server="89.26.244.36";
			$db="fhost766_passatempos";
			$login="fhost766_passfb";
			$pass="TuxGill#2016";
			
	} else {


		/*	$server="localhost";
			$db="fhost766_passatempos";
			$login="fhost766_passfb";
			$pass="TuxGill#2016";*/

						$server="localhost";
			$db="tuxdigit_passvulcanos";
			$login="tuxdigit_passfb";
			$pass="TuxGill#2016";
		}	

	// connect to the server

	/* DB CONNECT */
	$conn = new mysqli($server, $login, $pass, $db);

	if (mysqli_connect_errno()) {
	  exit('Connect failed: '. mysqli_connect_error());
	}

	define('NOME_PASSATEMPO',utf8_decode('Dia da Criança'));
	
	/* FB CRED */
	define('APP_ID','1529223720716423');
	define('APP_SECRET','8e4aa9f21b2aa31360f727807285a055');
	//define('FB_PAGE_URL','https://www.facebook.com/TuxTabTesting/app_268852663315785');
	define('FB_PAGE_URL','https://www.facebook.com/TuxTabTesting/app_642287265871687');

	define('FB_IMG_SHARE','http://www.tux-gill.pt/clientes/vulcano/facebook/tab_passatempo/img/dia_mundial_poupanca_1200x628.png');
	define('FB_TITLE_SHARE',' ');
	define('FB_TEXT_SHARE',' ');
	
	//define('FB_PAGE', 'https://www.facebook.com/TuxTabTesting/app_292802587596729');
	define('FB_PAGE', 'https://www.facebook.com/TuxTabTesting/app_642287265871687');

	/* FB INIT */
	/*require ("facebook/src/facebook.php");

	$facebook = new Facebook(array(
	   'appId'  => APP_ID,
	   'secret' => APP_SECRET,
	   'cookie' => true,
	));*/
	date_default_timezone_set("Europe/Lisbon");

?>