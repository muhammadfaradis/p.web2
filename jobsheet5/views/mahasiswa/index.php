<?php
include 'header.php';
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

<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

//instansiasi
$database = new database;
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>

<div>
  <br>
<h1 class="h2" height="50px" align="center">Tabel Data Mahasiswa</h1>
</div>
<div>
  <a href="input_mhs.php" class="btn btn-primary btn-lg">Tambah Mahasiswa</a>
  </div>
<div class="table-responsive small">
  <br>
<table class="table table-bordered">
    <thead class="table table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
        </tr>
        
    </thead>

    <?php
    $no=1;
    foreach($mahasiswa as $x){
    ?>
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $x ['nim']?></td>
        <td><?php echo $x ['nama']?></td>
        <td><?php echo $x ['tempat_lahir']?></td>
        <td><?php echo $x ['tanggal_lahir']?></td>
        <td><?php echo $x ['jenis_kelamin']?></td>
        <td><?php echo $x ['agama']?></td>
        <td><?php echo $x ['alamat']?></td>
        <td>
            <a href="edit_mhs.php?id=<?php echo $x['nim']; ?>&aksi=edit" class="btn btn-warning">Edit</a>
            <a href="proses_mhs.php?id=<?php echo $x['nim']; ?>&aksi=hapus" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    <?php        
    }
    ?>
</table>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>