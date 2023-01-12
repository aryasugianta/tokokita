<?php

//memanggil koneksi
include "koneksi.php";


$nama_pengguna=$_POST['nama_pengguna'];
$email=$_POST['email'];
$password=$_POST['password'];
$alamat=$_POST['alamat'];
$no_telepon=$_POST['no_telepon'];

//melakukan query ke basis data
$input="INSERT INTO daftar_pengguna (nama_pengguna, email, password, alamat, no_telepon) VALUES ('$nama_pengguna', '$email', '$password', '$alamat', '$no_telepon')";
$hasil=mysqli_query($koneksi,$input);

//mengecek apakah data dapat disimpan
if($hasil){
	echo "Data Berhasil Disimpan";
	header("location:pengguna_tampil.php");
}
else{
	echo "Data Gagal Disimpan";
}

?>