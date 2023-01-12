<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>sign_in</title>
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
      font-size: small;
      text-align: center;
    }
    a{
      color: green;
      font-style: bold;
    }
  </style>
<!--akhir CSS-->

<form method="POST" action="pengguna_proses_simpan.php"></form>

<!--membuat tabel di html-->      
<div class="mb-3">
  <label for="no_telepon" class="form-label"><p align="center">Masukkan Nomor Telepon Anda</label><br>
  <input type="no_telepon" class="form-control" id="no_telepon" aria-describedby="emailHelp1" value="(+62) 81234567890">
</div>

<!--CSS tabel-->
<button type="sign_in" class="btn btn_primary"><a><b>SIGN IN</b></a></button>
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
  }
</style>
<!--akhir dari CSS tabel-->

<p align="center">Dengan mendaftar saya menyetujui <a><b>Syarat dan Ketentuan</b></a> serta <a><b>Kebijakan Privasi</b></a></p>
<p align="center">Sudah punya akun? <b><a href="pengguna_log_in.php">Log in</a></b></p>

</body>
</html>