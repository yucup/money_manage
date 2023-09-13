<?php  
$id = $_GET['id'];

$koneksi->query("DELETE FROM pengeluaran WHERE id_pengeluaran = '$id' ");

echo "<script>location='index.php?page=pengeluaran'</script>";

?>