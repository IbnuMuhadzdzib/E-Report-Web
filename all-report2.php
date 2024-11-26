<?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('location: auth/login2.php');
        exit;
    }

    include('connect.php');

    $i = 1;

    $query = mysqli_query($connect, "SELECT * FROM input");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Report page</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="Style/all-report.css">
</head>
<body>

<section id="navbar" style="top: 0;" >
    <nav class="navbar p-2 mb-2 text-secondary-emphasis" style="background-color: #152733; top:0; ">
  <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color: white;"><i class="fa-solid fa-bullhorn"></i></a>
    <a class="navbar-brand" href="#" style="color: white;">E-Report Masyarakat</a>
    <button style="color: white; background-color: white;" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon" style="background-color: white;"></span>
</button>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">E-Report Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item justify-content-end flex-grow-1 pe-3">
            <a class="nav-link active" href="report2.php">Report</a>
          </li>
          <li class="nav-item justify-content-end flex-grow-1 pe-3">
            <a class="nav-link active" href="all-report2.php">All Report</a>
          </li>
          <li class="nav-item align-item-center justify-content-center">
            <form action="auth/logout.php" method="post">
              <button type="submit" class="nav-link h1 mt-5" >Logout</button>
            </form>
          </li>
            </div>
        </div>
        </nav>
    </section>


    <div class="container">
    <div class="row"> <!-- Menambahkan row untuk grup grid -->
        <?php while($card = mysqli_fetch_assoc($query)) { ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-3"> <!-- Menggunakan col-lg-4 untuk 3 item per baris pada layar besar -->
            <div class="card card-margin">
                <div class="card-header no-border">
                    <h5><?= $card['nama']?></h5>
                </div>
                <div class="card-body pt-0">
                    <div class="widget-49">
                        <div class="widget-49-title-wrapper">
                            <div class="widget-49-date-primary">
                                <span class="widget-49-date-day"><?= $i;?></span>
                                <span class="widget-49-date-month"></span>
                            </div>
                            <div class="widget-49-meeting-info">
                                <h6><?= $card['judul']?></h6>
                                <span class="widget-49-meeting-time"><?=$card['tanggal']?></span>
                            </div>
                        </div>
                        <ol class="widget-49-meeting-points">
                            <li class="widget-49-meeting-item"><span>Hapus Atau Lihat Detail Laporan</span></li>
                        </ol>

                        <div class="d-flex">
                            <form action="delete.php" method="post">
                                <input type="hidden" name="input-id" value="<?= $card['id']?>" readonly>
                                <button class='btn btn-sm btn-flash-border-primary me-2' type="submit" name="delete">Delete</button>
                            </form>
                            
                            <a href="detail2.php?id=<?= $card['id']?>" class="btn btn-sm btn-flash-border-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $i++; } ?>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
