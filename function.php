<?php

function answer($kode){
    if($kode=='p-1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-1a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-2'>Tidak</a>";
    }
    if($kode=='p-1a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-1a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-1b'>Tidak</a>";
    }

    if($kode=='p-2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-2a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-3'>Tidak</a>";
    }
    if($kode=='p-2a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-2a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-2b'>Tidak</a>";
    }


    if($kode=='p-3'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-3a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-4'>Tidak</a>";
    }
    if($kode=='p-3a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-3a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-3b'>Tidak</a>";
    }


    if($kode=='p-4'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-4a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-5'>Tidak</a>";
    }
    if($kode=='p-4a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-4a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-4b'>Tidak</a>";
    }

    if($kode=='p-5'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-5a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-6'>Tidak</a>";
    }
    if($kode=='p-5a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-5a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-5b'>Tidak</a>";
    }

    if($kode=='p-6'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-6a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-7'>Tidak</a>";
    }
    if($kode=='p-6a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-6a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-6b'>Tidak</a>";
    }

    if($kode=='p-7'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-7a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-8'>Tidak</a>";
    }    
    if($kode=='p-7a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-7b'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-7c'>Tidak</a>";
    }    
    if($kode=='p-7b'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-7a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-7b'>Tidak</a>";
    }    

    if($kode=='p-8'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-8a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-9'>Tidak</a>";
    }
    if($kode=='p-8a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-8b'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-8c'>Tidak</a>";
    }
    if($kode=='p-8b'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-8a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-8b'>Tidak</a>";
    }

    if($kode=='p-9'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='pertanyaan.php?kode=p-9a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=x-1'>Tidak</a>";
    }
    if($kode=='p-9a'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-9a'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-dark' href='solusi.php?kode=s-9b'>Tidak</a>";
    }
}

function kesimpulan($solusi){
    include 'koneksi.php';
    $sql = "SELECT * from tb_kesimpulan WHERE solusi='$solusi' AND status='setuju'";
    $data = mysqli_query($connect,$sql);
    while ($row = mysqli_fetch_assoc($data)) {
        echo '<p>-'.$row['fakta'].'</p>';
    }  
}

function solusi($kode){    
    if ($kode=='s-1a') {
        $solusi = "s-1a";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);     
    }
    if ($kode=='s-1b') {
        $solusi = "s-1b";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
    if ($kode=='s-2a') {
        $solusi = "s-2a";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
    if ($kode=='s-2b') {
        $solusi = "s-2b";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
    if ($kode=='s-3a') {
        $solusi = "s-3a";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
    if ($kode=='s-3b') {
        $solusi = "s-3b";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
    if ($kode=='s-4a') {
        $solusi = "s-4a";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
    if ($kode=='s-4b') {
        $solusi = "s-4b";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
    if ($kode=='s-5a') {
        $solusi = "s-5a";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
    if ($kode=='s-5b') {
        $solusi = "s-5b";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
    if ($kode=='s-6a') {
        $solusi = "s-6a";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
     if ($kode=='s-6b') {
        $solusi = "s-6b";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
     if ($kode=='s-7a') {
        $solusi = "s-7a";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
     if ($kode=='s-7b') {
        $solusi = "s-7b";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
     if ($kode=='s-7c') {
        $solusi = "s-7c";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
     if ($kode=='s-8a') {
        $solusi = "s-8a";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
     if ($kode=='s-8b') {
        $solusi = "s-8b";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
     if ($kode=='s-8c') {
        $solusi = "s-8c";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
     if ($kode=='s-9a') {
        $solusi = "s-9a";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
     if ($kode=='s-9b') {
        $solusi = "s-9b";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
     if ($kode=='x-1') {
        $solusi = "x-1";
        include 'koneksi.php';
        $nama = $_SESSION['nama'];
        $kode = kesimpulan($solusi);
        $sql1 = "INSERT INTO tb_history (nama, kode_solusi) VALUES ('$nama', '$solusi')";
        mysqli_query($connect,$sql1);
    }
}


?>