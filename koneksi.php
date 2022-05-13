<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'afh iyh';

$koneksi = mysqli_connect($host, $user, $pass, $database);

if ($koneksi ->connect_error){
	die("Koneksi Gagal: ".$koneksi->connect_error);
}
?>