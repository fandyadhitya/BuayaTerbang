<?php
include "../../koneksi/koneksi.php";

$nis =$_POST['nis'];
$nama = ucwords(strtolower($_POST['nama']));
$alamat = ucwords(strtolower($_POST['alamat']));
$kelas = $_POST['kelas'];

$hajar = mysql_query("INSERT INTO siswa VALUES('$nis','$nama','$alamat','$kelas')");
if(!$hajar){
?>
<script>
alert('Terjadi kesalahan sistem saat input data!');
document.location.href="input_siswa.php";
</script><?php
}else{
?>
<script>document.location.href="../lihat_data/siswa.php"</script><?php
}
?>
