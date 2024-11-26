<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('location: auth/login2.php');
        exit;
    }

    include('connect.php');

    if(isset($_GET['btn'])) {
        $id = '';
        $nama = $_GET['nama'];
        $judul = $_GET['judul'];
        $tanggal = $_GET['tanggal'];
        $deskripsi = $_GET['desc'];
        $id_akun = $_SESSION['id'];

        $query = mysqli_query($connect,
        "INSERT INTO input (id, nama, judul, tanggal, deskripsi, id_akun)
        VALUES ('$id', '$nama', '$judul', '$tanggal', '$deskripsi', '$id_akun')"
        );

        if ($query) {
            echo "<script>
            alert('Laporan Berhasil Di Kirimkan!');
            window.location.replace('report2.php');
            </script>";
        } else {
            echo "<script>
            alert('Gagal Boss!');
            window.location.replace('report2  .php');
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Page</title>
    <link rel="stylesheet" href="Style/report.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #152733;" >

<section id="navbar">
    <nav class="navbar p-2 mb-2 text-secondary-emphasis" style="background-color: #152733;">
  <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color: white;"><i class="fa-solid fa-bullhorn"></i></a>
    <a class="navbar-brand" href="#" style="color: white;">E-Report Masyarakat</a>
    <button style="color: white; background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon" style="background-color: white;"></span>
</button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel" style="color:white;" >E-Report Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php" style="color:white;" >Home</a>
          </li>
          <li class="nav-item justify-content-end flex-grow-1 pe-3">
            <a class="nav-link active" href="report2.php" style="color:white;" >Report</a>
          </li>
          <li class="nav-item justify-content-end flex-grow-1 pe-3">
            <a class="nav-link active" href="all-report2.php" style="color:white;" >All Report</a>
          </li>
          <li class="nav-item align-item-center justify-content-center">
            <form action="auth/logout.php" method="post">
              <button type="submit" class="nav-link h1 mt-5" style="color:grey;" >Logout</button>
            </form>
          </li>
            </div>
        </div>
        </nav>
    
    
<div class="form-body">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3 class="text-center">Sampaikan Laporan Anda</h3>
                            <p class="text-center">Isi dengan seksama, baik, dan bijaksana.</p>
                            <form class="requires-validation" novalidate method="get">

                                <div class="mb-3">
                                   <input class="form-control" type="text" name="nama" placeholder="Nama*" required>
                                </div>

                                <div class="mb-3">
                                    <input class="form-control" type="text" name="judul" placeholder="Tuliskan Judul Laporan*" required>
                                </div>

                                <div class="mb-3">
                                   <input class="form-control" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="tanggal" name="tanggal" placeholder="Tanggal Peristiwa*" required>
                                </div>
                    
                               <div class="mb-3">
                                  <input class="form-control" type="text" name="desc" placeholder="Deskripsikan Laporan*" required>
                               </div>

                               <div class="d-flex mt-3">
                                    <button id="submit" type="submit" class="btn btn-primary" name="btn">Kirimkan</button>
                                    <button id="submit" type="button" class="btn btn-secondary"><a href="index.php" style="background-color: transparent; color:white; text-decoration: none;">Kembali</a></button>
                               </div>

                                <div class="mt-3">
                                    <a href="all-report2.php" style="color:white; text-decoration: none;">Lihat Laporan Anda</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
