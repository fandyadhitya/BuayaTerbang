<?php
include "../../koneksi/koneksi.php";
$id = $_GET['id'];
$query = mysql_query("SELECT * FROM guru WHERE idGuru = '$id'");
$hasil = mysql_fetch_array($query);
?>
<link rel="stylesheet" type="text/css" href="style.css" />

<h2 align="center">Edit Data Guru</h2>
  </p>
<table align="center"><tr><td>
<form action="../update_data/update_guru.php" method="post" name="form" class="form" id="form" >
<input type="hidden" name="idlama" value="<?php echo $hasil['idGuru'];?>">
  <table width="437" height="228" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="138">ID Guru </td>
    <td width="15">:</td>
    <td width="270">
      <input type="text" name="id"  style="height:30px; padding-left:5px; font-size:15px; width:150px;" size="10" id="id" value="<?php echo $hasil['idGuru'];?>"/>    </td>
  </tr>
  <tr>
    <td>Nama Guru </td>
    <td>:</td>
    <td><input type="text" name="nama" style="height:30px; padding-left:5px; font-size:15px; width:200px;" id="nama" value="<?php echo $hasil['nama'];?>"/></td>
  </tr>
  <tr>
    <td valign="top">Alamat</td>
    <td valign="top">:</td>
    <td><textarea name="alamat" style="height:100px; padding-left:5px; font-size:15px; width:200px;" id="alamat"><?php echo $hasil['alamat'];?></textarea></td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data"/>
    </div></td>
  </table>
</form>
</td></tr></table>
