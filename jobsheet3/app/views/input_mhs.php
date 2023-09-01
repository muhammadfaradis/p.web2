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

<div>
<br>
<h1 class="h2" height="50px">Tambah Mahasiswa</h1>
</div>

<div>
    <td><a href="tampil_mhs.php" class="btn btn-danger ">KEMBALI</a></td>
</div>
<br/>
<br>

<form action="proses_mhs.php?aksi=tambah" method="post">
    <div class="table-responsive small">
    <div class="col-md-2">
        <label for="inputCity" class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control">
    </div>
    <div class="col-md-2">
        <label for="inputCity" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>
    <div class="mb-3 col-md-2">
        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="3"></textarea>
    </div>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" class="btn btn-success"></td>
        </tr>
    </table>
</form>



 