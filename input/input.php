<?php require_once '../init.php';

require_once 'view/header.php'
?>

	<div class="container">
    <div class="row">
    <div class="col text-center ">

               <br/><br/>               
        <a class="badge bg-info text-dark" href="tambah_matkul.php">+ &nbsp; Tambah Matakuliah</a>
          <br /><br />
    <div class="table-responsive">
        <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Kode_MK</th>
                <th>MataKuliah</th>
                <th>Nilai</th>          
                <th>Action</th>
            </tr>
        </thead >

        <?php
        // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
        $query = "SELECT * FROM nilaimk ORDER BY Kd_MK ASC";
                $result = mysqli_query($link, $query);
                  
                //mengecek apakah ada error ketika menjalankan query
                if(!$result){
                    die ("Query Error: ".mysqli_error($link)." - ".mysqli_error($link));
                }

                //buat perulangan untuk element tabel dari data produk
                $no = 1; //variabel untuk membuat nomor urut
                  // hasil query akan disimpan dalam variabel $data dalam bentuk array
                  // kemudian dicetak dengan perulangan while
                while($row = mysqli_fetch_assoc($result))
                  {
        ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['Kd_MK']; ?></td>
                    <td><?php echo $row['MataKuliah']?></td>
                    <td><?php echo number_format($row['Nilai'],0,',','.'); ?></td>          
                    <td>
                       	<a class="badge bg-info text-white" 
                        href="edit_mk.php?Kd_MK=<?php echo $row['Kd_MK'];?>">Edit</a> |
                        <a class="badge bg-info text-white" 
                        href="proses_hapus.php?Kd_MK=<?php echo $row['Kd_MK']; ?>" 
                        onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
                      </td>
                </tr>
                     
               <?php
                //untuk nomor urut terus bertambah 
                    $no++;
                }
                ?>
    </div>
    </div>
    </div>
