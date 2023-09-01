<?php
include 'header.php';
?>
 


<?php
//memanggil class database
include "../classes/database2.php";
//instansiasi database
$db = new database;
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIPALING!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="tampil_mhs.php">Mahasiswa</a>
        <a class="nav-link active" aria-current="page" href="tampil_dosen.php">Dosen</a>
        <a class="nav-link active" aria-current="page" href="tampil_buku.php">Buku</a>
     </div>
    </div>
  </div>
</nav>

    <div class="table-responsive small">
    <div>
  <br>
<h1 class="h2" height="50px" align="center">Tabel Data Dosen</h1>
</div>
<div>
  <a href="input_dosen.php" class="btn btn-primary btn-lg">Tambah Dosen</a>
  </div>
<div class="table-responsive small">
  <br>
<table class="table table-bordered">
    <thead class="table table-dark">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Matkul</th>
        <th>Aksi</th>
    </tr>
</thead>
    <?php
    $no=1;
    foreach($db->tampil_dosen() as $x){
    ?>
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $x ['nidn']?></td>
        <td><?php echo $x ['nama']?></td>
        <td><?php echo $x ['matkul']?></td>
        <td>
            <a href="edit_dosen.php?id=<?php echo $x['nidn']; ?>&aksi=edit" class="btn btn-warning">Edit</a>
            <a href="proses_dosen.php?id=<?php echo $x['nidn']; ?>&aksi=hapus" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    <?php        
    }
    ?>
</table>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>