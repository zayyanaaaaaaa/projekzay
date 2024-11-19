<?php 
// Include database connection
include "koneksidb.php"; 

// Check if the 'simpan' button is clicked
if (isset($_POST['simpan'])) {     
    // Sanitize the inputs to prevent SQL injection
    $Nama = mysqli_real_escape_string($koneksidb, $_POST['Nama']);
    $Rombel = mysqli_real_escape_string($koneksidb, $_POST['Rombel']);
    $Barang = mysqli_real_escape_string($koneksidb, $_POST['Barang']);
    $Jumlah = mysqli_real_escape_string($koneksidb, $_POST['Jumlah']);
    $Peminjaman = mysqli_real_escape_string($koneksidb, $_POST['Peminjaman']);
     $Pengembalian = mysqli_real_escape_string($koneksidb, $_POST['Pengembalian']);
    
    // Prepare the SQL query
    $simpan = mysqli_query($koneksidb, "INSERT INTO xtb_latihan (Nama, Rombel, Barang, Jumlah, Peminjaman, Pengembalian) 
                                       VALUES ('$Nama', '$Rombel', '$Barang', '$Jumlah', '$Peminjaman', '$Pengembalian')");

    // Check if the query was successful
    if ($simpan) {
        echo "<script> alert('Berhasil simpan registrasi'); </script>";
        echo "<script> window.location.href='pengembalian.php'; </script>";
    } else {
        echo "<script> alert('Gagal simpan registrasi'); </script>";
        echo "<script> window.location.href='pendaftaran.php'; </script>";
    } 
}
?>

    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>latihanphp</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="menu.php">menu</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-control="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="pendaftaran.php">Pendaftaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pengembalian.php">pengembalian</a>
                </li>
                </ul>
        </div>
        </div>
        </nav>
        <div class="container">
            <h2 class="text-center">Pendaftaran</h2>
            <form class="d-flex flex-column justify-content-center align-items-center" method="post">
                <div class="mb-3">
                  <label for="name">Nama</label>
                  <input type="text" required name="Nama" class="form-control" >
                </div>
               
                <div class="mb-3">
                    <label for="Rombel">Rombel</label>
                    <input type="text"  required name="Rombel" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="Barang">Barang</label>
                    <input type="text"  required name="Barang" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="Jumlah">Jumlah</label>
                    <input type="text"  required name="Jumlah" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tanggal pinjam">tanggal pinjam</label>
                    <input type="date"  required name="Peminjaman" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="tanggal pengembalian">tanggal pengembalian</label>
                    <input type="date"  required name="Pengembalian" class="form-control">
                </div>
<!-- </div>
</div> -->
<div class="d=grid gap-2  mx-auto">
    <button class="btn btn-primary" name="simpan" type="submit">Login</button>
</div>
</form>
</div>
    </body>
    </html>