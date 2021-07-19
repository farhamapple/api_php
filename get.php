<?php
// Ambil data dari database
// if(!isset($_SERVER['PHP_AUTH_USER'])){
// 	header("WWW-Authenticate: Basic realm=\"PrivateArea\"");
// 	header("HTTP/1.0 401 Unauthorized");
// 	print "Sory, you need propre credential";
// 	exit;
// }else{
// 	if($_SERVER['PHP_AUTH_USER'] == 'andri' && $_SERVER['PHP_AUTH_USER_PW'] == '12345'){
// 		print "Youre In PrivateArea";
// 	}else{
// 		print "Username Password Basic Wrong";
// 	}
// }

$arr = array();

$arr['status'] = "OK";
for($i=0; $i<=10; $i++){
	$arr['data'][$i] = array(
				"nama" => "Nama orang ke ".$i,
				"telp" => "Telp orang ke ".$i,
				"alamat"=> "Jl. Kebajikan No ".$i
	);
}
header('Content-Type: application/json');			
echo json_encode($arr);


?>