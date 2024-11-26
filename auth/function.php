<?php
include('../connect.php');

function register($req) {
    global $connect;

    $email = strtolower(trim($req['email'])); 

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>
            alert('Format Email Salah!')
        </script>";
        return;
    }

    $resultCheckEmail = mysqli_query($connect,
     "SELECT email FROM akun WHERE email = '$email'");

     if(mysqli_num_rows($resultCheckEmail) > 0) {
        echo "<script>
            alert('Email Sudah Dipakai!')
        </script>";
        return;
     }

     $pw1 = mysqli_real_escape_string($connect,$req['pw1']);
     $pw2 = mysqli_real_escape_string($connect,$req['pw2']);

     if($pw1 !== $pw2) {
        echo "<script>
        alert('Password Berbeda, Coba Lagi')
        window.location.replace('register2.php')
    </script>";
    return;
     }

     $pw1 = password_hash($pw1, PASSWORD_DEFAULT);
     $pw2 = password_hash($pw2, PASSWORD_DEFAULT);

     $result = mysqli_query($connect,
      "INSERT INTO akun VALUES('', '$email', '$pw1')");

      if($result) {
        echo "<script>
        alert('Akun Berhasil Dibuat');
        window.location.replace('login2.php');
    </script>";
        
        header('location: login2.php');
      } else {
        mysqli_error($connect);
      }
}

function login($req) {
    global $connect; 

    $email = $req['email'];
    $pw = $req['pw'];

    $result = mysqli_query($connect,
    "SELECT * FROM akun WHERE email = '$email'");

    if(mysqli_num_rows($result) === 1) {
        $dataFetch = mysqli_fetch_assoc($result);

        if(password_verify($pw, $dataFetch['pw'])) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $dataFetch['id'];
            header('location: ../index.php');
            exit;
        }
    } else {
        echo "<script>
        alert('Email Tidak Sesuai!')
        window.location.replace('login2.php')
    </script>"; 
    return;
    }
}

function logout() {

}
