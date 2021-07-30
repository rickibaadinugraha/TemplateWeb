<?php
require_once '../init.php';
$kd_mk = $_GET["Kd_MK"];
//mengambil Kd_MK yang ingin dihapus

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM nilaimk WHERE Kd_MK='$kd_mk' ";
    $hasil_query = mysqli_query($link, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_error($link).
       " - ".mysqli_error($link));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='input/input.php';</script>";
    }
?>
