<?php
// Ambil data dari api

$arr = json_decode(file_get_contents("http://localhost/api_php/get.php"));

print_r($arr);

?>