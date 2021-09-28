<?php
include "koneksi.php";
$username=$_POST['username'];
$password=md5($_POST['password']);

$sql=mysqli_query($koneksi, "select * from admin where nama = '$username' and password = '$password' ");

$cek=mysqli_num_rows($sql);
if ($cek >0) {
	session_start();
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	//echo "<b>$user</b> berhasil login <br>";
	//echo "Silahkan <a href=logout.php>Logout</a>";
	header('location:media.php?modul=home');

}else{
	echo "<center><strong> Password anda salah<br>";
	echo "Silahkan <a href=index.php>login</a> kembali";
}
	

?>