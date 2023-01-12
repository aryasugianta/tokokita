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
  <title>log_in</title>
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
    button{
    float: center;
    width: calc(45% - 200px);
    color: gray;
    display: block;
    margin: 0 auto;
  }
    p{
      color: gray;
      font-family: calibri;
      font-style: bold;
      font-size: small;
      text-align: center;
    }
    b{
      color: green;
      font-style: bold;
    }
  </style>
<!--akhir CSS-->
<form method="POST" action="toko_proses_simpan.php"></form>
  <div class="mb-3">
  <label for="nama_toko" class="form-label"><p align="center">Nama Toko</label><br>
    <input type="nama_toko" class="form-control" id="nama_toko" aria-describedby="emailHelp1"><br>
  <label for="alamat_toko" class="form-label"><p align="center">Alamat Toko</label><br>
    <input type="alamat_toko" class="form-control" id="alamat_toko" aria-describedby="emailHelp1"><br>
  <label for="email" class="form-label"><p align="center">Email</label><br>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp1"><br>
  <label for="no_telepon" class="form-label"><p align="center">No Telepon</label><br>
    <input type="no_telepon" class="form-control" id="no_telepon" aria-describedby="emailHelp1"><br>
  </div>

  <br>
  <button type="daftar" class="btn btn_primary"><a href="toko_tampil.php"><b>Daftar</b></a></button>
</form>
		</form>
	</div>
</body>
</html>