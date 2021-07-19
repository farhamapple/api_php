<?php
// Ambil data dari database

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