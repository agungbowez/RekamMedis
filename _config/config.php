<?php 
	//setting default time zone
	date_default_timezone_set('Asia/Jakarta');
	//session start
	session_start();

	// connection database
	$con = mysqli_connect('localhost', 'root', '', 'rumahsakit');
	if(mysqli_connect_error()){
		echo mysqli_connect_error();
	}

	//function base url
	function base_url($url = null) {
		$base_url = "http://localhost/RekamMedis";
		if($url != null){
			return $base_url."/".$url;
		}else{
			return $base_url;
		}
	}
 ?>