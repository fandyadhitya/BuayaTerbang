<?php
include "../../koneksi/koneksi.php";

$nislama = $_POST['id'];
$nis =$_POST['nis'];
$nama = ucwords($_POST['nama']);
$alamat = ucwords($_POST['alamat']);
$jurusan = $_POST['jurusan'];
$kelas = $_POST['kelas'];

$hajar = mysql_query("UPDATE siswa SET idSiswa='$nis', nama = '$nama', alamat = '$alamat', kelas = '$kelas' WHERE idSiswa = '$nislama'");
if(!$hajar){
?>
<script>
alert('Terjadi kesalahan sistem saat input data!');
document.location.href="../edit_data/edit_siswa.php?nis=<?php echo $nislama; ?>";
</script><?php
}else{
?>
<script>document.location.href="../lihat_data/siswa.php"</script><?php
}
?>
