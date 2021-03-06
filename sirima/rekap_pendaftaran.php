
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://localhost/basdat/sirima/bootstrap/css/bootstrap.min.css" rel="stylesheet"/> 	
    <script src="https://localhost/basdat/sirima/bootstrap/js/bootstrap.min.js"></script>
	<script src="https://localhost/basdat/sirima/datepicker.js"></script>
	<link rel="stylesheet" href="https://localhost/basdat/sirima/datepicker.css"/>
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  </head>
<style>
/*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color: #428bca;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
.custom-nav{
  background-color: rgb(0, 33, 71) ! important; 
  height: 150px; 
  position: relative; 
  top: 0px; 
  margin-top: -50px;
}

.fixedTop {
  top: 0;
  margin: 0 !important;
}
</style>
  <body>
  <script>	
	$(document).ready(function(){
		$('#dp2').datepicker();
	});
  </script>
    <div class="navbar navbar-inverse navbar-fixed-top" style="background-color: rgb(0, 33, 71); margin-top: 50px;">
     <?php include "header.php"; ?>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar"  style="margin-top: 40px;">
			<ul class="nav nav-sidebar">
			<li class=""><a href="http://localhost/basdat/sirima/registration.php">Register</a></li>
            <li class=""><a href="http://localhost/basdat/sirima/pendaftaran_ss1/pemilihan_jenjang_pendaftaran.php">Buat Pendaftaran<span class="sr-only">(current)</span></a></li>
            <li class="active"><a href="http://localhost/basdat/sirima/pemilihan_jenjang_riwayat.php">Rekap Pendaftaran</a></li>
			<li><a href="http://localhost/basdat/sirima/pemilihan_prodi_riwayat.php">Daftar Pelamar Diterima</a></li>
			<li><a href="http://localhost/basdat/sirima/lihat_riwayat_pendaftaran.php">Riwayat Pendaftaran</a></li>
            <li><a href="http://localhost/basdat/sirima/lihat_kartu_ujian.php">Kartu Ujian</a></li>
            <li><a href="http://localhost/basdat/sirima/lihat_seleksi.php" >Hasil Seleksi</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="margin-top: 60px;">
			<h1 style="text-align: center;">Rekap Pendaftaran</h1><br>
			<label style="padding-bottom:10px;"><i>Jenjang: S1</i></label>
				<table class="table table-striped" id="pendaftaran">
					<thead>
					  <tr>
						<th>Nama Prodi</th>
						<th>Jenis Kelas</th>
						<th>Nama Fakultas</th>
						<th>Kuota</th>
						<th>Jumlah Pelamar</th>
						<th>Jumlah Diterima</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<td>Ilmu Komputer</td>
						<td>Reguler</td>
						<td>Ilmu Komputer</td>
						<td>110</td>
						<td>400</td>
						<td>110</td>
					  </tr>
					  <tr>
						<td>Teknik Industri</td>
						<td>Paralel</td>
						<td>Teknik</td>
						<td>140</td>
						<td>200</td>
						<td>58</td>
					  </tr>
					 
					</tbody>
			</table>
       
        </div>
      </div>
    </div>
  </body>
<script>
$(document).ready(function() {
    $('#pendaftaran').DataTable();
	
});
</script>
</html>
