<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="gambar/icon.jpeg">
    <title>Honneycomp || Dashboard</title>
  </head>
  <body>
   <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffb703;">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="gambar/icon.jpeg" alt="" width="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">Login</a>
                </li>
            </div>
        </div>
    </nav>
   <!-- Navbar End -->
   <!-- Jumbotron Start -->
   <div class="container">
   <div class="p-5 mb-4 rounded-3 mt-3 mb-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Selamat Datang Di Honneycomp</h1>
                <p class="col-md-8 fs-4"><img src="gambar/icon.jpeg" alt="" width="500"></p>
                <!-- Modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #ffb703;">
                Mulai
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header" style="background-color: #ffb703;">
                        <h5 class="modal-title" id="exampleModalLabel">Honneycomp Computer Expert System</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="session.php" method="post">
                            <div class="mb-3">
                                <label for="">Nama :</label>
                                <input type="text" name="nama" id="nama" placeholder="Nama...." class="form-control">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn" style="background-color: #ffb703;">Lanjut</button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
   <!-- Jumbotron End -->

   <!-- Content -->
    <div class="row ms-5">
        <div class="col-md-4 mt-3 mb-3 ">
        <div class="card" style="width: 18rem;">
        <img src="gambar/gambar.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="background-color: #ffb703;">
            <h5 class="card-title">Raka Amin Nur Soleh</h5>
            <p class="card-text">17211025</p>
        </div>
        </div>
        </div>
        <div class="col-md-4 mt-3 mb-3">
        <div class="card" style="width: 18rem;">
        <img src="gambar/gambar.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="background-color: #ffb703;">
            <h5 class="card-title">Taufan Prawira Ansori</h5>
            <p class="card-text">17211001</p>
        </div>
        </div>
        </div>
        <div class="col-md-4 mt-3 mb-3">
        <div class="card" style="width: 18rem;">
        <img src="gambar/gambar.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="background-color: #ffb703;">
            <h5 class="card-title">Putri Defa Yanti</h5>
            <p class="card-text">17213003</p>
        </div>
        </div>
        </div>
    </div>
    <div class="row ms-5">
    <div class="col-md-4 mt-3 mb-3 ">
        <div class="card" style="width: 18rem;">
        <img src="gambar/gambar.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="background-color: #ffb703;">
            <h5 class="card-title">Ogi Rahmansyah</h5>
            <p class="card-text">17213105</p>
        </div>
        </div>
        </div>
    <div class="col-md-4 mt-3 mb-3 ">
        <div class="card" style="width: 18rem;">
        <img src="gambar/gambar.jpg" class="card-img-top" alt="...">
        <div class="card-body" style="background-color: #ffb703;">
            <h5 class="card-title">Ihsan Rizaldi</h5>
            <p class="card-text">17213026</p>
        </div>
        </div>
        </div>
    </div>
    </div>
   <!-- Content -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Footer  -->
    <footer class="footer mt-auto py-3 text-center">
        <div class="container">
            <span class="text-muted">&copy;Penuh Cinta Honneycomp</span>
        </div>
    </footer>
</body>
</html>