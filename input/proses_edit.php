<?php
// memanggil file koneksi untuk melakukan koneksi database
require_once '../init.php';

	// membuat variabel untuk menampung data dari form
  $kd_mk      = $_POST['Kd_MK'];
  $matakuliah = $_POST['MataKuliah'];  
  $nilai      = $_POST['Nilai']; 
  
      // jalankan query UPDATE berdasarkan Kd_MK yang produknya kita edit
      $query  = "UPDATE nilaimk SET MataKuliah = '$matakuliah', nilai = '$nilai'";
      $query.= "WHERE Kd_MK = '$kd_mk'";
      $result = mysqli_query($link, $query);
      
      // periksa query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan:".mysqli_error($link).
                             " - ".mysqli_error($link));
      } else {
        //tampil alert dan akan redirect ke halaman input.php
        //silahkan ganti input.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='input.php';</script>";
      }
?>