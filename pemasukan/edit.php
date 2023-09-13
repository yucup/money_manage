<?php  
$id = $_GET['id'];
$pemasukan = $koneksi->query("SELECT * FROM pemasukan WHERE id = $id");

$tiap = $pemasukan->fetch_assoc();

?>
<div class="container">
	<div class="row">
		<div class="col-md-5 offset-md-3 shadow rounded bg-white p-5 my-5 border-top border-primary border-5">
			<h5 class="text-primary text-center"><i>Edit Pemasukan</i></h5>
			<form method="post">
				<div class="mb-3">
					<label class="form-label">Pemasukan</label>
					<input type="text" name="pemasukan_uang" class="form-control" value="<?php echo $tiap['pemasukan_uang']; ?> ">
				</div>
				<div class="mb-3">
					<label class="form-label">tangal</label>
					<input type="date" name="tanggal" class="form-control" value="<?php echo $tiap['tanggal']; ?>">
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
	$pemasukan_uang = $_POST['pemasukan_uang'];
	$tanggal = $_POST['tanggal'];
	$keterangan = $_POST['keterangan'];

	$koneksi->query("UPDATE pemasukan SET pemasukan_uang = '$pemasukan_uang', 
		tanggal = '$tanggal', keterangan = '$keterangan' WHERE id = '$id'");

	echo "<script>location='index.php?page=pemasukan'</script>";
}
?>