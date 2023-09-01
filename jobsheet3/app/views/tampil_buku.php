<?php
include 'header.php';
?>
 


<?php
//memanggil class database
include "../classes/datauts.php";
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
        <a class="nav-link active" aria-current="page" href="tampil_dosen.php">Buku</a>
     </div>
    </div>
  </div>
</nav>

    <div class="table-responsive small">
    <div>
  <br>
<h1 class="h2" height="50px" align="center">Tabel Data Buku</h1>
</div>
<div>
  <a href="input_buku.php" class="btn btn-success btn-lg">Tambah Buku</a>
  </div>
<div class="table-responsive small">
  <br>
<table class="table table-bordered">
    <thead class="table table-dark">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <?php
    $no=1;
    foreach($db->tampil_judul() as $x){
    ?>
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $x ['judul']?></td>
        <td><?php echo $x ['pengarang']?></td>
        <td><?php echo $x ['tahun_terbit']?></td>
        <td><?php echo $x ['harga']?></td>
        <td>
            <a href="edit_buku.php?id=<?php echo $x['judul']; ?>&aksi=edit" class="btn btn-warning">Edit</a>
            <a href="proses_buku.php?id=<?php echo $x['judul']; ?>&aksi=hapus" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    <?php        
    }
    ?>
</table>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>