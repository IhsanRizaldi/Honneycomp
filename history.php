<?php
include "koneksi.php";
include "function.php";
session_start();
$nama = $_SESSION['nama'];
$kode = $_GET['kode'];
$solusi = $kode;

$sql1 = "INSERT INTO tb_history (nama, solusi) VALUES ('$nama', '$solusi')";
if (mysqli_query($connect,$sql1)){
    echo "<script>window.location=('session_end.php');</script>";
//echo "<script type='text/javascript'>window.location.replace('pakar-mode.php');</script>";
  }
  else  echo "<script>alert('gagal');</script>";

?>