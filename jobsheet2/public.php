<?php
//membuat class mahasiswa
class mahasiswa
{
    //property public
    public $nama;
    private $nim = "220302062";

    //public method
    public function tampilkan_nama()
    {
        //nilai kembalian
        return "Nama Saya Muhammad Faradis </br>";
    }

    //membuat protected method
    function tampilkan_nim()
    {
        return "NIM Saya ". $this->nim;
    }
}
//instansiasi objek mahasiswa kedalam variabel mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//memanggil method tampilkan nama 
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();