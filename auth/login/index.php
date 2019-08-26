<?php
	session_start();
	// memeriksa session login
	if(isset($_SESSION['loged'])){
		if($_SESSION['level'] == 1){
			header('location:../../admin/index.php');
		}
	}

	// memeriksa pesan hasil registrasi
	if(isset($_GET['registrasi'])){
		// jika berhasil tampilkan alert 
		if($_GET['registrasi'] == 'berhasil'){
			echo "<script>alert('Registrasi berhasil!')</script>";
		}
		else{
			// jika gagal periksa status dan tampilkan alert 
			if(isset($_GET['status'])){
				if($_GET['status'] == 'user_terdaftar'){
					echo "<script>alert('Registrasi gagal!Username telah terdaftar!')</script>";
				}
			}
			else{
				echo "<script>alert('Registrasi gagal!')</script>";
			}
		}
	}
	// memeriksa pesan hasil login
	if(isset($_GET['login'])){
		if($_GET['login'] == 'berhasil'){
			echo "<script>alert('Registrasi berhasil!')</script>";
		}
		else{
			if(isset($_GET['status'])){
				if($_GET['status'] == 'username-tidak-terdaftar'){
					echo "<script>alert('Login gagal!Username belum terdaftar!')</script>";
				}
				elseif($_GET['status'] == 'password-error'){
					echo "<script>alert('Login gagal!Password salah!')</script>";
				}
			}
			else{
				echo "<script>alert('Login gagal!')</script>";
			}
		}
	}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-5 p-b-20">
                <form action='../../fungsi/aksi_login.php' method="POST" class="login100-form validate-form">
                    <span class="login100-form-avatar">
                        <img src="images/logo.jpg" alt="AVATAR">
                    </span>
                    <div class="wrap-input100 validate-input m-t-50 m-b-20" data-validate="Enter username">
                        <input class="input100" type="text" name="username">
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-40" data-validate="Enter password">
                        <input class="input100" type="password" name="pass">
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="submit">
                            Login
                        </button>
                    </div>

                    <ul class="login-more p-t-60">


                        <li>
                            <span class="txt1">
                                Don’t have an account?
                            </span>

                            <a href="../registrasi/index.html" class="txt2">
                                Sign up
                            </a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>

</html>