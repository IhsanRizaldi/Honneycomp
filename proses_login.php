<?php
session_start();

include "koneksi.php"; //ambil koneksi ke db

$username = $_POST['username'];
$password     = $_POST['password'];
$pass = stripslashes($password);
$pass     = mysqli_real_escape_string($connect, $pass); //mencegah mysql injection
$pass = md5($pass);

  
$login = mysqli_query($connect, "SELECT * FROM tb_admin WHERE username = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);

  if ($row['username'] == $username AND $row['password'] == $pass){
   $_SESSION['login'] = true;
    $_SESSION['admin'] = $row['username'];//menyimpan session username
    header('location:admin/index.php');}

  else{ //kalo levelnya bukan user ato admin maka masuk sini
    echo "<script>alert('Maaf, Pastikan Username dan Password anda benar!'); window.location=('login.php');</script>";}
?>