<?php

class database{
    var $host = "localhost";
    var $username = "root";
    var $password ="";
    var $db = "akademik";
    var $koneksi;

    function __construct()
    {
        $this->koneksi= mysqli_connect ($this->host, $this->username, $this->password, $this->db);

    }

    function tampil_dosen()
    {
        $data=mysqli_query($this->koneksi,"select * from dosen");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_dosen($nidn,$nama,$matkul){
        mysqli_query($this->koneksi,"insert into dosen(nidn,nama,matkul) values('$nidn','$nama','$matkul')");        
    }

    function edit($id)
    {
        $data = mysqli_query($this->koneksi,"select * from dosen where nidn='$id'");
        while($d= mysqli_fetch_array($data))
        {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id,$nidn,$nama,$matkul){
        mysqli_query($this->koneksi, "update dosen set nidn='$nidn',nama='$nama',matkul='$matkul'where nidn='$id'");
    }

    function hapus($id)
    {
        mysqli_query($this->koneksi, "delete from dosen where nidn='$id'");
    }
}