<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <title>List Karyawan</title>
  </head>
  
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">List Karyawan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
        </div>
        </div>
    </div>
    </nav>
    <!-- END NAVBAR -->
    <?php
    include 'config.php';

    $id = $_GET['id'];
    $mahasiswa = mysqli_query($koneksi, "select * from karyawan where id='$id'");

    while ($data = mysqli_fetch_array($Karyawan)) {
        ?>
        <div class="container mt-5">
            <p><a href="index.php">Home</a> / Karyawan / <?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <p class="fw-bold">Profil Karyawan</p>
                    </div>
                    <div class="card-body fw-bold">
                        <form method="post" action="update.php">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Karyawan" name="Nama" value="<?php echo $data['Nama']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="NoKTP" class="form-label">NoKTP</label>
                                <input type="text" class="form-control" id="NoKTP" placeholder="Masukkan No.KTP Karyawan" name="NoKTP" value="<?php echo $data['NoKTP']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="NoTelp" class="form-label">NoTelp</label>
                                <input type="text" class="form-control" id="NoTelp" placeholder="Masukkan No.Telp Keryawan" name="NoTelp" value="<?php echo $data['NoTelp']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="TahunMasuk" class="form-label">TahunMasuk</label>
                                <input type="text" class="form-control" id="TahunMasuk" placeholder="Masukkan Tahun Masuk Karyawan" name="TahunMasuk" value="<?php echo $data['TahunMasuk']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="JumlahMasaKerja" class="form-label">JumlahMasaKerja</label>
                                <input type="text" class="form-control" id="Jumlah Masa Kerja" placeholder="Masukkan Jumlah Masa Kerja Karyawan" name="JumlahMasaKerja" value="<?php echo $data['JumlahMasaKerja']; ?>">
                             </div>
                            <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>   
        </div>   
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>           
  </body>
</html>