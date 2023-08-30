<?php

class manusia{
    public $nama_saya;
    private $npm = "220302062";

    function panggil_nama($saya){
        $this->nama_saya = $saya;
    }

    //private
    function panggil_npm($npm){
        return "NPM saya adalah" . $npm;
    }

    //protected
    function panggil_prodi($jurusan){
        return "Jurusan saya adalah" . $jurusan;
    }
}

//class turunan atau sub class dari class manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;
    private $npm = "220302062 ";

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }

    //private
    function panggil_npm($npm){
        return "NPM saya adalah " . $npm;
    }

    //protected
    function panggil_prodi($prodi){
        return "Prodi saya adalah " . $prodi;
    }

}

class dosen extends mahasiswa
{
    public $nama_dosen;
    private $nidn = "220302074";

    function panggil_dosen($dosen)
    {
        $this->nama_dosen = $dosen;
    }

    //private
    function panggil_nidn($nidn)
    {
        return "NIDN Saya adalah " . $nidn;
    }

    //protected
    function panggil_jurusan($jurusan)
    {
        return "Saya Mengajar Jurusan " . $jurusan;
    }
}

//instansiasi class mahasiswa
$informatika = new mahasiswa();
$informatika->panggil_nama("Muhammad");
$informatika->panggil_mahasiswa("Faradis");

$ti = new dosen();
$ti->panggil_dosen("Muhammad Faradis");

$npm = "220302062";
$npm_saya = $informatika->panggil_npm($npm);
$prodi = "D-3 Teknik Informatika";
$prodi_saya = $informatika->panggil_prodi($prodi);

$nidn = "220302074";
$nidn_saya = $ti->panggil_nidn($nidn);
$jurusan = "Teknik Informatika";
$jurusan_saya = $ti->panggil_jurusan($jurusan);

//tampilkan nama 
echo "Nama Depan Saya : " . $informatika->nama_saya . "</br>"; 
echo "Nama Belakang Saya : " . $informatika->nama_mahasiswa . "</br>";
echo $npm_saya . "</br>";
echo $prodi_saya . "</br>";
echo "Nama Saya : " . $ti->nama_dosen . "</br>"; 
echo $nidn_saya . "</br>";
echo $jurusan_saya . "</br>";