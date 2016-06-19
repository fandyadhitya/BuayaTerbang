<?php
include "../../koneksi/koneksi.php";
$nama = ucwords(strtolower($_POST['nama']));
$query = mysql_query("INSERT INTO mata_pelajaran (nama) VALUES ('$nama')");
?>
<script>document.location.href="../lihat_data/mapel.php"</script>
