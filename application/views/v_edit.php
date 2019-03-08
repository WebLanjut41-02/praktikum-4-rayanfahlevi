<?php foreach($value as $u){ ?>
	<form action="<?php echo base_url(); ?>goni/update" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Layanan</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id_history ?>">
					<input type="text" name="layanan" value="<?php echo $u->layanan ?>">
				</td>
			</tr>
			<tr>
				<td>Jenis</td>
				<td><input type="text" name="alamat" value="<?php echo $u->jenis ?>"></td>
			</tr>
			<tr>
				<td>Berat</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $u->berat ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>	
	<?php } ?>
</body>
</html>