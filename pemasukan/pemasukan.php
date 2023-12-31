<?php  
include 'koneksi.php';

$pemasukan = array();
$ambil = $koneksi->query('SELECT * FROM pemasukan');

while ($takes = $ambil->fetch_assoc()) {
	$pemasukan[] = $takes;
}

// penjumlahan
$penjumlahan = $koneksi->query("SELECT SUM(pemasukan_uang) AS uang FROM pemasukan");
$hasil = $penjumlahan->fetch_assoc();

// echo "<pre>";
// print_r($hasil);

?>
<div class="container shadow rounded bg-white p-5 my-5 border-top border-primary border-5">
			<h3 class="text-primary text-center"><i><u>PEMASUKAN</u></i></h3>
	<div class="row">
		<div class="col-4">
			<form method="post">
				<label class="form-label">Tgl Awal</label>
				<input type="date" name="tgl_awal" class="form-control">
			</div>
			<div class="col-4">
				<label class="form-label">Tgl Akhir</label>
				<input type="date" name="tgl_awal" class="form-control">
			</div>
		</form>
	</div>
	<div class="row">
		<div class="col mt-4">
			<a href="index.php?page=tambah_pemasukan" class="btn btn-primary">Tambah</a>
			<table class="table table-bordered my-3 text-center">
				<thead>
					<th>No</th>
					<th>Pemasukan</th>
					<th>Tanggal</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</thead>
				<tbody>
					<?php foreach ($pemasukan as $key => $value): ?>	
						<tr>
							<td><?php echo $key+1; ?></td>
							<td>Rp. <?php echo number_format($value['pemasukan_uang']) ; ?></td>
							<td><?php echo date("d M Y", strtotime($value['tanggal'])); ?></td>
							<td><?php echo $value['keterangan']; ?></td>
							<td class="text-center">
								<a href="index.php?page=edit_pemasukan&id=<?php echo $value['id']; ?>" class="btn btn-warning">Edit</a>
								<a href="index.php?page=hapus_pemasukan&id=<?php echo $value['id']; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>
					<tr>
						<td>Total</td>
						<td class="text-primary"><h5>Rp. <?php echo number_format($hasil['uang']) ?></h5></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>