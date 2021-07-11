<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <title>Data Karyawan</title>
  </head>
  
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Data Karyawan</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="#">Tambah Karyawan</a>
            <a class="nav-link" href="#">Features</a>
            <a class="nav-link" href="#">Pricing</a>
        </div>
        </div>
    </div>
    </nav>
    <!-- END NAVBAR -->
    <div class="container data-karyawan mt-5">
        <!-- Modal -->
        <!-- Button untuk trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahData">
        Tambah Data
        </button>
        <!-- Modal tambah data -->
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Membuat form dengan method post untuk memanggil file store.php -->
                    <form method="POST" action="store.php" name="form">
                        <div class="modal-header">
                            <h5 class="modal-title" id="tambahDataLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Input Nama -->
                            <div class="mb-3">
                                <label for="Nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Karyawan" name="nama" required>
                            </div>
                            <!-- Input NoKTP -->
                            <div class="mb-3">
                                <label for="NoKTP" class="form-label">NoKTP</label>
                                <input type="text" class="form-control" id="NoKTP" placeholder="Masukkan Nomor KTP" name="NoKTP" required>
                            </div>
                            <!-- Input NoTelp -->
                            <div class="mb-3">
                                <label for="NoTelp" class="form-label">NoTelp</label>
                                <!--Menggunakan textarea sebagai input NoTelp-->
                                <textarea type="text" class="form-control" id="NoTelp" placeholder="Masukkan Nomor Telpon" name="NoTelp" required></textarea>
                            </div>
                            <!-- Input TahunMasuk -->
                            <div class="mb-3">
                                <label for="TahunMasuk" class="form-label">TahunMasuk</label>
                                <input type="text" class="form-control" id="TahunMasuk" placeholder="Masukkan Tahun Masuk" name="TahunMasuk" required>
                            <!-- Input JumlahMasaKerja -->
                            <div class="mb-3">
                                <label for="JumlahMasaKerja" class="form-label">JumlahMasaKerja</label>
                                <input type="text" class="form-control" id="JumlahMasaKerja" placeholder="Masukkan Jumlah Masa Kerja" name="JumlahMasaKerja" required>
                            </div>
                        <div class="modal-footer">
                            <!--Button Close Modal-->
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <!--Button Tambah Data-->
                            <button type="submit" class="btn btn-primary" value="SIMPAN">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- DATA -->
    <div class="container data-karyawan mt-5">
        <table class="table table-striped" id="tabelkaryawan">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">NoKTP</th>
                    <th scope="col">NoTelp</th>
                    <th scope="col">TahunMasuk</th>
                    <th scope="col">JumlahMasaKerja</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include 'config.php';
                $no = 1;
                $karyawan = mysqli_query($koneksi,"select * from karyawan");
                while ($data = mysqli_fetch_array($karyawan)) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['Nama']; ?></td>
                        <td><?php echo $data['No.Ktp']; ?></td>
                        <td><?php echo $data['No.Telp']; ?></td>
                        <td><?php echo $data['Tahun Masuk']; ?></td>
                        <td><?php echo $data['Jumlah Masa Kerja']; ?></td>
                        <td>
                            <a href="detail.php?id=<?php echo $data['id'];?>" class="btn btn-success btn-sm text-white">Detail</a>
                            <a href="edit.php?id=<?php echo $data['id'];?>" class="btn btn-warning btn-sm text-white">Edit</a>
                            <a href="delete.php?id=<?php echo $data['id'];?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus data?')">Hapus</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>

            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabelKaryawan').DataTable();
        } );
    </script>
</body>
</html> 