<link rel="stylesheet" type="text/css" href="css/sb-admin-2.css">
<?php require_once 'init.php'; 

$error = '';

if (isset($_SESSION['biodata']));
    // header('Location:biodata.php');

// validasi register biodata
if (isset($_GET['submit'])) {
    $nama = $_GET['Nama'];
    $nim = $_GET['NIM'];
    $jurusan = $_GET['Jurusan'];
    $jk = $_GET['JenisKelamin'];
    $agama = $_GET['Agama'];
    $telepon = $_GET['Telepon'];
    $alamat = $_GET['Alamat'];

        if(!empty(trim($nama)) && !empty(trim($nim))&& !empty(trim($jurusan))&& !empty(trim($jk))
            && !empty(trim($agama))&& !empty(trim($telepon))&& !empty(trim($alamat)) ){
        
        if ( register_cek_nama($nama)) {
        // memasukan ke database
         if(register_user($nama, $nim, $jurusan, $jk, $agama, $telepon, $alamat)) redirect_login($nama);
            else $error = 'gagal daftar';
    
            }else $error = 'nama sudah ada,tidak boleh sama';
        
            }else $error = 'tidak boleh kosong';
}

require_once 'header.php'; 

// menguji pesan session
if(isset($_SESSION['msg'])) {
 flash_delete($_SESSION['msg']);
}
?>
            
    <form action="biodata.php" method="get">
    <table>
              
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type=”text” name="Nama" size="50" id="nama"></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><input type=”text” name="NIM" id="nim"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><select name="Jurusan" id="jurusan">
                <option value="TI">Teknik Informatika</option>
                <option value="MN">Manajemen</option>
                <option value="PGSD">PGSD</option>
            </td></select>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
                <div id="kelamin">
            <td>
                <input type="radio" name="JenisKelamin" id="pria" value="pria">Pria
                <input type="radio" name="JenisKelamin" id="wanita" value="wanita">Wanita
            </td>
               </div>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><select name="Agama" id="agama">
                <option value="islam">Islam</option>
                <option value="kristen">Kristen</option>
                <option value="hindu">Hindu</option>
            </td></select>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><input type=”text” name="Telepon" id="telepon"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
        <textarea rows="5" cols="22" name="Alamat" style="width: 388px; height:61px; " id="alamat"></textarea>
            </td>
        </tr>

    </table>
        <input type="submit" name="submit" value="Submit">
    </form>
    <br>

<?php if ($error != '') { ?>
  <div id="error">
   <?= $error; ?>
  </div>
<?php } ?>

<!--    <input type="reset" name="reset" value="reset"> -->

<?php require_once 'footer.php'; ?>
