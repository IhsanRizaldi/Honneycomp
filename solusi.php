<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="gambar/icon.jpeg">
    <title>Honneycomp || Solusi</title>
  </head>
  <body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffb703;">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="gambar/icon.jpeg" alt="" width="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Login</a>
                </li>
            </div>
        </div>
    </nav>
   <!-- Navbar End -->
  <!-- Content -->
  <div class="container">
  
  <main class="batas-atas">
        <div class="card mb-3 mt-3 ">
          <h5 class="card-header text-center" style="background-color: #ffb703;">Solusi</h5>
          <div class="card-body text-left ukuran-20">
                <?php
                require 'koneksi.php';
                session_start();
                echo "<p>Nama : ".$_SESSION['nama']."</p>";   
                echo "<hr>";
                $kode_pertanyaan = $_POST['kode_pertanyaan'];
                $query = mysqli_query($connect,"SELECT * FROM tb_pertanyaan WHERE kode_pertanyaan = '$kode_pertanyaan'");
                $row = mysqli_fetch_assoc($query);
                ?>
                <h4>Gejala :</h4>
                <ul>
                  <li><?= $row['pertanyaan'] ?></li>
                </ul>
                <hr>
                <?php
                $sql = mysqli_query($connect,"SELECT tb_pertanyaan.kode_solusi, tb_solusi.solusi FROM tb_pertanyaan inner join tb_solusi on tb_pertanyaan.kode_solusi=tb_solusi.kode_solusi WHERE kode_pertanyaan = '$kode_pertanyaan'");
                $hasil = mysqli_fetch_assoc($sql);
                ?>
                <h4>Solusi :</h4>
                <ul>
                  <li><?= $hasil['solusi'] ?></li>
                </ul>
            <div class="text-center">
                <a style="margin-bottom: 10px;" href="session_end.php" class="btn btn-outline-dark col-sm-2">Selesai</a>
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
