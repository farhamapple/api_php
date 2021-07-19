<?php
// Ambil Method Post, tembak dengan Postmen di form-data

$nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
$telp = isset($_POST["telp"]) ? $_POST["telp"] : "";
$alamat = isset($_POST["alamat"]) ? $_POST["alamat"] : "";

// Query insert ke Database

$hasil_setelah_insert = array(
	"nama" => $nama,
	"telp" => $telp,
	"alamat"=> $alamat
);

header('Content-Type: application/json');			
echo json_encode($hasil_setelah_insert);

?>