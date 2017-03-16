<?php
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
//get var
$nomedrek=$_GET["id"];
//cari
$result2=mysql_query("SELECT * FROM registerpasien WHERE nomedrek='$nomedrek' ORDER BY id_pasien DESC LIMIT 1");
$data2=mysql_fetch_array($result2);
$getdata2=$data2["id_pasien"];
$nama=$data2["nama"];
$tanggallahir=$data2["tanggallahir"];
$tanggaldaftar=$data2["tanggaldaftar"];
//cari VK
$result3=mysql_query("SELECT * FROM vk WHERE id_register='$getdata2'");
$data3=mysql_fetch_array($result3);
$bb=$data3["bb"];
$tinggi=$data3["tinggi"];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SIMRS v.0.1 | <?php echo $r1["tipe"]; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- daterange picker -->
    <link href="../plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
	<!-- iCheck for checkboxes and radio inputs -->
    <link href="../plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-black">
    <div class="wrapper">
      
      <!-- static header -->
	  <?php include "header.php"; ?><!-- ./static header -->
	  <?php include "menu_index.php"; ?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            CP
            <small>input</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>CP</li>
            <li class="active">input</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

              <!-- general form elements -->
              <!-- form start -->
          <div class="box">
                <div class="box-header">
                  <i class="fa fa-edit"></i>
				  <h3 class="box-title">Input data CP</h3>
                </div><!-- /.box-header -->
				<!-- form start -->
                <form role="form" action="resepacc.php" method="post">
                  <div class="box-body">
<table cellspacing="0" border="0">
	<colgroup width="303"></colgroup>
	<colgroup span="2" width="35"></colgroup>
	<colgroup width="48"></colgroup>
	<colgroup span="8" width="35"></colgroup>
	<colgroup width="41"></colgroup>
	<colgroup width="35"></colgroup>
	<colgroup width="77"></colgroup>
	<colgroup width="41"></colgroup>
	<colgroup width="74"></colgroup>
	<colgroup width="38"></colgroup>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" rowspan=6 height="123" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">RSKIA Kota Bandung</font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=17 align="center" valign=middle><b><font face="Bookman Old Style" size=3 color="#000000">CLINICAL PATHWAYS </font></b></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=17 rowspan=4 align="center" valign=middle><b><font face="Bookman Old Style" size=3 color="#000000">PERSALINAN NORMAL  (ICD 10 :O80.0)</font></b></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="3" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=15 align="center" valign=middle><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="center" valign=bottom><font size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=18 height="21" align="right" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">                         Hal. 1 dari 5</font></b></td>
		<td align="center" valign=bottom><font size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Berat Badan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Tinggi Badan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Nama Pasien : <?php echo $nama; ?></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><?php echo $bb; ?> Kg</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><?php echo $tinggi; ?> Cm</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">No Rekam Medis : <?php echo $nomedrek; ?></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=8 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=9 align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Tanggal Lahir : <?php echo $tanggallahir; ?></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Diagnosa awal :  </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Kode ICD 10 :</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Rencana Rawat : 2 hari</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Total Biaya</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">PERSALINAN NORMAL</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Ruang Rawat : ................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Kelas :</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Tarif/Hari </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Tgl Masuk </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Tgl Keluar</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Lama Rawat</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom sdval="3" sdnum="1033;"><font face="Bookman Old Style" size=3 color="#000000">3</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0 ;[RED]&quot;(Rp&quot;#,##0)"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><?php echo $tanggaldaftar; ?></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><input type="text" size="10" class="form-control" id="tanggalkeluar" name="tanggalkeluar" placeholder="tanggalkeluar" required></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">........Hari</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0 ;[RED]&quot;(Rp&quot;#,##0)"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Aktivitas :   Hari Rawat</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom sdval="1" sdnum="1033;"><font face="Bookman Old Style" size=3 color="#000000">1</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom sdval="2" sdnum="1033;"><font face="Bookman Old Style" size=3 color="#000000">2</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom sdval="3" sdnum="1033;"><font face="Bookman Old Style" size=3 color="#000000">3</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom sdval="4" sdnum="1033;"><font face="Bookman Old Style" size=3 color="#000000">4</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom sdval="5" sdnum="1033;"><font face="Bookman Old Style" size=3 color="#000000">5</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom sdval="6" sdnum="1033;"><font face="Bookman Old Style" size=3 color="#000000">6</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom sdval="7" sdnum="1033;"><font face="Bookman Old Style" size=3 color="#000000">7</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">                   Hari Sakit</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Diagnosis Utama :</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">PERSALINAN NORMAL</font></b></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Penyakit Penyerta :</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">1.&nbsp;&nbsp;Anemia</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=31 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">2.&nbsp;&nbsp;Hipertensi gestasional</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">3.&nbsp;&nbsp;Hipertensi kronis</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">4.&nbsp;&nbsp;Preeklamsi ringan </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">5.&nbsp;&nbsp;Preeklamsi berat</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">6.&nbsp;&nbsp;Eklamsi</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">7.&nbsp;&nbsp;Bekas SC</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">8.&nbsp;&nbsp;Persalinan kurang bulan </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">9.&nbsp;&nbsp;Kehamilan lewat waktu</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">10. Oligohidramnion </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">11.&nbsp;Polihidramnion</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">12.&nbsp;IUFD</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">13. Suspek bayi besar</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">14.&nbsp;Penyakit metabolik (DM, tiroid)</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">15.&nbsp;Ketuban pecah dini</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">16.&nbsp;Panggul sempit relatif</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">17.&nbsp;Asma</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">18.&nbsp;Plasenta letak rendah</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">19.&nbsp;Solusio plasenta</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">20.&nbsp;Riwayat obstetri buruk</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">21.&nbsp;Obesitas</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">22.&nbsp;TB</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">23. Hepatitis </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">24.&nbsp;HIV</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">25. Penyakit jantung dalam kehamilan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">26.&nbsp;Kurang energi kronik</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">27.&nbsp;Infeksi intrauterin</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">28.&nbsp;Infeksi saluran kemih</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">29. Hemorrhoid</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">30 ...............................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">31 ...............................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Asesmen Klinik</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Visite Dokter</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><input type="checkbox" class="flat-blue" name="visite[]" value="visite1" <?php echo $visite1; ?>></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><input type="checkbox" class="flat-blue" name="visite[]" value="visite2" <?php echo $visite2; ?>></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><input type="checkbox" class="flat-blue" name="visite[]" value="visite3" <?php echo $visite3; ?>></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><input type="checkbox" class="flat-blue" name="visite[]" value="visite4" <?php echo $visite4; ?>></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><input type="checkbox" class="flat-blue" name="visite[]" value="visite5" <?php echo $visite5; ?>></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><input type="checkbox" class="flat-blue" name="visite[]" value="visite6" <?php echo $visite6; ?>></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><input type="checkbox" class="flat-blue" name="visite[]" value="visite7" <?php echo $visite7; ?>></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Konsultasi </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">1. Penyakit dalam</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">2. Anastesi</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">3. Penyakit Syaraf</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">4 .................................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF" sdval="0" sdnum="1033;0;&quot;Rp&quot;#,##0 ;[RED]&quot;(Rp&quot;#,##0)"><font size=3 color="#FFFFFF">Rp0 </font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">5 .................................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Pemeriksaan Penunjang</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 rowspan=2 align="center" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Laboratorium</font></b></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">1. Hemoglobin</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><input type="checkbox" class="flat-blue" name="lab[]" value="lab1" <?php echo $lab1; ?>></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=middle sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">2.&nbsp;Hematokrit</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><input type="checkbox" class="flat-blue" name="lab[]" value="lab2" <?php echo $lab2; ?>></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">3. Leukosit</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">4. Trombosit</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=middle sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">5. Glukosa darah</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">6. Urin lengkap</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">7. HbsAg</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">8. VDRL</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">9.  HIV</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">10. Kardiotokografi</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">11 .................................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=18 height="21" align="right" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">                         Hal. 2 dari 5</font></b></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Radiologis</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">1 .................................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">2 .................................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Tindakan </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">1.&nbsp;&nbsp; Observasi BJA dan His</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">2.&nbsp;  Pemeriksaan tanda vital</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">3.&nbsp;&nbsp; Pemeriksaan dalam</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">4.&nbsp;&nbsp; Kateter </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">5.&nbsp;&nbsp; Infus</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">6.&nbsp;&nbsp; Amniotomi</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">7.&nbsp;&nbsp; Episiotomi</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">8.&nbsp;&nbsp; Pimpin Persalinan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">9.&nbsp; Manajemen kala II</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">10.&nbsp;Manajemen Kala III</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">11.&nbsp;Eksplorasi jalan lahir</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">12.&nbsp;Penjahitan ruptur perineum</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">13.&nbsp;Perawatan luka jalan lahir</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">14.&nbsp;O2</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">15.&nbsp;Transfusi</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">16.&nbsp;Manual plasenta</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">17................................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">18................................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF" sdval="0" sdnum="1033;0;[&gt;0]#,##0 ;[&lt;0](#,##0);- ;@ "><font size=3 color="#FFFFFF">- </font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Obat- Obatan</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">A. Antibiotika</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">1.&nbsp;Amoksisilin 500 mg 3 x 1</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">2. ....................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">3. .....................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">4. .....................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">5. .....................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">B. Analgetika:</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">1.&nbsp;Parasetamol 500 mg  3 x 1</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">2 ......................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">3.....................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">4.&nbsp;.............................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">C. Uterotonika</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">1.&nbsp;Oksitosin 2 amp</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">2.&nbsp;Metilergometrin</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF">(1 amp)</font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">3.&nbsp;Misoprostol</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF">(1 amp)</font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=middle><b><font face="Bookman Old Style" size=3 color="#000000">D. Tablet tambah darah</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">1.&nbsp;Sulfas ferosus 10 tablet</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">2. ............................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">3.&nbsp;...........................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">E. Anestesi Lokal</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">1. Lidokain</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF">(2 amp)</font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom bgcolor="#FFFFFF"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom bgcolor="#FFFFFF"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom bgcolor="#FFFFFF"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Analisa Kebidanan</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=middle sdnum="1033;0;#,##0"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">P...A...Partus Maturus Spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Intervensi Keperawatan/Kebidanan</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=7 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="63" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">1. Informasikan hasil pemeriksaan kepada ibu/klien dan keluarga</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">2. Orientasikan pasien dan lingkungan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="105" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">3. Perhatikan kenyamanan lingkungan/privacy klien (pencahayaan, musik, kebersihan, orang-orang di dalam ruangan dll)</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="84" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">4.&nbsp;Hadirkan seseorang yang dapat memberikan dukungan selama persalinan ( suami atau orang tua)</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">5.&nbsp;&nbsp;Lakukan pengkajian nyeri</font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="63" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">6.&nbsp;Berikan metode mengurangi rasa nyeri/sakit menggunakan tehnik non analgetik </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="84" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">a)&nbsp;  Pengaturan posisi : duduk/setengah duduk, jongkok, berdiri, merangkak, berbaring miring ke kiri</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=18 height="21" align="right" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">                         Hal. 3 dari 5</font></b></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">b)&nbsp;  Latihan Relaksasi/pernafasan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">c)&nbsp;&nbsp; Berikan sentuhan dan masase</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">d)&nbsp;  Kompres hangat untuk punggung bawah</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">e)&nbsp;&nbsp; Kompres dingin untuk wajah atau punggung bawah</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">f)&nbsp;&nbsp;&nbsp; Pengeluaran suara</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">g)&nbsp;  Dengarkan musik</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">h)&nbsp; Lakukan visualisasi</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">7.&nbsp;&nbsp;Jaga kebersihan dan kenyamanan pasien :</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">8.&nbsp;&nbsp;Pantau tanda gejala infeksi</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">9.&nbsp;&nbsp;Observasi tekanan darah per 4 jam, </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="63" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">10.&nbsp;Obsevasi Suhu setiap 4 jam fase laten dan setiap 2 jam fase aktif</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">11.&nbsp; Observasi nadi dan pernafasan setiap jam</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="63" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">12.&nbsp; Observasi kontraksi dan BJA setiap jam fase laten dan setiap setengah jam fase aktif</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="105" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">13.&nbsp; Observasi pembukaan cerviks dan penurunan kepala setiap 4 jam atau jika ada indikasi ( ketuban pecah, gawat janin dan ibu ingin mengedan)</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">14.&nbsp; Berikan nutrisi dan cairan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">15.&nbsp; Monitoring  intake output</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">16.&nbsp; Anjurkan ibu  buang air kecil setiap 2 jam</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">17.&nbsp; Melakukan persiapan alat, bahan dan obat-obatan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="63" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">18.&nbsp; Bimbing ibu posisi persalinan dan cara mengedan yang benar</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="105" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">19.&nbsp; Memberikan edukasi tentang persalinan spontan, kebutuhan persalinan, tanda bahaya persalinan, cuci tangan, tanda gejala infeksi</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">20.&nbsp; Lakukan pertolongan persalinan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">21.&nbsp; Lakukan Inisiasi Menyusui Dini</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">22.&nbsp; Lakukan masase uterus</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">23.&nbsp; Lakukan evaluasi luka jalan lahir  </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">24.&nbsp; Lakukan penjahitan luka jalan lahir</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFF00"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="107" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">26.&nbsp; Mengkaji TTV, kontraksi, TFU, perdarahan dan kandung kemih setiap 15 menit dalam 1 jam pertama selanjutnya setiap 30 menit jam kedua, setelah 2 jam per 6 jam</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="63" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">27.&nbsp; Memberikan kenyamanan ibu dengan membersihkan ibu dan lingkungan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="63" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">28.&nbsp; Bantu mobilisasi dini bertahap ( miring kanan dan kiri, duduk, berdiri dan berjalan)</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">29.&nbsp; Pantau  Eliminasi (BAK 2 jam setelah persalinan)</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="84" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">30.&nbsp; Memberikan edukasi tentang tanda-tanda bahaya nifas, mobilisasi, eliminasi dan perawatan luka jahitan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">31.&nbsp; Melakukan dekontaminasi alat</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">32. Melakukan dokumentasi</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">33. Kolaborasi dengan dokter</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="27" align="left" valign=top><font face="Bookman Old Style" size=3 color="#000000">34. ……………………….</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Nutrisi </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">1.&nbsp;Diit tinggi kalori tinggi protein</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">2.&nbsp;Diit .........................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">3.&nbsp;Diit .........................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=18 height="21" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=18 height="21" align="right" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">                         Hal. 4 dari 5</font></b></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Mobilisasi/Fisioterapi</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">1.Bebas</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">2. .....................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">3. .....................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Hasil (outcome)</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">a. Kesadaran</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">1. Kompos Mentis</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">2. Apatis</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">3. Somnolen</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">4. Soporous Koma</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">5. Koma </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">..........</font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="28" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">6...........................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">b. Komplikasi</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom bgcolor="#FFFFFF"><font size=3 color="#FFFFFF"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">1.&nbsp; Retensio plasenta</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">2.&nbsp; Perdarahan pasca salin</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">3.&nbsp; Ruptur perineum</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="justify" valign=middle><font face="Bookman Old Style" size=3 color="#000000">4.&nbsp; Retensio urin</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">5.  Infeksi puepuerium</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">6.............................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Pendidikan /</font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 rowspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">rencana pemulangan</font></b></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">1. Penjelasan perjalanan Penyakit</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=4 align="center" valign=middle sdnum="1033;0;#,##0"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">2. Penjelasan obat-obatan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">3. Penjelasan diit</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">4. Konseling KB</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FFFFFF"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom bgcolor="#FF0000"><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Varian </font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=14 rowspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Jumlah Biaya :                  ........................................</font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="22" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" height="25" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Nama Perawat/Bidan</font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Diagnosis Akhir</font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Kode ICD 10</font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Jenis Tindakan</font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Kode ICD 9 CM</font></td>
		<td style="border-top: 2px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan=3 rowspan=2 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Biaya</font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" height="42" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Utama </font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" height="47" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">......................................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=7 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Persalinan normal</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">O80.0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" colspan=3 align="center" valign=middle sdnum="1033;0;&quot;Rp&quot;#,##0 ;[RED]&quot;(Rp&quot;#,##0)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" rowspan=2 height="75" align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Nama  Dokter Penanggung Jawab Pasien</font></td>
		<td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=3 rowspan=2 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Penyerta</font></td>
		<td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=2 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Kode ICD 10</font></td>
		<td style="border-top: 2px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 rowspan=2 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Jenis Tindakan</font></td>
		<td style="border-top: 2px solid #000000; border-left: 1px solid #000000" colspan=2 rowspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Kode ICD 9 CM</font></td>
		<td style="border-top: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" colspan=4 rowspan=2 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Biaya</font></td>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td align="left" valign=bottom><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="41" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Anemia</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O99.0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="41" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Hipertensi gestasional</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O99.1</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="41" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Hipertensi kronis</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O11</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="41" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Preeklamsi ringan </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O14.0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="43" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Preeklamsi berat</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O14.1</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="27" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Eklamsi</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O15.0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="39" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Bekas SC</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O34.2</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="56" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Persalinan kurang bulan </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O60.1</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Kehamilan lewat waktu</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O48</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Oligohidramnion </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O41.0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Polihidramnion</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O40</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">&nbsp;IUFD</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O36.5</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"> Suspek bayi besar</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O36.6</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="78" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Penyakit metabolik (DM, tiroid)</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O24.9</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=18 height="45" align="right" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">                         Hal. 5 dari 5</font></b></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Ketuban pecah dini</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O42.9</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="73" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">&nbsp;Panggul sempit relatif</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O33.1</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Asma</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O99.5</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="73" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Plasenta letak rendah</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O44.1</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Solusio plasenta</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O45.9</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Riwayat obstetri buruk</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Z35.2</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Obesitas</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O26.0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">&nbsp;TB</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O98.0</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="right" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Hepatitis </font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O98.4</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">HIV</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">B24</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"> Penyakit jantung dalam kehamilan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O99.4</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Kurang energi kronik</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O99.2</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Infeksi intrauterin</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O23.5</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Infeksi saluran kemih</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O23.4</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000">Hemorrhoid</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">O22.4</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Partus spontan</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">73.59</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom sdnum="1033;0;&quot;Rp&quot;#,##0.00 ;[RED]&quot;(Rp&quot;#,##0.00)"><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="center" valign=middle><font face="Bookman Old Style" size=3 color="#000000">KOMPLIKASI</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" height="53" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" colspan=3 align="right" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=2 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" colspan=4 align="center" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.................</font></td>
		<td align="left" valign=middle><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">......................................</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">Nama Petugas Verifikasi/</font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">case Manager</font></td>
		<td style="border-top: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="center" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="21" align="left" valign=bottom><font face="Bookman Old Style" size=3 color="#000000">.......................................</font></td>
		<td style="border-left: 1px solid #000000" align="center" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td style="border-right: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000"><br></font></b></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Keterangan </font></b></td>
		<td style="border-left: 1px solid #000000" align="center" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="center" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="21" align="left" valign=bottom bgcolor="#FF0000"><b><font face="Bookman Old Style" size=3 color="#FAC090">                               </font></b></td>
		<td style="border-left: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Bookman Old Style" size=3 color="#000000">:</font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Yang harus dilakukan</font></b></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="21" align="left" valign=bottom bgcolor="#FFFF00"><b><font face="Bookman Old Style" size=3 color="#000000">                                </font></b></td>
		<td style="border-left: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Bookman Old Style" size=3 color="#000000">:</font></b></td>
		<td align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Bisa ada atau tidak</font></b></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-right: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
	</tr>
	<tr>
		<td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000" height="21" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Beri tanda ( √ )    </font></b></td>
		<td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000" align="center" valign=bottom bgcolor="#FFFFFF"><b><font face="Bookman Old Style" size=3 color="#000000">:</font></b></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><b><font face="Bookman Old Style" size=3 color="#000000">Bila sudah dilakukan</font></b></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
		<td align="left" valign=bottom><font size=3 color="#000000"><br></font></td>
	</tr>
</table>

                  </div><!-- /.box-body -->
				  
				  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
				</form>
			  </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- static footer -->
	  <?php include "footer.php"; ?><!-- /.static footer -->
    </div><!-- ./wrapper -->
    <!-- jQuery 2.1.3 -->
    <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<!-- date-picker -->
    <script src="../plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
	<!-- typeahead -->
    <script src="../plugins/typeahead/typeahead.bundle.js" type="text/javascript"></script>
	<!-- iCheck 1.0.1 -->
    <script src="../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-blue').iCheck({
        checkboxClass: 'icheckbox_flat-red'
      });
	  //Date range picker
      $('#tanggalkeluar').datepicker({
		format: 'dd/mm/yyyy',
		autoclose: true
	  });
    </script>

  </body>
</html>
