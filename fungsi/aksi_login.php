<?php
// memulai session
    session_start();


include 'koneksi.php';
// memeeriksa apakah tombo login ditekan atau tidak
if(isset($_POST['submit'])){
    // membersihkan karakter yang di inputkan oleh user
    $username = trim(htmlspecialchars($_POST['username']));
    $password = htmlspecialchars($_POST['pass']);

    // memeriksa username
    $sql = "SELECT * FROM tb_pengguna WHERE username='$username'";
    $query = mysqli_query($koneksi, $sql);
    $result = mysqli_fetch_assoc($query);

    // memeriksa apakah username ada atau tidak
    if(mysqli_num_rows($query) > 0){
        // memeriksa inputan password dengan password terenkripsi di database
        if(password_verify($password,$result['password'])){
            // membuat session untuk mengingat login
            $_SESSION['loged'] = true;
            if($result['level'] == 1){
                // mengatur session untuk level admin
                $_SESSION['level'] = 1;
                header('location:../admin/index.php');
            }
            else{
                // mengatur session untuk level pengguna
                $_SESSION['level'] = 0;
                header('location:../auth/login/index.php?login=berhasil');
            }
        }
        else{
            // alihkan jika password salah
            header('location:../auth/login/index.php?login=gagal&status=password-error');
        }
    }
    else{
        // alihkan jika username tidak terdaftar
        header('location:../auth/login/index.php?login=gagal&status=username-tidak-terdaftar');
    }
}