<?php
include "../koneksi/koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>SMA NEGERI 1 KONOHA</title>
<link rel="stylesheet" href="css/style_admin.css" type="text/css" media="screen" title="default" />

</head>
<body>

<div id="page-top-outer">
<div id="page-top">
	<div id="logo">
	<a href=""><img src="images/logo1.png" width="300" height="80" alt="" /></a>
	</div>

	</div>
</div>

</div>
<center>
<div class="nav-outer-repeat">
<div class="nav-outer">
		<div class="nav">
		<div class="table">
		<ul class="select">
			<li>
				<a href="index.php"><b>AWAL</b></a>
			</li>
		</ul>

		<div class="nav-divider">&nbsp;</div>
		 <?php
		 if($_SESSION['level']=="admin"){
		 ?>
		<ul class="select"><li><a href="#"><b>MASUKAN DATA</b></a>
		<div class="select_sub show">
			<ul class="sub">
				<li><a href="?page=input_data/input_siswa">Input Siswa  </a></li>
				<li><a href="?page=input_data/input_guru">Input Guru 	</a></li>
				<li><a href="?page=input_data/input_mapel">Input Pelajaran 	</a></li>
			</ul>
		</div>
		</li>
		</ul>
		<?php
		}
		?>
		<div class="nav-divider">&nbsp;</div>

		<ul class="select"><li><a href="#"><b>LIHAT DATA</b></a>
		<div class="select_sub">
			<ul class="sub">
				<li><a href="?page=lihat_data/siswa">Lihat Data Siswa</a></li>
				<li><a href="?page=lihat_data/guru">Lihat Data Guru</a></li>
        <li><a href="?page=lihat_data/mapel">Lihat Mata Pelajaran</a></li>
				<li><a href="?page=lihat_data/kelas">Lihat Data Kelas</a></li>
			</ul>
		</div>
		</li>
		</ul>
    <div class="nav-divider">&nbsp;</div>
		<ul class="select"><li><a href="keluar.php" id="logout" onclick="return confirm('Anda yakin logout dari sistem?')"><b>LOGOUT</b></a></li></ul>
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
</center>
  <div class="clear"></div>

<div id="content-outer">
<div id="content">

	<div id="page-heading">

	</div>

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<div id="content-table-inner">

			<div id="table-content"><?php include "isi.php"; ?></div>

		</div>
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<div class="clear">&nbsp;</div>
</div>

<div class="clear">&nbsp;</div>

<div id="footer">
	<div id="footer-left"><center>Copyright &copy; 2016 Cicak Terbang</center><br />
	<div class="clear">&nbsp;</div>
</div>
</body>
</html>
