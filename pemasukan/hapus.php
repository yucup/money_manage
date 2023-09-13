<?php  
$id = $_GET['id'];

$koneksi->query("DELETE FROM pemasukan WHERE id = '$id' ");

echo "<script>location='index.php?page=pemasukan'</script>";

?>