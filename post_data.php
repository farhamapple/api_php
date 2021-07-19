<?php

$url="http://localhost/api_php/post.php";
$data=array("nama"=>"Farham","telp"=>"000", "alamat" => "Jalan Post");
 
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
echo $response; 

?>