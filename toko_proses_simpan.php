<?php

//memanggil koneksi
include "koneksi.php";


$nama_toko=$_POST['nama_toko'];
$alamat_toko=$_POST['alamat_toko'];
$email=$_POST['email'];
$no_telepon=$_POST['no_telepon'];

//melakukan query ke basis data
$input="INSERT INTO daftar_toko (nama_pengguna, email, password, alamat_toko, no_telepon) VALUES ('$nama_toko', '$alamat_toko', '$email', '$no_telepon')";
$hasil=mysqli_query($koneksi,$input);

//mengecek apakah data dapat disimpan
if($hasil){
	echo "Data Berhasil Disimpan";
	header("location:toko_tampil.php");
}
else{
	echo "Data Gagal Disimpan";
}

?>