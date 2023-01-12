<h3>DATA KLIKCANANG</h3>

<!--CSS-->
<style>
	table, th, td {
		border: 1px solid black;
		padding: 2px;
	}
</style>
<!--akhir CSS-->

<!--membuat tabel di html-->
<table>
<thead>
<tr>
    <th rowspan="2">No</th>
    <th colspan="5">Daftar Pengguna</th>
</tr>
<tr>
	<th>ID Pengguna</th>
	<th>Nama Pengguna</th>
	<th>Email</th>
	<th>Alamat</th>
	<th>No Telepon</th>
</tr>
</thead>
</tbody>
<!--akhir coding tabel di html-->

<?php
//koneksi
include "koneksi.php";

//membuat variabel angka
$no=1;

//melakukan query SELECT
$tampil="SELECT * FROM daftar_pengguna ORDER BY id_pengguna";
$hasil=mysqli_query($koneksi,$tampil);

//menampilkan data yang ada di database
while ($data=mysqli_fetch_array($hasil)) {
?>

<tr>
	<td><?php echo $no++;?></td>
	<td><?php echo $data['id_pengguna']?></td>
	<td><?php echo $data['nama_pengguna']?></td>
	<td><?php echo $data['email']?></td>
	<td><?php echo $data['alamat']?></td>
	<td><?php echo $data['no_telepon']?></td>
</tr>
<?php
}
?>
</tbody>
</table>
<a href="pengguna_daftar.php"><input type="SUBMIT" value="TAMBAH DATA"></a>