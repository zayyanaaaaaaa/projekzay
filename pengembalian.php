<?php
//pnggil koneksi database
include "koneksidb.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Data Member</title>
</head>
<body>
     <h3 class="text-center">Data Pengembalian</h3>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="pendaftaran.php">Menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a class="nav-link active" aria-current="page" href="pendaftaran.php">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pengembalian.php">Pengembalian</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
   
    <div class="container">
        <table align="table responsive" class="table table-striped table-bordered table-hover">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama Lengkap</th>
                <th class="text-center">Kelas</th>
                <th class="text-center">Barang</th>
                <th class="text-center">Jumlah</th>
                <th class="text-center">Tanggal Peminjaman</th>
                <th class="text-center">Tanggal Pengembalian</th>
                <th class="text-center">Kembali</th>

            </tr>
            <?php
            $no = 1;
            $tampil = mysqli_query($koneksidb, "SELECT * FROM tb_latihan");
            while ($data = mysqli_fetch_array($tampil)) :
                ?>

            <tr>
                <td class="text-center"><?= $no++?></td>
                <td class="text-center"><?= $data['Nama'] ?></td>
                <td class="text-center"><?= $data['Rombel'] ?></td>
                <td class="text-center"><?= $data['Barang'] ?></td>
                <td class="text-center"><?= $data['Jumlah'] ?></td>
                <td class="text-center"><?= $data['Peminjaman'] ?></td>
                <td class="text-center"><?= $data['Pengembalian'] ?></td>
                <td class="text-center">
                    <a href="pendaftaran.php"><button class="btn btn-danger">Kembalikan</button></a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
    </div>
</body>
</html>