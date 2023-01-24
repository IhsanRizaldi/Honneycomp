<?php
session_start();
if (isset($_SESSION['login'])) {
    header("Location:admin/index.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="gambar/icon.jpeg">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sispakars || Login</title>
  </head>
  <body style="background-color: #ffb703;">
    <div class="container mb-3 mt-5 ">
        <div class="row mt-5 justify-content-center">
        <div class="col-md-5">
    <div class="card">
        <div class="card-header text-center mb-3">
            <h2>Login Admin</h2>
        </div>
        <div class="card-body">
            <form action="proses_login.php" method="post">
                <div class="mb-3">
                    <label for="">Username :</label>
                    <input type="username" name="username" id="username" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Password :</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn" style="background-color: #ffb703;">Login</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Footer  -->
    <footer class="footer mt-auto py-3 text-center">
        <div class="container">
            <span class="text-muted">&copy;Penuh Cinta Honneycomp</span>
        </div>
    </footer>
  </body>
</html>