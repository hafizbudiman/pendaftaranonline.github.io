<?php 
	include 'koneksi.php';

	$peserta = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($peserta);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PLKD Online</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
	<link rel="shortcut icon"
	href="img/logo-ipa.jpg"
	type="image/x-icon">
	<script>
		window.print();
	</script>
</head>
<body>

	<h2>Bukti Pendaftaran</h2>
	<table class="table-data" border="0">
		<tr>
			<td>Kode Pendaftaran</td>
			<td>:</td>
			<td><?php echo $p->id_pendaftaran ?></td>
		</tr>
		<tr>
			<td>Tahun Ajaran</td>
			<td>:</td>
			<td><?php echo $p->th_ajaran ?></td>
		</tr>
		<tr>
			<td>Asal Sekolah</td>
			<td>:</td>
			<td><?php echo $p->asl_sekolah ?></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><?php echo $p->nm_peserta ?></td>
		</tr>
		<tr>
			<td>Tempat, Tanggal Lahir</td>
			<td>:</td>
			<td><?php echo $p->tmp_lahir.', '.$p->tgl_lahir ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $p->jk  ?></td>
		</tr>
		<tr>
			<td>Agama</td>
			<td>:</td>
			<td><?php echo $p->agama ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo $p->almt_peserta ?></td>
		</tr>
		<tr>
			<td>Kelurahan</td>
			<td>:</td>
			<td><?php echo $p->kelurahan ?></td>
		</tr>
		<tr>
			<td>Kecamatan</td>
			<td>:</td>
			<td><?php echo $p->kecamatan ?></td>
		</tr>
		<tr>
			<td>Kabupaten</td>
			<td>:</td>
			<td><?php echo $p->kabupaten ?></td>
		</tr>
		<tr>
			<td>Nomor Telepon</td>
			<td>:</td>
			<td><?php echo $p->no_telpon ?></td>
		</tr>
		<tr>
			<td>Riwayat Penyakit</td>
			<td>:</td>
			<td><?php echo $p->rwyt_penyakit ?></td>
		</tr>
	</table>

</body>
</html>