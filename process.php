<?php
$file = "my_data.json";
$array = array();
// ambil data di bawah
$ambildata = file_get_contents($file);
$decodedata = json_decode($ambildata, true);

$data = array(
    "nama" => $_POST['nama'],
    "email" => $_POST['email'],
    "alamat" => $_POST['alamat'],
    "gender" => $_POST['gender'],
    "program" => $_POST['program'],
    "tahun" => $_POST['tahun']

);
array_push($decodedata, $data);
$json = json_encode($decodedata, JSON_PRETTY_PRINT);
file_put_contents($file, $json);
?>