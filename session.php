<?php
include ("koneksi.php");
$user = $_POST['nama'];
    session_start(); 
    $_SESSION['nama'] = $user;//nyimpen session nama
    header('location:pilihan.php');

?>