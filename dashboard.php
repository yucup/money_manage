<?php

 //pemasuka 
$penjumlahan = $koneksi->query("SELECT SUM(pemasukan_uang) AS uang FROM pemasukan");
$hasil_pemasukan = $penjumlahan->fetch_assoc();

 //pengeluaran 
$pengurangan = $koneksi->query("SELECT SUM(harga) AS uang FROM pengeluaran");
$hasil = $pengurangan->fetch_assoc();
?>
<div class="container">
	<div class="row text-center">
		<div class="col-md-5 shadow rounded bg-white p-5 my-5 border-top border-primary border-5 ms-5"> 
			<u class="text-primary"><h3>Pemasukan</h3></u>
			<h1 class="text-primary">Rp. <?php echo number_format($hasil_pemasukan['uang']); ?></h1>
		</div>

		<div class="col-md-5 shadow rounded bg-white p-5 my-5 border-top border-danger border-5 mx-5"> 
			<u class="text-danger"><h3>Pengeluaran</h3></u>
			<h1 class="text-danger">Rp. <?php echo number_format($hasil['uang']); ?></h1>	
		</div>

		<div class="col-md-5 shadow rounded bg-white p-5 my-5 border-top border-success border-5 mx-5"> 
			<u class="text-success"><h3>Sisa Uang</h3></u>
			<h1 class="text-success">Rp. <?php echo number_format($hasil_pemasukan['uang'] - $hasil['uang']); ?></h1>	
		</div>
	</div>
</div>