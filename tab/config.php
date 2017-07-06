<?php
	define('PRODUCTION',false);

	
	if(!PRODUCTION){
		$server_db="192.168.1.122";
		$login_db="root";
		$pass_db="";
		$db="bpop_conversassoltas";
		$conn = new PDO('mysql:host=192.168.1.122;dbname=bpop_conversassoltas', 'root','');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		define("LIVE_SITE","http://localhost/bpop/54966_tab_conversas_soltas/");
		//define("INCLUDE_UTIL", "/generis/54040_linhas_otc_v2/util.php");

		
	} else {
		$server_db="tuxdigitalworks.pt";
		$login_db="tuxdigit_parcer";
		$pass_db="TuxGill#2017";
		$db="tuxdigit_parcerias";
		// $conn = new PDO('mysql:host=localhost;dbname=', '','');
		$conn = new PDO('mysql:host=tuxdigitalworks.pt;dbname=tuxdigit_parcerias', 'tuxdigit_parcer','TuxGill#2017');

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		define("LIVE_SITE","");
		define("LIVE_SITE_ADMIN","");
		define("INCLUDE_UTIL", "");
	}



?>