<?php
// memanggil file koneksi untuk melakukan koneksi database
require_once '../init.php';

	// membuat variabel untuk menampung data dari form
  $matakuliah   = $_POST['MataKuliah'];  
  $nilai        = $_POST['Nilai'];



   $query = "INSERT INTO nilaimk (MataKuliah, Nilai) VALUES ('$matakuliah', '$nilai')";
                  $result = mysqli_query($link, $query);
                  // periska query apakah ada error
                  if(!$result)
                    {
                      die ("Query gagal dijalankan: ".mysqli_error($link).
                           " - ".mysqli_error($link));
                    } 
                  else
                    {
                     //tampil alert dan akan redirect ke halaman index.php
                     //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil ditambah.');window.location='input.php';</script>";
                    }
?>
