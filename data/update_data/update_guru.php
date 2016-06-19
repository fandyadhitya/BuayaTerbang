<?php
include "../../koneksi/koneksi.php";

$idlama = $_POST['idlama'];
$id = $_POST['id'];
$nama = ucfirst($_POST['nama']);
$alamat = ucfirst($_POST['alamat']);

$sql = mysql_query("UPDATE guru SET idGuru = '$id', nama = '$nama',alamat = '$alamat' WHERE idGuru = '$idlama'");
if(!$sql){
?>
<script>
alert('Terjadi kesalahan sistem saat update data!');
document.location.href="edit_guru.php?id=<?php echo $idlama; ?>";
</script><?php
}else{
?>
<script>document.location.href="../lihat_data/guru.php"</script><?php
}

?>
