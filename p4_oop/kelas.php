<?php
class Mahasiswa
{
    // best practice untuk membuat properti itu private -> karena kita bisa kontrol penuh supaya variable itu tidak bisa di akses oleh modul lain, jadi tidak bisa diubah atau dimodifikasi oleh modul lain yang bukan dari keinginan kita
    private $nama;
    private $nim;
    private $semester;

    // function ini disebut SETTER
    public function setNama($nama)
    {
        // this ini sedang mengakses object untuk dirinya sendiri
        $this->nama = $nama;
    }
    public function setNim($nim)
    {
        // this ini sedang mengakses object untuk dirinya sendiri
        $this->nim = $nim;
    }
    public function setSemester($semster)
    {
        // this ini sedang mengakses object untuk dirinya sendiri
        $this->semester = $semster;
    }

    public function getNama()
    {
        return $this->nama;
    }
    public function getNim()
    {
        return $this->nim;
    }
    public function getSemester()
    {
        return $this->semester;
    }


    // public function __construct($nama, $nim, $semester) {}
}

// cara mendefinisiakn object dari suatu class di dalam php
$budi = new Mahasiswa();
$budi->setNama('Budi Santoso');
$budi->setNim('0110224128');
$budi->setSemester(4);

echo $budi->getNama() . '<br>';
echo $budi->getNim() . '<br>';
echo $budi->getSemester() . '<br>';
