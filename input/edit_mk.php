 <?php
  // memanggil file koneksi untuk membuat koneksi
require_once '../init.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['Kd_MK'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $kd_mk
    $kd_mk = ($_GET["Kd_MK"]);

    // menampilkan data dari database yang mempunyai Kd_MK=$kd_mk
    $query = "SELECT * FROM nilaimk WHERE Kd_MK = '$kd_mk'";
    $result = mysqli_query($link, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_error($link)." - ".mysqli_error($link));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='input.php';</script>";
       }
  } else {
    // apabila tidak ada data GET kd_mk pada akan di redirect ke index.php
    echo "<script>alert('Masukkan Kd_MK.');window.location='input.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Input Matkul </title>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
 <body>
      <center>
        <h1>Edit Matakuliah <?php echo $data['MataKuliah']; ?></h1>
      <center>
      <form method="POST" action="proses_edit.php" enctype="multipart/form-data">
      <section class="base">
        <!-- menampung nilai Kd_MK yang akan di edit -->
        <input name="Kd_MK" value="<?php echo $data['Kd_MK']; ?>"  hidden />
        <div>
          <label>Matakuliah</label>
          <input type="text" name="MataKuliah" value="<?php echo $data['MataKuliah']; ?>" 
          autofocus="" required="" />
        </div>       
        <div>
          <label>Nilai</label>
         <input type="text" name="Nilai" required=""value="<?php echo $data['Nilai']; ?>" />
        </div>        
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>