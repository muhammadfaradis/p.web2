<?php
include '../classes/datauts.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_buku($_POST['judul'],$_POST['pengarang'],$_POST['tahun_terbit'],$_POST['harga']);
    header("location:tampil_buku.php");
}elseif($aksi == "update"){
    $db->update($_POST['id'],$_POST['judul'],$_POST['pengarang'],$_POST['tahun_terbit'],$_POST['harga']);
    header("location:tampil_buku.php");
}elseif($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:tampil_buku.php");
}