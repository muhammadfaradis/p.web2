<?php
include 'header.php';
?>
 
<?php
include 'sidebar.php';
?> 

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tambah Data Mahasiswa</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
		<button type="button" class="btn btn-outline-secondary"><a class="nav-link d-flex align-items-center gap-2" href="http://localhost/mahasiswa/">
                <svg class="bi"><use xlink:href="#door-closed"/></svg>
                Sign out</a></button>
        </div>
      </div>
    </div> 
    <div class="table-responsive small">

	<td><a href="tampil_mhs.php" class="btn btn-danger">KEMBALI</a></td>
	<br/>
    <br>

<form action="proses_mhs.php?aksi=tambah" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" ></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" ></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" class="btn btn-success"></td>
        </tr>
    </table>
</form>