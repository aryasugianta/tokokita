<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>db_klikcanang</title>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>daftar</title>
</head>
<body>
  <div class="card">
    <div class="card-header">
      <img src="gambar/logo.png" width="150" style="display:block; margin:auto;" class="img-fluid" alt="klikcanang">
  </div>
<!--CSS website-->
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
    }
    p{
      color: gray;
      font-family: calibri;
      font-style: bold;
      font-size: small;
      text-align: center;
    }
    button{
      float: center;
      width: calc(45% - 200px);
      color: gray;
      display: block;
      margin: 0 auto;
    }
    b{
      color: green;
      font-style: bold;
      text-align: center;
    }
  </style>
<!--akhir CSS-->
<form method="POST" action="pengguna_proses_simpan.php"></form>
  <div class="mb-3">
  <label for="nama_pengguna" class="form-label"><p align="center">Nama Pengguna</label><br>
    <input type="nama_pengguna" class="form-control" id="nama_pengguna" aria-describedby="emailHelp1"><br>
  <label for="email" class="form-label"><p align="center">Email</label><br>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp1"><br>
  <label for="password" class="form-label"><p align="center">Password</label><br>
    <input type="password" class="form-control" id="password" aria-describedby="emailHelp1"><br>
  <label for="alamat" class="form-label"><p align="center">Alamat</label><br>
    <input type="alamat" class="form-control" id="alamat" aria-describedby="emailHelp1"><br>
  <label for="no_telepon" class="form-label"><p align="center">No Telepon</label><br>
    <input type="no_telepon" class="form-control" id="no_telepon" aria-describedby="emailHelp1"><br>
  </div>

  <br>
  <button type="daftar" class="btn btn_primary"><a href="pengguna_tampil.php"><b>Daftar</b></a></button>

</form>
</body>
</html>