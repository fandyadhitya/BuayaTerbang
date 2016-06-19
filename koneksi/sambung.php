<?php
$host="localhost";
$user="root";
$password="";
$database="cicak_terbang_db";
$koneksi=mysql_connect($host,$user,$password);
$select_db = mysql_select_db($database, $koneksi);
if($koneksi !== false && $select_db !== false) {
}else{
    echo "".mysql_error();
    exit();
}
?>
