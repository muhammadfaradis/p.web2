<?php
include 'header.php';
?>
 
<?php
include 'sidebar.php';
?> 

<?php
//memanggil class database
include "../classes/database.php";
//instansiasi database
$db = new database;
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tabel Data Mahasiswa</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
		<button type="button" class="btn btn-outline-secondary"><a class="nav-link d-flex align-items-center gap-2" href="http://localhost/mahasiswa/">
                <svg class="bi"><use xlink:href="#door-closed"/></svg>
                Sign out</a></button>
        </div>
      </div>
    </div> 
    <div class="table-responsive small">


<a href="input_mhs.php" class="btn btn-success">Tambah Mahasiswa</a>
<table class="table table-striped table-sm">

    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no=1;
    foreach($db->tampil_mahasiswa() as $x){
    ?>
    <tr>
        <td><?php echo $no++?></td>
        <td><?php echo $x ['nim']?></td>
        <td><?php echo $x ['nama']?></td>
        <td><?php echo $x ['alamat']?></td>
        <td>
            <a href="edit_mhs.php?id=<?php echo $x['nim']; ?>&aksi=edit" class="btn btn-warning">Edit</a>
            <a href="proses_mhs.php?id=<?php echo $x['nim']; ?>&aksi=hapus" class="btn btn-dark">Hapus</a>
        </td>
    </tr>
    <?php        
    }
    ?>
</table>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script></body>