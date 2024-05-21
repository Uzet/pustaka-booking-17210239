<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contoh1 extends CI_Controller {


	public function index()
{
echo "<h1>Perkenalkan</h1>";
echo"Nama saya : Timotius Benhur<br>
Kelas : 17.6A.27 <br>
Program Studi : Teknologi Informasi<br>
Semester : 6 <br>
Alamat : Jl Benda no 135 Muncul Setu Tangsel 
";
}


	public function latihan()
{
echo "<h1>Perkenalkan</h1>";
echo"Nama saya : Timotius Benhur<br>
Kelas : 17.6A.27 <br>
Program Studi : Teknologi Informasi<br>
Semester : 6 <br>
Alamat : Jl Benda no 135 Muncul Setu Tangsel 
";
}

	public function penjumlahan($n1, $n2)
{
$this->load->model('Model_latihan1');
$hasil = $this->Model_latihan1->jumlah($n1, $n2);
echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = "
.$hasil;
}
}
