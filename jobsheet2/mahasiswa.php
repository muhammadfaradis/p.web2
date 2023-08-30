<?php

class mahasiswa{
    var $nim;
    var $nama;
    var $alamat;

    function tamnpil_nama()
    {
        return "Nama saya adalah Crhistoper";
    }

    function tampil_alamat()
    {
        return "Alamat saya berada di JL.Gatotsubroto";
    }
}    
    $nama_mahasiswa=new mahasiswa();
    echo $nama_mahasiswa->tamnpil_nama();
echo "</br>";

class dosen{
    var $nidn;
    var $nama;
    var $prodi;

    function menampilkan_nama()
    {
        return "Nama Saya adalah Muhammad Faradis";
    }

    function menampilkan_prodi()
    {
        return "Saya Mengajar Prodi D3-Teknik Informatika";
    }
}

$nama_dosen=new dosen();
echo $nama_dosen->menampilkan_nama();

