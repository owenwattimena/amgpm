<?php
include 'koneksi.php';

if(isset($_POST['submit'])){   
    $nama =  htmlspecialchars($_POST['nama']);
    $username = trim(htmlspecialchars($_POST['username']));
    $password = htmlspecialchars($_POST['password']);

    $password_hash = password_hash ($password , PASSWORD_DEFAULT); 


    $tanggal = date('Y-m-d',time());

    // pengecekan data apakah username sudah terdaftar atau belum
    $sql_user = "SELECT * FROM tb_pengguna WHERE username='$username'";
    $query_user = mysqli_query($koneksi, $sql_user);
    $result_user = mysqli_fetch_assoc($query_user);
    $jumlah_user = mysqli_num_rows($query_user);

    if($jumlah_user == 0){
        // insert data ke tabel pengguna jika username blm terdaftar
        $sql = "INSERT INTO tb_pengguna (nama, username, password, level, time)VALUES('$nama', '$username', '$password_hash', 0, '$tanggal')";
        $query = mysqli_query($koneksi, $sql);
        if(mysqli_affected_rows($koneksi)){
            header('location:../auth/login/index.php?registrasi=berhasil');
        }
        else{
            header('location:../auth/login/index.php?registrasi=gagal');
        }
    }
    else{
        header('location:../auth/login/index.php?registrasi=gagal&status=user_terdaftar');
    }
}
else{
    header('location:../auth/login/index.php');
}
