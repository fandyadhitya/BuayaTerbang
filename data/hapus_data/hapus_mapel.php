<?php
include "../../koneksi/koneksi.php";
$id = $_GET['id'];
$sql = mysql_query("DELETE FROM mata_pelajaran WHERE idmata_pelajaran = '$id'");
?>
<script>document.location.href="../lihat_data/mapel.php"</script>
