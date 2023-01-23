<?php
include "../koneksi.php";
$id = $_GET['kode_bertanya'];
$sql1 = "DELETE FROM tb_bertanya WHERE kode_bertanya='$id'";
if (mysqli_query($connect,$sql1)){
    echo "<script>alert('Pertanyaan berhasil di hapus!'); window.location=('index.php');</script>";
//echo "<script type='text/javascript'>window.location.replace('pakar-mode.php');</script>";
}
?>