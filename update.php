<?php
// Ambil Method PUT, tembak dengan Postmen di form-data, dan id pada GET

$id = $_GET['id'];


$nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
$telp = isset($_POST["telp"]) ? $_POST["telp"] : "";
$alamat = isset($_POST["alamat"]) ? $_POST["alamat"] : "";

// Query update ke Database

$hasil_setelah_update = array(
	"id" => $id,
	"nama" => $nama,
	"telp" => $telp,
	"alamat"=> $alamat
);

header('Content-Type: application/json');			
echo json_encode($hasil_setelah_update);

?>