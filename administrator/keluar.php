<?php
include "../koneksi/koneksi.php";
unset($_SESSION['admin']);
unset($_SESSION['level']);
header("location:masuk.php");
?>
