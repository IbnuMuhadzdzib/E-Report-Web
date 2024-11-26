<?php 
 include('connect.php');

if(isset($_POST['input-id']) && !empty($_POST['input-id'])) {
   
    $id = $_POST['input-id'];

   $result = mysqli_query($connect, "DELETE FROM input WHERE id = $id");

    if($result) {
        echo "<script> 
        alert ('Data Berhasil Dihapus')
        window.location.replace('all-report2.php')
        </script>";
    } else {
        echo "<script> 
        alert ('Data Gagal Dihapus')
        window.location.replace('all-report2.php')
        </script>";
    }
}