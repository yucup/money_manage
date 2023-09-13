<?php  
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
    ul li
    {
      transition: 1s;
    }
    ul li:hover
    {
     background-color: #d9dad9;
   }
    background-color: #727575;

</style>

<title>Trainit Yusuf</title>

<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script src="asets/js/jquery-3.5.1.js"></script>

<link href="aset/css/bootstrap.min.css" rel="stylesheet">
<link href="aset/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="asets/css/dashboard.css" rel="stylesheet">
<!-- j query button -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
<script src="aset/js/jquery-3.5.1.js"></script>
<style type="text/css">
 .logo
 {
  width: 200px;
}

</style>
</head>
<body>
  <header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">APK Pendataan</a>
    <div class="text-white ms-auto"><i class="bi bi-calendar-day"></i> <span id="tanggalwaktu"></span>|</div>
    <script>
      var tw = new Date();
      if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
        else (a=tw.getTime());
      tw.setTime(a);
      var tahun= tw.getFullYear ();
      var hari= tw.getDay ();
      var bulan= tw.getMonth ();
      var tanggal= tw.getDate ();
      var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
      var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
      document.getElementById("tanggalwaktu").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun+"/ Jam : " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10)? "0" : "") + tw.getMinutes() + (" W.I.B ");
    </script>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav-item text-nowrap">

      <a class="nav-link px-3 text-white" href="logout.php"><i class="bi bi-box-arrow-right"></i> Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark text-white shadow sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <div class="text-center mb-2">
          <img src="../assets/logo/logo.png" class="img-fluid w-50 rounded-circle">
        </div>
        <ul class="nav flex-column">
          <li class="nav-item" id="dashboard">
            <a class="nav-link active" aria-current="page" href="index.php">
              <i class="bi bi-house"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="index.php?page=pemasukan" style="color: gray;">
              <i class="bi bi-person-circle"></i>
              Pemasukan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="index.php?page=pengeluaran" style="color: gray;">
              <i class="bi bi-boxes"></i>
              Pengeluaran
            </a>
          </li>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-light vh-100">
      <?php 
// jika tidak ada page di url maka include (panggil halaman dashboard)
      if (!isset($_GET["page"]))
      {
        include 'dashboard.php';
      }
// selain itu jika page samadengan input maka include input.php
      elseif ($_GET["page"]=="pemasukan")
      {
        include 'pemasukan/pemasukan.php';
      }
      elseif ($_GET['page']=='edit_pemasukan') 
      {
      	include 'pemasukan/edit.php';
      }
      elseif ($_GET['page']=='hapus_pemasukan') 
      {
      	include 'pemasukan/hapus.php';
      }
      elseif ($_GET['page']=='tambah_pemasukan') 
      {
      	include 'pemasukan/tambah_pemasukan.php';
      }
      elseif ($_GET["page"]=="pengeluaran")
      {
        include 'pengeluaran/pengeluaran.php';
      }
      elseif ($_GET['page']=="edit_pengeluaran") 
      {
      	include 'pengeluaran/edit.php';
      }
      elseif ($_GET['page']=="hapus_pengeluaran") 
      {
      	include 'pengeluaran/hapus.php';
      }
      elseif ($_GET['page']=="tambah_pengeluaran") 
      {
      	include 'pengeluaran/tambah_pengeluaran.php';
      }

      ?>

    </main>
  </div>
</div>


<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/js/jquery.dataTables.min.js"></script>
<script src="../assets/js/dataTables.bootstrap5.min.js"></script>

<!--  -->
 <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script>
      $('#table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
        'copyHtml5',
        'excelHtml5',
        'csvHtml5',
        'pdfHtml5'
        ]
      } );
    </script>

<!--  -->

<script>
  $(document).ready(function () {
    $('#table').DataTable();
  });
</script>


</body>
</html>
