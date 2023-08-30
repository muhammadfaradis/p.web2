<?php

class mahasiswa{
    var $nim;
    var $nama;
    var $alamat;

    function __construct()
    {
        echo "Saya Mahasiswa Teknik Informatika";
        echo "<br>";
    }

    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
        echo "<br>";
    }

    function tamnpil_nama()
    {
        return "Nama saya adalah Crhistoper </br>";
    }

    function tamnpil_mahasiswa()
    {
        return "TIdak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";
    }

    function tampil_alamat()
    {
        return "Alamat saya berada di JL.Gatotsubroto";
    }
}    
    $nama_mahasiswa=new mahasiswa();
    echo $nama_mahasiswa->tamnpil_nama();
    echo $nama_mahasiswa->tamnpil_mahasiswa();