<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="gambar/icon.jpeg">
    <title>Honneycomp || Pertanyaan</title>
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
        <div class="card text-center mb-3 mt-3" >
          <h5 class="card-header" style="background-color: #ffb703;">Pertanyaan Diagnosis</h5>
          <div class="card-body text-center ukuran-30">

            <form method="post" action="input-ketampung.php" enctype="multipart/form-data" role="form">

                <?php
                include ('koneksi.php');
                $kode='p-1';
                session_start();
                echo "<p>Hai, ".$_SESSION['nama']."</p>";
                    
                    if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                    }

                    $sql = "SELECT * from tb_pertanyaan WHERE kode_pertanyaan='$kode'";
                    $data = mysqli_query($connect,$sql);
                    $row = mysqli_fetch_assoc($data);     
                ?>
                
                <label for="exampleFormControlInput1"><?php echo $row['isi_pertanyaan']; ?></label>
                
                <br>
                <div class="option mb-3 mt-3">
                    <?php 
                        include "function.php";
                        answer($kode);                    
                    ?>
                    
                   
                    
                </div>
                

            </form>

          </div>
        </div>
    
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