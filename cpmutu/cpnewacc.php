<?php
//conn
session_start();
include("../inc/cek.php");
$namauser = $_SESSION['namauser'];
$password = $_SESSION['password'];
$tipe = $_SESSION['tipe'];
if ($tipe!='CP')
{
	session_start();
	unset($_SESSION['tipe']);
	unset($_SESSION['namauser']);
	unset($_SESSION['password']);
	header("location:../index.php?status=2");
	exit;
}
include "../inc/koneksi.inc.php";
//insert
if (isset($_POST['pilih'])) 
{
    $pilihan=implode(',', $_POST['pilih']);
	$result = mysql_query("INSERT INTO clinicp(isi) VALUES ('$pilihan')");
}
//action
if ($result) {
echo "<script language=\"JavaScript\">window.location = \"cpnew.php?status=1\"</script>";
} else {
echo "gagal";
}
?>