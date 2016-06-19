<?php
include "../../koneksi/koneksi.php";
$hasil=mysql_query("SELECT * FROM mata_pelajaran");
?>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="../style.css" />
<h1><center>Data Mata Pelajaran</center></h1><br />
<body>
	<div id="tablewrapper">
        <table width="709" border="0" cellpadding="0" cellspacing="0" class="tt" id="table">
            <thead>
                <tr>
                  <th width="84"><h3>Nomor</h3></th>
				  <th width="508"><h3>Mata Pelajaran</h3></th>
				  <th width="116" class=nosort><h3>Pilihan</h3></th>
                </tr>
            </thead>
            <tbody>
			<?php
			while ($baris = mysql_fetch_array($hasil)){
			$i++;
			echo"<tr align=\"center\">
			<td>$i</td>
			<td>$baris[nama]</td>
			";
		 if($_SESSION['level']=="admin"){
			echo "
			<td><a href=../edit_data/edit_mapel.php?id=$baris[idmata_pelajaran]><img src=../icon/update.png border=0></a>&nbsp;|
			<a href=../hapus_data/hapus_mapel.php?id=$baris[idmata_pelajaran] onClick=\"return confirm('Apakah Anda Yakin Akan Menghapus Data?')\"><img src=../icon/hapus.png border=0></a></td>
            </tr>";
			} }
			?>
            </tbody>
      </table>
    </div>
</body>
