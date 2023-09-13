<?php  
$id = $_GET['id'];
$pengeluaran = $koneksi->query("SELECT * FROM pengeluaran WHERE id_pengeluaran = $id");

$tiap = $pengeluaran->fetch_assoc();

?>
<div class="container">
	<div class="row">
		<div class="col-md-5 offset-md-3 shadow rounded bg-white p-5 my-5 border-top border-danger border-5">
			<h5 class="text-danger text-center"><i>Edit Pengeluaran</i></h5>
			<form method="post">
				<div class="mb-3">
					<label class="form-label">Pembelian</label>
					<input type="text" name="pembelian" class="form-control" value="<?php echo $tiap['pembelian']; ?> ">
				</div>
				<div class="mb-3">
					<label class="form-label">jumlah</label>
					<input type="text" name="jumlah" class="form-control" value="<?php echo $tiap['jumlah']; ?>">
				</div>
				<div class="mb-3">
					<label class="form-label">tangal</label>
					<input type="date" name="tanggal" class="form-control" value="<?php echo $tiap['tanggal']; ?>">
				</div>
				<div class="mb-3">
					<label class="form-label">harga</label>
					<input type="text" name="harga" class="form-control" value="<?php echo $tiap['harga']; ?>">
				</div>
				<div class="mb-3">
					<label class="form-label">keterangan</label>
					<input type="text" name="keterangan" class="form-control" value="<?php echo $tiap['keterangan']; ?>">
				</div>
				<div class="mb-3">
					<button class="btn btn-primary" type="submit" name="edit">Tambah</button>
					<button class="btn btn-danger" type="reset">Hapus</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php  
if (isset($_POST['edit'])) 
{
	$pembelian = $_POST['pembelian'];
	$jumlah = $_POST['jumlah'];
	$tanggal = $_POST['tanggal'];
	$harga = $_POST['harga'];
	$keterangan = $_POST['keterangan'];

	$koneksi->query("UPDATE pengeluaran SET pembelian = '$pembelian', 
		jumlah = '$jumlah', harga = '$harga', tanggal = '$tanggal', keterangan = '$keterangan' WHERE id_pengeluaran = '$id' ");

	echo "<script>location='index.php?page=pengeluaran'</script>";
}
?>