<?php
    session_start();

    include('connect.php');

    $id = $_GET['id'];
    $queryData = "SELECT * FROM input WHERE id = $id";

    $result = mysqli_query($connect, $queryData);

    while($loop = mysqli_fetch_assoc($result)) {
        $data = $loop;
    }

    if(isset($_POST['btn'])) {
        $nama = $_POST['nama'];
        $judul = $_POST['judul'];
        $tanggal = $_POST['tanggal'];
        $deskripsi = $_POST['deskripsi'];

        $result = mysqli_query(
            $connect,
            "UPDATE input SET
             nama='$nama', judul='$judul', tanggal='$tanggal', deskripsi='$deskripsi'
            WHERE id=$id"
        );

        if($result) {
            echo "<script>
                alert ('Data Berhasil Di Update')
                document.location.href='index.php'
            </script>";
        } else {
          echo "<script>
                alert('Data Gagal Di Update')
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

    <style>
        input[placeholder] {
            font-weight: 600;
        }
    </style>

</head>
<body style="background-color: #152733;"  >
    
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Detail Laporan Anda</h3>
                        <p>Laporan dengan tanggal kejadian <?=$data['tanggal']?>.</p>
                        <form class="requires-validation" novalidate method="post">

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="nama" id="nama" readonly value="<?=$data['nama']?>">
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="judul" id="judul" readonly value="<?=$data['judul']?>">
                            </div>

                            <div class="col-md-12">
                               <input class="form-control textbox-n" type="text" id="tanggal" onfocus="(this.type='date')" onblur="(this.type='text')" id="tanggal" name="tanggal" readonly value="<?=$data['tanggal']?>">
                            </div>
                
                           <div class="col-md-12">
                              <input class="form-control" type="text" name="desc" id="desc" readonly value="<?=$data['deskripsi']?>">
                           </div>

                            <div class="form-button mt-3">
                                <button id="btn" type="button" class="btn btn-primary" name="btn" onclick="toggleEdit()">Edit</button>
                                <button id="submitBtn" type="submit" class="btn btn-primary" name="btn" style="display: none;" >Kirimkan</button>
                                <button id="cancelBtn" type="button" class="btn btn-secondary" name="btn" style="display: none;" onclick="batalEdit()" >Batal Edit</button>
                            </div>

                            <div class="form-button mt-3">
                                <a href="all-report2.php" style="color:white; text-decoration: none; " >Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="Style/main.js"></script>
</body>
</html>