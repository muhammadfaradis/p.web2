<?php
include 'header.php';
?>
 

<?php
include '../classes/database.php';
$db = new database();
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

<div>
<br>
<h1 class="h2" height="50px">Edit Mahasiswa</h1>
</div>
<br/>
	<div>
        <button type="button" class="btn btn-danger"><a href="tampil_mhs.php">KEMBALI</a></button>
    </div>
	<br/>
	<br/>

<form action="proses_mhs.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){

    ?>
      <div class="table-responsive small">
    <div class="col-md-2">
        <label for="inputCity" class="form-label">NIM</label>
        <input type="hidden" name="id" value="<?php echo $d['nim'] ?>">
        <input type="text" name="nim" class="form-control" value="<?php echo $d['nim'] ?>">
    </div>
    <div class="col-md-2">
        <label for="inputCity" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $d['nama'] ?>">
    </div>
    <div class="mb-3 col-md-2">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="3"><?php echo $d['alamat'] ?></textarea>
    </div>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" class="btn btn-success"></td>
        </tr>
<?php    
}
?>
</form>