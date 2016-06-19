<?php
include "../../koneksi/koneksi.php";
$id = $_GET['nis'];
$query = mysql_query("DELETE FROM siswa WHERE idSiswa=$id");
$sql = mysql_query("DELETE FROM siswa_has_mata_pelajaran WHERE idSiswa=$id");
?>
<script>document.location.href="../lihat_data/siswa.php"</script>
