<?php
include "../../koneksi/koneksi.php";
$hasil=mysql_query("SELECT * FROM guru ORDER BY nama ASC");
?>

<link rel="stylesheet" href="style.css" />
<h2><center>Data Guru Pengajar</center></h2><br />
<body>
  <center>
	<div id="tablewrapper">
        <table width="708" border="0" cellpadding="0" cellspacing="0" class="tt" id="table" align="center">
            <thead>
                <tr>
                  <th width="49"><h3>NIP</h3></th>
                  <th width="237"><h3>Nama Guru</h3></th>
                  <th width="146"><h3>Alamat</h3></th>
				  <th width="79"><h3>Pilihan</h3></th>
                </tr>
            </thead>
            <tbody>
			<?php
			while ($baris = mysql_fetch_array($hasil)){
			echo"
			<td>$baris[idGuru]</td>
			<td>$baris[nama]</td>
			<td>$baris[alamat]</td>
</td>";

		 if($_SESSION['level']=="admin"){
			echo "<td>
			<a href=../edit_data/edit_guru.php?id=$baris[idGuru]><img src=../icon/update.png border=0></a>&nbsp;|
			<a href=../hapus_data/hapus_guru.php?id=$baris[idGuru] onClick=\"return confirm('Apakah Anda Yakin Akan Menghapus Data?')\"><img src=../icon/hapus.png border=0></a>
			</td>
            </tr>";
			}}
			?>
            </tbody>
      </table>
    </div>
  </center>
</body>
