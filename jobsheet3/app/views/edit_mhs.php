<?php
include 'header.php';
?>
 
<?php
include 'sidebar.php';
?> 

<?php
include '../classes/database.php';
$db = new database();
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Tabel Edit Mahasiswa</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
		<button type="button" class="btn btn-outline-secondary"><a class="nav-link d-flex align-items-center gap-2" href="http://127.0.0.1:5500/MyResume%20-%20Copy/index.html">
                <svg class="bi"><use xlink:href="#door-closed"/></svg>
                Sign out</a></button>
        </div>
      </div>
    </div> 
 
	
	<br/>
	<button type="button" class="btn btn-danger"><a href="tampil_mhs.php">KEMBALI</a></button>
	<br/>
	<br/>

<form action="proses_mhs.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['id']) as $d){

    ?>
    <table>
        <tr>
            <td>NIM</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['nim'] ?>">
                <input type="text" name="nim" value="<?php echo $d['nim'] ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="10"><?php echo $d['alamat'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" class="btn btn-success"></td>
        </tr>
    </table>
<?php    
}
?>
</form>