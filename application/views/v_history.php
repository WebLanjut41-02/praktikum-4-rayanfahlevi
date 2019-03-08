<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">body	{font-family: sans-serif;  }</style>
</head>
<body>

<form method="post" action="<?php echo base_url() ?>goni/cari">
<input type="text" name="cari">
<button type="submit">Cari</button><br>
</form>

<table border="1px solid">
	<tr>
	<th>Layanan</th>
	<th>Jenis</th>
	<th>Berat sampah</th>
	<th>Foto sampah</th>
	<th>EDIT</th>
</tr>

<?php if(count($history)>0)
		{ ?>
			<tr>
			<?php foreach ($history as $hst) { ?>
				<td><?php echo $hst->layanan ?></td>
				<td><?php echo $hst->jenis ?></td>
				<td><?php echo $hst->berat ?> Kg</td>
				<td align="center">
					<?php if ($hst->foto > 0) {
						echo $hst->foto;
						} 
						else{
							echo '-';
						}?>
							
				</td>
				<!-- <td><a href="<?php echo base_url(); ?>goni/edit">edit</a></td> -->
				<td><?php echo anchor('goni/edit/'.$hst->id_history,'Edit'); ?></td>
				

				<!-- <td><?php echo anchor('goni/hapus/'.$hst->id,'Hapus'); ?></td>
			 --></tr>

			<?php  }?>
		
		<?php  }
		else
		{
			echo "Data tidak ditemukan";
		}
 ?>


<?php  ?>
</table>

</body>
</html>