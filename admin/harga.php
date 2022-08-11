<?php include 'header.php'; ?>

<div class="container">	
	<br/>
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		
		<div class="panel">
			<div class="panel-heading">
				<h4>Pengaturan Harga Laundry</h4>
			</div>
			<div class="panel-body">

				<?php 
				// menghubungkan koneksi
				include '../koneksi.php';
				
				// megambil data haraga per kilo dari tabel harga
				$data = mysqli_query($koneksi,"select harga_per_kilo from harga");
				while($d=mysqli_fetch_array($data)){
					?>

					<form method="post" action="harga_update.php">
						<div class="form-group">
							<label>Harga per kilo</label>							
							<input type="number" class="form-control" name="harga" value="<?php echo $d['harga_per_kilo']; ?>">
						</div>		

						<br/>

						<input type="submit" class="btn btn-primary" value="Ubah Harga">	
					</form>

					<?php 
				}
				?>
			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>