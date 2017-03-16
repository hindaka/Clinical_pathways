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
//vars get
$id=$_GET["id"];
$nomedrek=$_GET["nomedrek"];
//vars post
$dpjp=$_POST["dpjp"];
$penolong=$_POST["penolong"];
$diagnosam=$_POST["diagnosam"];
$diagnosamicd=$_POST["diagnosamicd"];
$diagnosau=$_POST["diagnosau"];
$diagnosauicd=$_POST["diagnosauicd"];
$diagnosap1=$_POST["diagnosap1"];
$diagnosap1icd=$_POST["diagnosap1icd"];
$diagnosap2=$_POST["diagnosap2"];
$diagnosap2icd=$_POST["diagnosap2icd"];
$komplikasi=$_POST["komplikasi"];
$komplikasiicd=$_POST["komplikasiicd"];
$tindakan=$_POST["tindakan"];
$tindakanicd=$_POST["tindakanicd"];
$kelas=$_POST["kelas"];
$tanggalmasuk=$_POST["tanggalmasuk"];
$tarifhari=$_POST["tarifhari"];
$tanggalk=$_POST["tanggalk"];
$lamarawat=$_POST["lamarawat"];
$hari1=$_POST["hari1"];
$hari2=$_POST["hari2"];
$hari3=$_POST["hari3"];
$hari4=$_POST["hari4"];
$hari5=$_POST["hari5"];
$hari6=$_POST["hari6"];
$hari7=$_POST["hari7"];
$manual1=$_POST["manual1"];
$manual2=$_POST["manual2"];
$manual3=$_POST["manual3"];
$manual4=$_POST["manual4"];
$manual5=$_POST["manual5"];
$manual6=$_POST["manual6"];
$manual7=$_POST["manual7"];
$manual8=$_POST["manual8"];
$manual9=$_POST["manual9"];
$manual10=$_POST["manual10"];
$manual11=$_POST["manual11"];
$manual12=$_POST["manual12"];
$jumlahbiaya=$_POST["jumlahbiaya"];
$carabayar=$_POST["carabayar"];
$varian=$_POST["varian"];
$jumlahbiayak=$_POST["jumlahbiayak"];
//insert
if (isset($_POST['pilih'])) 
{
    $pilihan=implode(',', $_POST['pilih']);
	$result = mysql_query("UPDATE clinicp SET nomedrek='$nomedrek',isi='$pilihan',dpjp='$dpjp',penolong='$penolong',diagnosam='$diagnosam',diagnosamicd='$diagnosamicd',diagnosau='$diagnosau',diagnosauicd='$diagnosauicd',diagnosap1='$diagnosap1',diagnosap1icd='$diagnosap1icd',diagnosap2='$diagnosap2',diagnosap2icd='$diagnosap2icd',komplikasi='$komplikasi',komplikasiicd='$komplikasiicd',tindakan='$tindakan',tindakanicd='$tindakanicd',kelas='$kelas',tarifhari='$tarifhari',tanggalk='$tanggalk',lamarawat='$lamarawat',hari1='$hari1',hari2='$hari2',hari3='$hari3',hari4='$hari4',hari5='$hari5',hari6='$hari6',hari7='$hari7',manual1='$manual1',manual2='$manual2',manual3='$manual3',manual4='$manual4',manual5='$manual5',manual6='$manual6',manual7='$manual7',manual8='$manual8',manual9='$manual9',manual10='$manual10',manual11='$manual11',manual12='$manual12',jumlahbiaya='$jumlahbiaya',carabayar='$carabayar',varian='$varian',tanggalmasuk='$tanggalmasuk',jumlahbiayak='$jumlahbiayak' WHERE id_clinicp='$id'");
//logika nilai
//get var
$surat=$_POST["pilih"];
$jumlah_dipilih=count($surat);
for($x=0;$x<$jumlah_dipilih;$x++){
$result = mysql_query("UPDATE nilaicp SET n$surat[$x]='1' WHERE id_clinicp='$id'");
}
}
//action
if ($result) {
echo "<script language=\"JavaScript\">window.location = \"rekapcp.php?status=1\"</script>";
} else {
echo "gagal";
}
?>