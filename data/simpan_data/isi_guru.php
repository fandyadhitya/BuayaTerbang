<?php
include "../../koneksi/koneksi.php";
$id = $_POST['id'];
$nama = ucwords($_POST['nama']);
$walikelas = $_POST['wali'];
$alamat  = ucwords($_POST['alamat']);
$query = mysql_query("INSERT INTO guru (idGuru, nama, alamat) VALUES ('$id','$nama','$alamat')");
if(!$query){
?>
<script>
alert('Terjadi kesalahan sistem saat input data!');
document.location.href="../input_guru.php";
</script><?php
}else{
?>
<script>document.location.href="../lihat_data/guru.php"</script><?php
}
?>
