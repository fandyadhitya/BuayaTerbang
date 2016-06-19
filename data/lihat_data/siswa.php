<?php
include "../../koneksi/koneksi.php";
$hasil=mysql_query("SELECT * FROM siswa ORDER BY nama ASC");
?>
<link rel="stylesheet" href="style.css" />
<h2><div align="center">Data Siswa</div></h2><br /><br />
<body>
	<div id="tablewrapper">
    <center>
        <table width="708" cellpadding="0" cellspacing="0" class="tt" id="table">
            <thead>
                <tr>
                  <th width="86"><h3>NIS</h3></th>
                  <th width="400"><h3>Nama</h3></th>
                  <th width="400"><h3>Alamat</h3></th>
                  <th width="10"><h3>Kelas</h3></th>
				              <th width="80"><h3>Pilihan</h3></th>
                </tr>
            </thead>
            <tbody>
			<?php
			while ($baris = mysql_fetch_array($hasil)){
			echo"<tr>
			<td>$baris[idSiswa]</td>
			<td>$baris[nama]</td>
			<td>$baris[alamat]</td>
			<td>$baris[kelas]</td>
			<td>";

		 if($_SESSION['level']=="admin"){
			echo "
			<a href=../edit_data/edit_siswa.php?nis=$baris[idSiswa]><img src=../icon/update.png border=0></a>&nbsp;|
			<a href=../hapus_data/hapus_siswa.php?nis=$baris[idSiswa] onClick=\"return confirm('Apakah Anda Yakin Akan Menghapus Data?')\"><img src=../icon/hapus.png border=0></a></td>
            </tr>";
			}}
			?>
            </tbody>
      </table>
    </center>
        <div id="tablefooter">
        </div>
</div>

</body>
