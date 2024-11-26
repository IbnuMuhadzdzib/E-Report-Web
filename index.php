<?php
  session_start();
  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengaduan Masyarakat</title>
    <!-- BS 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Awesome Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
      <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="Style/.css" rel="stylesheet">
     <style>
      .navbar-brand {
          margin-right: 0;  
          padding: 0;      
      }

      .navbar .container-fluid {
          display: flex;
          align-items: center;
      }

      .navbar .navbar-brand + .navbar-brand {
          margin-left: 0;  
      }

      #hero {
          margin-top: 0 !important; /* Remove top margin */
      }

      .hero .animated {
    animation: up-down 2s ease-in-out infinite alternate-reverse both;
  }

  @keyframes up-down {
    0% {
      transform: translateY(10px);
    }
  
    100% {
      transform: translateY(-10px);
    }
  }

  .button {
    position: relative;
    bottom: 13rem;
  }

     </style>

</head>
  <body>
   
    <section id="navbar">
    <nav class="navbar p-2 mb-2 text-secondary-emphasis" style="background-color: #152733;">
  <div class="container-fluid">
      <a class="navbar-brand" href="#" style="color: white;"><i class="fa-solid fa-bullhorn"></i></a>
   
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
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

    <section id="hero" class="hero section dark-background">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
      <h1>Selamat Datang Di Web E-Report Masyarakat</h1>
      <p>Silahkan laporkan apapun kejadian di luar nalar anda, klik tombol menu paling kanan atas</p>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="Media/hero-services-img.webp" class="img-fluid animated" alt="">
    </div>
  </div>
  <div class="container button">
  <div class="row d-flex justify-content-start gap-3">
    <div class="col-auto">
      <a href="report2.php" class="btn btn-primary">Buat Laporan</a>
    </div>
    <div class="col-auto">
      <a href="all-report2.php" class="btn btn-secondary">Lihat Semua Laporan</a>
    </div>
  </div>
</div>

</div>  

</section><!-- /Hero Section -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

