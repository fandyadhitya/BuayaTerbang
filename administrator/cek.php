<?php
require_once '../koneksi/sambung.php';
$myusername=str_replace("'","",$_POST['username']);
$mypassword=$_POST['password'];
$sql="SELECT * FROM administrator WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
$query = mysql_query("UPDATE administrator  WHERE username = '$myusername'");
session_start();
		$_SESSION['admin']=$myusername;
		$_SESSION['level']="admin";
header("location:index.php");
}
else{
	echo "<script>alert('Login gagal!'); document.location.href=\"masuk.php\"</script>";
}
?>
