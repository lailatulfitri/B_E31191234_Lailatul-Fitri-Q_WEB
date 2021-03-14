<?php 
/**
  * Author : Lailatul Fitri Qodariah
  */
 class kalkulator
 {
 	
 	private $x;
 	private $y;
 	private $z;
 }
 class Aritmatika extends kalkulator
 {

 	public function Tambah(){
 		return $hasil = $this->x + $this->y + $this->z;
 		return $hasil;
 	}
 	public function Kurang() {
 		return $hasil = $this->x - $this->y - $this->z;
 		return $hasil;
 	}
 	public function Bagi() {
 		return $hasil = $this->x * $this->y * $this->z;
 		return $hasil;
 	}
 	public function Kali(){
 		return $hasil = $this->x / $this->y / $this->z;
 		return $hasil;
 	}
 }

//membuat object
$hasil1 = new Aritmatika();

$hasil1->x =24;
$hasil1->y =2;
$hasil1->z =3;

echo "Hasil dari X + Y + Z = " . $hasil1->Tambah() . "<br  />";
echo "Hasil dari X - Y - Z = " . $hasil1->Kurang() ."<br />";
echo "Hasil dari X * Y * Z = " . $hasil1->Bagi() ."<br />";
echo "Hasil dari X / Y / Z = " . $hasil1->Kali() ."<br />";
 ?>