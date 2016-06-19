<center><h2>Input Mata Pelajaran</h2></center>
<link rel="stylesheet" type="text/css" href="style.css" />
<form name="form" id="form" class="form" action="../simpan_data/isi_mapel.php" onKeyUp="highlight(event)" onClick="highlight(event)" onsubmit="return validate(this)" method="post">
<table align="center"><tr>
<td height="157">
<table width="277" height="133" align="center" style="margin-left:100px;">
  <tr>
    <td width="150" height="10">Mata Pelajaran </td>
    <td width="5">:</td>
    <td width="149"><input type="text" style="height:30px; padding-left:5px; font-size:15px; width:200px;" name="nama" id="nama" /></td>
  </tr>
  <tr>
    <td height="65" colspan="3"><div align="center">
      <input type="submit" name="Submit" value="Simpan Data" />
      <input type="reset" name="reset" value="Reset" />
    </div></td>
  </tr>
</table></td></tr></table>
</form>
