<?php

function register_user($nama, $nim, $jurusan, $jk, $agama, $telepon, $alamat){
  global $link;

  // mencegah mysql injection
  $nama     = escape($nama);
  $nim      = escape($nim);
  $jurusan  = escape($jurusan);
  $jk       = escape($jk);
  $agama    = escape($agama);
  $telepon  = escape($telepon);
  $alamat   = escape($alamat);

  $query = "INSERT INTO biodata (Nama, NIM, Jurusan, JenisKelamin, Agama, Telepon, Alamat ) 
              VALUES ('$nama', '$nim', '$jurusan', '$jk', '$agama', '$telepon', '$alamat')";
    
    if( mysqli_query($link, $query)) return true;
    else return false;
    }

// menguji nama kembar
function register_cek_nama($nama){
   global $link;
   $nama  = escape($nama);
   $query = "SELECT * FROM biodata WHERE Nama = '$nama' ";

   if ( $result = mysqli_query($link, $query)) {
      if (mysqli_num_rows($result) == 0) return true;
      else return false;
    } 
}

function redirect_login($nama){
  $_SESSION['biodata'] = $nama;
  header('Location = biodata.php');
}

// mencegah injection
function escape($data){
  global $link;
  return mysqli_real_escape_string($link, $data);
}


?>