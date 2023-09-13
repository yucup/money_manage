<div class="container">
	<div class="row">
		<div class="col-md-5 offset-md-3 shadow rounded bg-white p-5 my-5 border-top border-danger border-5">
			<h5 class="text-danger text-center"><i>PENGELUARAN</i></h5>
			<form method="post">
				<div class="mb-3">
					<label class="form-label">Pembelian</label>
					<input type="text" name="pembelian" class="form-control">
				</div>
				<div class="mb-3">
					<label class="form-label">Jumlah</label>
					<input type="text" name="jumlah" class="form-control">
				</div>
				<div class="mb-3">
					<label class="form-label">Harga</label>
					<input type="text" name="harga" class="form-control">
				</div>
				<div class="mb-3">
					<label class="form-label">Tanggal</label>
					<input type="date" name="tanggal" class="form-control">
				</div>
				<div class="mb-3">
					<label class="form-label">Keterangan</label>
					<input type="text" name="keterangan" class="form-control">
				</div>
				<div class="mb-3">
					<button class="btn btn-primary" type="submit" name="tambah">Tambah</button>
					<button class="btn btn-outline-danger" type="reset">Hapus</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php  
if (isset($_POST['tambah'])) 
{
	$pembelian = $_POST["pembelian"];
	$jumlah = $_POST["jumlah"];
	$harga = $_POST["harga"];
	$tanggal = $_POST["tanggal"];
	$keterangan = $_POST["keterangan"];

	$koneksi->query("INSERT INTO pengeluaran (pembelian, jumlah, harga, tanggal, keterangan) VALUES ('$pembelian', '$jumlah' ,'$harga', '$tanggal','$keterangan')");

	echo "<script>location='index.php?page=pengeluaran'</script>";
}
?>