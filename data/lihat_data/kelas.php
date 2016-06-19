<?php
include "../../koneksi/koneksi.php";
$hasil=mysql_query("SELECT * FROM ruang_kelas");
?>
<link rel="stylesheet" href="style.css" />
<h2><center>Data Ruang Kelas</center></h2><br />
<body>
  <center>
	<div id="tablewrapper">
        <table width="710" border="0" cellpadding="0" cellspacing="0" class="tt" id="table" align="center">
            <thead>
                <tr>
                  <th width="90"><h3>Nomor</h3></th>
				  <th width="200"><h3>Ruang Kelas</h3></th>
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
      }
			?>
            </tbody>
      </table>
    </center>
    </div>
</body>
