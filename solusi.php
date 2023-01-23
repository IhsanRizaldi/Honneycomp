<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Honneycomp || Solusi</title>
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Honneycomp</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Login Pakar</a>
                </li>
            </div>
        </div>
    </nav>
   <!-- Navbar End -->
  <!-- Content -->
  <div class="container">
  
  <main class="batas-atas">
        <div class="card text-white bg-primary mb-3 mt-3 ">
          <h5 class="card-header text-center">Solusi</h5>
          <div class="card-body text-left ukuran-20">

            <form method="post" action="solusi.php" enctype="multipart/form-data" role="form">

                <?php
                include ('koneksi.php');
                //$kode='m01';
                session_start();
                echo "<p>Nama : ".$_SESSION['nama']."</p>";
                    
                    if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                    }   
                ?>
                <hr>
                <p>Kamu merasa :</p>
                <?php
                 include "function.php";
                 solusi($kode);  
                ?>
                

                <hr>
                <?php
                $sql = "SELECT * from tb_solusi WHERE kode_solusi='$kode'";
                $data = mysqli_query($connect,$sql);
                $row = mysqli_fetch_assoc($data);

                if ($row['kode_solusi']=="x-1" || $row['isi_solusi']=="x-2" || $row['isi_solusi']=="x-3" || $row['isi_solusi']=="x-4" || $row['isi_solusi']=="x-5") {
                  echo "<center><p><strong style='color:red'>SISTEM TIDAK MENEMUKAN JAWABAN !</strong></p></center><hr>";
                  ?>

                  <!------------------------BERTANYA KEPADA SISTEM -------------------------------->
                  <div class="row justify-content-center">
                    <div class="col-md-6">
                          <div class="card bg-danger">
                          <h5 class="card-header">Silahkan Bertanya Jika Tidak Ada Solusi</h5>
                         <div class="card-body">
                          <form action="solusi.php" method="post">
                           <div class="form-group">
                           </div>
                           <div class="form-group">
                             <label for="exampleFormControlInput2">Pertanyaan:</label>
                             <input type="text" name="pertanyaan" class="form-control" id="exampleFormControlInput1" placeholder="Silahkan Bertanya">
                           </div>
                           <input type="submit" class="btn btn-primary mb-3 mt-3" name="bertanya">
                         </form>    
                         </div> 
                         </div>
                      </div>
                     </div>  
                     <!------------------------BERTANYA KEPADA SISTEM -------------------------------->                      
                  <?php 
             }
             
             else{
                 echo "<p>Maka kamu harus mengambil prodi : <strong style='color:green'>".$row['isi_solusi']."</strong></p>";
             }
                
                ?>
            </form>
            <br>
            <div class="text-center">
                <a style="margin-bottom: 10px;" href="session_end.php" class="btn btn-outline-light col-sm-2">Selesai</a>
            </div>
          </div>
          
        </div>
    



    </main>
    
        </div>


    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!-- Footer  -->
  <footer class="footer mt-auto py-3 text-center">
        <div class="container">
            <span class="text-muted">&copy;Penuh Cinta Honneycomp</span>
        </div>
    </footer>
  </body>
</html>
<?php
include "koneksi.php";
if (!empty($_POST['bertanya'])){
$pertanyaan= $_POST['pertanyaan'];
$nama=$_SESSION['nama'];

$sql1 = "INSERT INTO tb_bertanya (nama, pertanyaan) VALUES ('$nama', '$pertanyaan')";
if (mysqli_query($connect,$sql1)){
    echo "<script>alert('Pertanyaan berhasil dimasukan, harus menunggu moderasi!'); window.location=('session_end.php');</script>";
//echo "<script type='text/javascript'>window.location.replace('pakar-mode.php');</script>";
  }
  else  echo "<script>alert('gagal');</script>";
}

?>