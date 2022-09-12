<?php
include "config/connection.php";
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
//query save
$Query = pg_query($connect, "INSERT INTO users VALUES('$username', '$password', '$nama_lengkap')");
if($Query){
    echo "<script>alert('Akun berhasil dibuat!');
                document.location = 'login.php';
    </script>";
}else{
    echo "<script>alert('Akun gagal dibuat!');
                document.location = 'register.php';
    </script>";
}