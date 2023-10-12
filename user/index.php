<?php  

include '../function.php';

if(empty($_GET)){

    echo "<script> location='login.php'; </script>";
    die('Connection failed :' . mysqli_connect_error());
}

if (insertPh($_GET) > 0) {
    //proses menambahkan data, tambahkan sesuai dengan yang kalian gunakan
    echo "data berhasil ditambahkan";
}

?>