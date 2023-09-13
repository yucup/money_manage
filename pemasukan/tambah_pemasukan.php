<div class="container">
	<div class="row">
		<div class="col-md-5 offset-md-3 shadow rounded bg-white p-5 my-5 border-top border-primary border-5">
			<h5 class="text-primary text-center"><i>PEMASUKAN</i></h5>
			<form method="post">
				<div class="mb-3">
					<label class="form-label">Pemasukan</label>
					<input type="text" name="pemasukan_uang" class="form-control">
				</div>
				<div class="mb-3">
					<label class="form-label">tangal</label>
					<input type="date" name="tanggal" class="form-control">
				</div>
				<div class="mb-3">
					<label class="form-label">keterangan</label>
					<input type="text" name="keterangan" class="form-control">
				</div>
				<div class="mb-3">
					<button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
					<button class="btn btn-danger" type="reset">Hapus</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php  
if (isset($_POST['tambah'])) 
{
	$pemasukan_uang = $_POST["pemasukan_uang"];
	$tanggal = $_POST["tanggal"];
	$keterangan = $_POST["keterangan"];

	$koneksi->query("INSERT INTO pemasukan (pemasukan_uang,tanggal,keterangan) VALUES ('$pemasukan_uang', '$tanggal', '$keterangan')");

	echo "<script>location='index.php?page=pemasukan'</script>";
}
?>