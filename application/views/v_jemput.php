<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo base_url(); ?>goni/prosesJemput" method="post">
	<table>
		<tr>
			<td>Layanan</td>
			<td>
				<select name="layanan">
				  <option value="Perumahan">Perumahan</option>
				  <option value="Perkantoran">Perkantoran</option>
				  <option value="Sekolahan">Sekolahan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jenis sampah</td>
			<td>
				<select name="jenis">
				  <option value="Organik">Organik</option>
				  <option value="Anorganik">Anorganik</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Estimasi Berat(Opsional)</td>
			<td><input type="text" name="berat" placeholder="Kg"></td>
		</tr>
		<tr>
			<td>Foto</td><br>
			<td><input type="file" name="foto"></td>
		</tr>
		<tr>
			<td colspan="2" align="right"><button type="submit">Jemput</button></td>
		</tr>
	</table>
</form>


</body>
</html>