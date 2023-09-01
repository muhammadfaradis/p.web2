<?php
include '../classes/database2.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_dosen($_POST['nidn'],$_POST['nama'],$_POST['matkul']);
    header("location:tampil_dosen.php");
}elseif($aksi == "update"){
    $db->update($_POST['id'],$_POST['nidn'],$_POST['nama'],$_POST['matkul']);
    header("location:tampil_dosen.php");
}elseif($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:tampil_dosen.php");
}