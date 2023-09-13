<?php  
include 'koneksi.php';

$pengeluaran = array();
$ambil = $koneksi->query('SELECT * FROM pengeluaran');

while ($takes = $ambil->fetch_assoc()) {
	$pengeluaran[] = $takes;
}

// penjumlahan
$pengurangan = $koneksi->query("SELECT SUM(harga) AS uang FROM pengeluaran");
$hasil = $pengurangan->fetch_assoc();

// echo "<pre>";
// print_r($hasil);

?>
<div class="container">
	<div class="row">
		<div class="col-md shadow rounded bg-white p-5 my-5 border-top border-danger border-5">
			<h5 class="text-danger text-center"><i>PENGELUARAN</i></h5>
			<a href="index.php?page=tambah_pengeluaran" class="btn btn-danger">Tambah</a>
			<table class="table table-bordered my-3 text-center">
				<thead>
					<th>No</th>
					<th>harga</th>
					<th>pembelian</th>
					<th>jumlah</th>
					<th>Tanggal</th>
					<th>Keterangan</th>
					<th>Aksi</th>
				</thead>
				<tbody>
					<?php foreach ($pengeluaran as $key => $value): ?>	
						<tr>
							<td><?php echo $key+1; ?></td>
							<td>Rp. <?php echo number_format($value['harga']); ?></td>
							<td><?php echo $value['pembelian'] ; ?></td>
							<td><?php echo $value['jumlah']; ?></td>
							<td><?php echo $value['tanggal']; ?></td>
							<td><?php echo $value['keterangan']; ?></td>
							<td class="text-center">
								<a href="index.php?page=edit_pengeluaran&id=<?php echo $value['id_pengeluaran']; ?>" class="btn btn-warning">Edit</a>
								<a href="index.php?page=hapus_pengeluaran&id=<?php echo $value['id_pengeluaran']; ?>" class="btn btn-danger">Hapus</a>
							</td>
						</tr>
					<?php endforeach ?>
					<tr>
						<td>Total</td>
						<td class="text text-danger"> <h5>Rp. <?php echo number_format($hasil['uang']) ?></h5></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>