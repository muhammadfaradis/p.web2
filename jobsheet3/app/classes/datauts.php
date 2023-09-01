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
    function tampil_judul()
    {
        $data=mysqli_query($this->koneksi,"select * from buku");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }

    function tambah_buku($judul,$pengarang,$tahun_terbit,$harga){
        mysqli_query($this->koneksi,"insert into buku(judul,pengarang,tahun_terbit,harga) values('$judul','$pengarang','$tahun_terbit','$harga')");        
    }

    function edit($id)
    {
        $data = mysqli_query($this->koneksi,"select * from buku where judul='$id'");
        while($d= mysqli_fetch_array($data))
        {
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id,$judul,$pengarang,$tahun_terbit,$harga){
        mysqli_query($this->koneksi, "update buku set judul='$judul',pengarang='$pengarang',tahun_terbit='$tahun_terbit'where judul='$id'");
    }

    function hapus($id)
    {
        mysqli_query($this->koneksi, "delete from buku where judul='$id'");
    }
}