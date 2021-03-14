<?php 
/**
  * Author : Lailatul Fitri Qodariah
  */
 class Buku
 {
 	public $judul_buku;
	public $pengarang = 'Andrea Hirata';
	public $penerbit;
	public $tahun_terbit;
	public $cetakan;

 	public function hello()
 	{
 		return "beeb";
 	}
 }
//membuat instance
$fiksi = new Buku ();
$nonfiksi = new Buku ();

//get values
echo $fiksi -> pengarang;
echo "<br />";
echo $nonfiksi -> pengarang;
echo "<hr />";

//set value
$fiksi -> judul_buku = "Laskar Pelangi";
$nonfiksi -> judul_buku = "Paradigma Islam ";
$nonfiksi -> pengarang = 'Dr. Kuntowijoyo';

//get values
echo $fiksi -> pengarang;
echo "<br />";
echo $fiksi -> judul_buku;
echo "<br />";
echo $nonfiksi -> pengarang;
echo "<br />";
echo $nonfiksi -> judul_buku;
echo "<hr />";
 ?>