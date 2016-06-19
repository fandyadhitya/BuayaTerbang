<?php
include "../../koneksi/koneksi.php";
$id =$_GET['id'];
$query = mysql_query("DELETE FROM guru WHERE idGuru = '$id'");
?>
<script>document.location.href="../lihat_data/guru.php"</script>
