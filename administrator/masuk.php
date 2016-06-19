<?php
session_start();
if(isset($_SESSION['admin'])){
echo "<script>document.location.href=\"index.php\"</script>";
}else{
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Sistem Informasi Akademik Sekolah</title>
<link rel="stylesheet" href="css/style_admin.css" type="text/css" media="screen" title="default" />
</head>
<body id="">
<div id="login-holder">
	<div class="clear"></div>
	<div id="loginbox">
	<div id="login-inner">
		<table border="0" cellpadding="0" cellspacing="0">
		<form name="form" method="post" action="cek.php">
		<tr>
			<th>Username</th>
			<td><input type="text"  class="login-inp" name="username" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th></th>
			<td valign="top">&nbsp;</td>
		</tr>
		<tr>
			<th></th>
			<td><input name="Submit" type="submit" class="submit-login" value="Submit" /></td>
		</tr>
		</form>
		</table>
	</div>
	<div class="clear"></div>
 </div>
</div>
</body>
</html>
<?php } ?>
