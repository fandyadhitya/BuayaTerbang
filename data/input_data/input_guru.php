<?php
include "../../koneksi/koneksi.php";
$query = mysql_query("SELECT MAX(idGuru) as idGuru FROM guru");
$hasil = mysql_fetch_array($query);
$hasil2 = $hasil[idGuru];
?>
<link rel="stylesheet" type="text/css" href="style.css" />

<h2 align=center>Input Data Guru</h2>
  </p>
<table id=tablewrapper align="center"><tr><td>
<form action="../simpan_data/isi_guru.php" method="post" class="form" id="form">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="138">ID Guru </td>
    <td width="15">:</td>
    <td width="250">
      <input type="text" name="id" style="height:30px; padding-left:5px; font-size:15px; width:150px;" size="30" id="id" value=""/>    </td>
  </tr>
  <tr>
    <td>Nama Guru </td>
    <td>:</td>
    <td><input type="text" name="nama" style="height:30px; padding-left:5px; font-size:15px; width:200px;" id="nama"/></td>
  </tr>

  <tr>
    <td valign="top">Alamat : </td>
    <td valign="top">:</td>
    <td><textarea name="alamat" id="alamat" style="width:250px; height:100px; padding-left:5px; font-size:15px;"></textarea></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
      <input type="reset" name="reset" value="Reset" />
    </div></td>
  </table>
</form>
</td></tr></table>
