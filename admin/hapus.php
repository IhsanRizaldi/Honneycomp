<?php
include "../koneksi.php";
$id = $_GET['kode_history'];
$delete = mysqli_query($connect,"DELETE FROM tb_history WHERE kode_history='$id'");

if ($delete) {
    header("Location:index.php");
}else{
    echo"Terjadi Kesalahan ".mysqli_error($connect);
}

?>