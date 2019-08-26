<?php 

$koneksi = mysqli_connect("localhost","root","","db_amgpm");

// cek koneksi

if (mysqli_connect_errno()) {

	echo "koneksi database gagal total : " . mysqli_connect_error();


}




 ?>