<?php
include "../../koneksi/koneksi.php";
?>
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<script type="text/javascript" src="pesan.js"></script>
<h2 align="center">Input Data Siswa</h2>
<table align="center"><tr><td>
<form name="form" id="form" class="form" action="../simpan_data/isi_siswa.php" method="post">
<table width="473" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="150" height="37">NIS</td>
    <td width="17">:</td>
    <td width="227"><input type="text" style="height:30px; padding-left:5px; font-size:15px; width:150px;" name="nis" id="nis" size="10"/></td>
  </tr>
  <tr>
    <td height="37">Nama Lengkap </td>
    <td>:</td>
    <td><input type="text" name="nama" style="height:30px; padding-left:5px; font-size:15px; width:200px;" id="id" size="30"/></td>
  </tr>
  <tr>
    <td height="38">Kelas</td>
    <td>:</td>
    <td><select name="kelas" id="kelas" style="height:30px;">
      <option value="">-=Pilih=-</option>
      <?php $query = mysql_query("SELECT nama FROM ruang_kelas");
	  while($qry = mysql_fetch_array($query)){
	  echo "<option>$qry[nama]</option>";
	  }
	  ?>
    </select></td>
  </tr>
  <tr>
    <td height="50" valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat"></textarea></td>
  </tr>
  <tr>
    <td height="54" colspan="3"><div align="center">
      <input type="submit" value="Simpan Data" class="submit" />
      <input type="reset" class="reset" value="Reset" />
    </div></td>
  </tr>
</table>
</form>
</td>
</tr>
</table>
