<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>log_in</title>
</head>
<body>
<br><br>
  <div class="card">
    <div class="card-header">
      <img src="gambar/logo.png" width="150" style="display:block; margin:auto;" class="img-fluid" alt="klikcanang">
  </div>
<!--CSS website-->
  <style>
    body{
      background-image: url(gambar/motif_background.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
    p{
      color: gray;
      font-family: calibri;
      font-style: bold;
      font-size: small;
      text-align: center;
    }
    a{
      color: green;
      font-style: bold;
    }
  </style>
<!--akhir CSS-->

<form method="POST" action="toko_proses_simpan.php"></form>

<!--membuat tabel di html-->      
<div class="mb-3">
  <label for="email dan password" class="form-label"><p align="center">Masukkan Email dan Password Anda</label><br>
  <input type="email" class="form-control" aria-describedby="emailHelp1" value="Email"><br>
  <input type="text" class="form-control" aria-describedby="emailHelp1" value="Password">
</div>

<p align="right"><b><a>Forgot Password?</a></b></p>

<!--CSS tabel-->
<button type="log_in" class="btn btn_primary"><a><b>LOG IN</b></a></button>
<style>
  label{
    float: center;
    width: 200px;
    padding-right: 24px;
  }
  input{
    float: center;
    width: 200px;
    padding-right: 24px;
    color: gray;
  }
  button{
    float: center;
    width: calc(45% - 200px);
    color: gray;
    display: block;
    margin: 0 auto;
  }
</style>
<!--akhir dari CSS tabel-->

<p align="center">Belum punya akun? <b><a href="toko_daftar.php">Daftar</a></b></p>

</body>
</html>
