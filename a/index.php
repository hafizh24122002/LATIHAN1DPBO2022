<?php
include "mahasiswa.php";

$mahasiswa1 = new mahasiswa("2006945", "Hafizh Lutfi Hidayat", "Laki-laki", "Ilmu Komputer", 4);

echo "NIM : ". $mahasiswa1->getNim() ."<br>";
echo "Nama : ". $mahasiswa1->getNama() ."<br>";
echo "Jenis Kelamin : ". $mahasiswa1->getJk() ."<br>";
echo "Prodi : ". $mahasiswa1->getProdi() ."<br>";
echo "Semester : ". $mahasiswa1->getSemester() ."<br>";

?>