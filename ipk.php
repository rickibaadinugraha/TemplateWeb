<?php
    function getIpk() {
        include 'functions/db.php';
        $no = 1;
        $arr = array();
        $data = mysqli_query($link, "SELECT * FROM nilaimk");
        while($d = mysqli_fetch_array($data)) {
            if ($d['Nilai'] >= 90 && $d['Nilai'] <= 100) {
                array_push($arr, 4);
              } else if ($d['Nilai'] >= 80 && $d['Nilai'] <= 89) {
                array_push($arr, 3);
              } else if ($d['Nilai'] >= 70 && $d['Nilai'] <= 79) {
                array_push($arr, 2);
              } else if ($d['Nilai'] >= 60 && $d['Nilai'] <= 69) {
                array_push($arr, 1);
              } else {
                array_push($arr, 0);
              }
        }

        $result = array_sum($arr)/count($arr);

        echo number_format((float)$result, 2, '.', '');
    }

    function getNilaiMutu($nilai) {
            if ($nilai >= 90 && $nilai <= 100) {
                echo 'A';
            } else if ($nilai >= 80 && $nilai <= 89) {
                echo 'B';
            } else if ($nilai >= 70 && $nilai <= 79) {
                echo 'C';
            } else if ($nilai >= 60 && $nilai <= 69) {
                echo 'D';
            } else {
                echo 'E';
            }
    }
require_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ricki B nugraha</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel ="stylesheet" type="text/css" href="css/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="htmlcss/style.css">
    <link rel="stylesheet" href="htmlcss/bootstrap/css/bootstrap.css">

</head>

<body id="page-top">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Indeks Prestasi Kumulatif</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode_MK</th>
                                            <th>Mata Kuliah</th>
                                            <th>Nilai</th>
                                            <th>Mutu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            require_once 'functions/db.php';
                                            $no = 1;
                                            $data = mysqli_query($link, "SELECT * FROM nilaimk");
                                            while($d = mysqli_fetch_array($data)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['Kd_MK']; ?></td>
                                            <td><?php echo $d['MataKuliah']; ?></td>
                                            <td><?php echo $d['Nilai']; ?></td>
                                            <td><?php getNilaiMutu($d['Nilai']) ?></td>
                                        </tr>
                                        <?php }; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="4">IPK</th>
                                            <th>
                                            <?php getIpk() ?>
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
        </div>

</body>
</html>