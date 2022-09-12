<?php
ob_start();
session_start();
include "config/connection.php";

$username = $_POST['username'];
$password = $_POST['password'];
$queryLogin = pg_query($connect, "SELECT * FROM users WHERE username='$username' AND password = '$password'");
$user = pg_num_rows($queryLogin);

if($user > 0){
   $_SESSION['username'] = $username;
   $_SESSION['status'] = "login";
    echo "<script>alert('Login berhasil!');
                document.location = 'index.php';
    </script>";
}else{
     echo "<script>alert('Login gagal!');
                document.location = 'login.php';
    </script>";
}