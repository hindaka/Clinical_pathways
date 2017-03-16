<?php
session_start();
include("../inc/cek.php");
$namauser = $_SESSION['namauser'];
$password = $_SESSION['password'];
$tipe = $_SESSION['tipe'];
if ($tipe!='Mutu')
{
	session_start();
	unset($_SESSION['tipe']);
	unset($_SESSION['namauser']);
	unset($_SESSION['password']);
	header("location:../index.php?status=2");
	exit;
}
include "../inc/koneksi.inc.php";
//ambil data filter
$bulan=$_POST["bulan"];
$tahun=$_POST["tahun"];
$tgl="$bulan/$tahun";
//
$h2=mysql_query("SELECT * FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$r2=mysql_num_rows($h2);
if ($r2==0)
{
header("location:cpgabung.php?status=3");
exit;
}
//penjumlahan
$hn1=mysql_query("SELECT SUM(n1) AS sum_n1 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn1=mysql_fetch_array($hn1);
$rn1=$dn1["sum_n1"];
$totaln1=$rn1/$r2*100;
$hn2=mysql_query("SELECT SUM(n8) AS sum_n8 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn2=mysql_fetch_array($hn2);
$rn2=$dn2["sum_n8"];
$totaln2=$rn2/$r2*100;
$hn3=mysql_query("SELECT SUM(n15+n16) AS sum_n1516 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn3=mysql_fetch_array($hn3);
$rn3=$dn3["sum_n1516"];
$totaln3=$rn3/2/$r2*100;
$hn4=mysql_query("SELECT SUM(n22+n23) AS sum_n2223 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn4=mysql_fetch_array($hn4);
$rn4=$dn4["sum_n2223"];
$totaln4=$rn4/2/$r2*100;
$hn5=mysql_query("SELECT SUM(n29) AS sum_n29 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn5=mysql_fetch_array($hn5);
$rn5=$dn5["sum_n29"];
$totaln5=$rn5/$r2*100;
$hn6=mysql_query("SELECT SUM(n36+n37) AS sum_n3637 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn6=mysql_fetch_array($hn6);
$rn6=$dn6["sum_n3637"];
$totaln6=$rn6/2/$r2*100;
$hn7=mysql_query("SELECT SUM(n43) AS sum_n43 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn7=mysql_fetch_array($hn7);
$rn7=$dn7["sum_n43"];
$totaln7=$rn7/$r2*100;
$hn8=mysql_query("SELECT SUM(n50) AS sum_n50 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn8=mysql_fetch_array($hn8);
$rn8=$dn8["sum_n50"];
$totaln8=$rn8/$r2*100;
$hn9=mysql_query("SELECT SUM(n57) AS sum_n57 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn9=mysql_fetch_array($hn9);
$rn9=$dn9["sum_n57"];
$totaln9=$rn9/$r2*100;
$hn10=mysql_query("SELECT SUM(n64) AS sum_n64 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn10=mysql_fetch_array($hn10);
$rn10=$dn10["sum_n64"];
$totaln10=$rn10/$r2*100;
$hn11=mysql_query("SELECT SUM(n71) AS sum_n71 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn11=mysql_fetch_array($hn11);
$rn11=$dn11["sum_n71"];
$totaln11=$rn11/$r2*100;
$hn12=mysql_query("SELECT SUM(n78) AS sum_n78 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn12=mysql_fetch_array($hn12);
$rn12=$dn12["sum_n78"];
$totaln12=$rn12/$r2*100;
$hn13=mysql_query("SELECT SUM(n85) AS sum_n85 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn13=mysql_fetch_array($hn13);
$rn13=$dn13["sum_n85"];
$totaln13=$rn13/$r2*100;
$hn14=mysql_query("SELECT SUM(n106) AS sum_n106 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn14=mysql_fetch_array($hn14);
$rn14=$dn14["sum_n106"];
$totaln14=$rn14/$r2*100;
$hn15=mysql_query("SELECT SUM(n141+n142) AS sum_n141142 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn15=mysql_fetch_array($hn15);
$rn15=$dn15["sum_n141142"];
$totaln15=$rn15/2/$r2*100;
$hn16=mysql_query("SELECT SUM(n148+n149) AS sum_n148149 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn16=mysql_fetch_array($hn16);
$rn16=$dn16["sum_n148149"];
$totaln16=$rn16/2/$r2*100;
$hn17=mysql_query("SELECT SUM(n162) AS sum_n162 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn17=mysql_fetch_array($hn17);
$rn17=$dn17["sum_n162"];
$totaln17=$rn17/$r2*100;
$hn18=mysql_query("SELECT SUM(n169+n170) AS sum_n169170 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn18=mysql_fetch_array($hn18);
$rn18=$dn18["sum_n169170"];
$totaln18=$rn18/2/$r2*100;
$hn19=mysql_query("SELECT SUM(n176) AS sum_n176 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn19=mysql_fetch_array($hn19);
$rn19=$dn19["sum_n176"];
$totaln19=$rn19/$r2*100;
$hn20=mysql_query("SELECT SUM(n218) AS sum_n218 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn20=mysql_fetch_array($hn20);
$rn20=$dn20["sum_n218"];
$totaln20=$rn20/$r2*100;
$hn21=mysql_query("SELECT SUM(n225) AS sum_n225 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn21=mysql_fetch_array($hn21);
$rn21=$dn21["sum_n225"];
$totaln21=$rn21/$r2*100;
$hn22=mysql_query("SELECT SUM(n288+n289) AS sum_n288289 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn22=mysql_fetch_array($hn22);
$rn22=$dn22["sum_n288289"];
$totaln22=$rn22/2/$r2*100;
$hn23=mysql_query("SELECT SUM(n295+n296) AS sum_n295296 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn23=mysql_fetch_array($hn23);
$rn23=$dn23["sum_n295296"];
$totaln23=$rn23/2/$r2*100;
$hn24=mysql_query("SELECT SUM(n302+n303) AS sum_n302303 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn24=mysql_fetch_array($hn24);
$rn24=$dn24["sum_n302303"];
$totaln24=$rn24/2/$r2*100;
$hn25=mysql_query("SELECT SUM(n309+n310) AS sum_n309310 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn25=mysql_fetch_array($hn25);
$rn25=$dn25["sum_n309310"];
$totaln25=$rn25/2/$r2*100;
$hn26=mysql_query("SELECT SUM(n316+n317) AS sum_n316317 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn26=mysql_fetch_array($hn26);
$rn26=$dn26["sum_n316317"];
$totaln26=$rn26/2/$r2*100;
$hn27=mysql_query("SELECT SUM(n323+n324) AS sum_n323324 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn27=mysql_fetch_array($hn27);
$rn27=$dn27["sum_n323324"];
$totaln27=$rn27/2/$r2*100;
$hn28=mysql_query("SELECT SUM(n330+n331) AS sum_n330331 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn28=mysql_fetch_array($hn28);
$rn28=$dn28["sum_n330331"];
$totaln28=$rn28/2/$r2*100;
$hn29=mysql_query("SELECT SUM(n337+n338) AS sum_n337338 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn29=mysql_fetch_array($hn29);
$rn29=$dn29["sum_n337338"];
$totaln29=$rn29/2/$r2*100;
$hn30=mysql_query("SELECT SUM(n344+n345) AS sum_n344345 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn30=mysql_fetch_array($hn30);
$rn30=$dn30["sum_n344345"];
$totaln30=$rn30/2/$r2*100;
$hn31=mysql_query("SELECT SUM(n351+n352) AS sum_n351352 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn31=mysql_fetch_array($hn31);
$rn31=$dn31["sum_n351352"];
$totaln31=$rn31/2/$r2*100;
$hn32=mysql_query("SELECT SUM(n358+n359) AS sum_n358359 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn32=mysql_fetch_array($hn32);
$rn32=$dn32["sum_n358359"];
$totaln32=$rn32/2/$r2*100;
$hn33=mysql_query("SELECT SUM(n365+n366) AS sum_n365366 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn33=mysql_fetch_array($hn33);
$rn33=$dn33["sum_n365366"];
$totaln33=$rn33/2/$r2*100;
$hn34=mysql_query("SELECT SUM(n372+n373) AS sum_n372373 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn34=mysql_fetch_array($hn34);
$rn34=$dn34["sum_n372373"];
$totaln34=$rn34/2/$r2*100;
$hn35=mysql_query("SELECT SUM(n386) AS sum_n386 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn35=mysql_fetch_array($hn35);
$rn35=$dn35["sum_n386"];
$totaln35=$rn35/$r2*100;
$hn36=mysql_query("SELECT SUM(n393+n394) AS sum_n393394 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn36=mysql_fetch_array($hn36);
$rn36=$dn36["sum_n393394"];
$totaln36=$rn36/2/$r2*100;
$hn37=mysql_query("SELECT SUM(n400+n401) AS sum_n400401 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn37=mysql_fetch_array($hn37);
$rn37=$dn37["sum_n400401"];
$totaln37=$rn37/2/$r2*100;
$hn38=mysql_query("SELECT SUM(n407) AS sum_n407 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn38=mysql_fetch_array($hn38);
$rn38=$dn38["sum_n407"];
$totaln38=$rn38/$r2*100;
$hn39=mysql_query("SELECT SUM(n414) AS sum_n414 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn39=mysql_fetch_array($hn39);
$rn39=$dn39["sum_n414"];
$totaln39=$rn39/$r2*100;
$hn40=mysql_query("SELECT SUM(n421) AS sum_n421 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn40=mysql_fetch_array($hn40);
$rn40=$dn40["sum_n421"];
$totaln40=$rn40/$r2*100;
$hn41=mysql_query("SELECT SUM(n428) AS sum_n428 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn41=mysql_fetch_array($hn41);
$rn41=$dn41["sum_n428"];
$totaln41=$rn41/$r2*100;
$hn42=mysql_query("SELECT SUM(n435) AS sum_n435 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn42=mysql_fetch_array($hn42);
$rn42=$dn42["sum_n435"];
$totaln42=$rn42/$r2*100;
$hn43=mysql_query("SELECT SUM(n456) AS sum_n456 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn43=mysql_fetch_array($hn43);
$rn43=$dn43["sum_n456"];
$totaln43=$rn43/$r2*100;
$hn44=mysql_query("SELECT SUM(n463) AS sum_n463 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn44=mysql_fetch_array($hn44);
$rn44=$dn44["sum_n463"];
$totaln44=$rn44/$r2*100;
$hn45=mysql_query("SELECT SUM(n477) AS sum_n477 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn45=mysql_fetch_array($hn45);
$rn45=$dn45["sum_n477"];
$totaln45=$rn45/$r2*100;
$hn46=mysql_query("SELECT SUM(n484) AS sum_n484 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn46=mysql_fetch_array($hn46);
$rn46=$dn46["sum_n484"];
$totaln46=$rn46/$r2*100;
$hn47=mysql_query("SELECT SUM(n491) AS sum_n491 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn47=mysql_fetch_array($hn47);
$rn47=$dn47["sum_n491"];
$totaln47=$rn47/$r2*100;
$hn48=mysql_query("SELECT SUM(n498) AS sum_n498 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn48=mysql_fetch_array($hn48);
$rn48=$dn48["sum_n498"];
$totaln48=$rn48/$r2*100;
$hn49=mysql_query("SELECT SUM(n519) AS sum_n519 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn49=mysql_fetch_array($hn49);
$rn49=$dn49["sum_n519"];
$totaln49=$rn49/$r2*100;
$hn50=mysql_query("SELECT SUM(n533) AS sum_n533 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn50=mysql_fetch_array($hn50);
$rn50=$dn50["sum_n533"];
$totaln50=$rn50/$r2*100;
$hn51=mysql_query("SELECT SUM(n540+n541) AS sum_n540541 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn51=mysql_fetch_array($hn51);
$rn51=$dn51["sum_n540541"];
$totaln51=$rn51/2/$r2*100;
$hn52=mysql_query("SELECT SUM(n547+n548) AS sum_n547548 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn52=mysql_fetch_array($hn52);
$rn52=$dn52["sum_n547548"];
$totaln52=$rn52/2/$r2*100;
$hn53=mysql_query("SELECT SUM(n561) AS sum_n561 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn53=mysql_fetch_array($hn53);
$rn53=$dn53["sum_n561"];
$totaln53=$rn53/$r2*100;
$hn54=mysql_query("SELECT SUM(n568) AS sum_n568 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn54=mysql_fetch_array($hn54);
$rn54=$dn54["sum_n568"];
$totaln54=$rn54/$r2*100;
$hn55=mysql_query("SELECT SUM(n575) AS sum_n575 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn55=mysql_fetch_array($hn55);
$rn55=$dn55["sum_n575"];
$totaln55=$rn55/$r2*100;
$hn56=mysql_query("SELECT SUM(n582) AS sum_n582 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn56=mysql_fetch_array($hn56);
$rn56=$dn56["sum_n582"];
$totaln56=$rn56/$r2*100;
$hn57=mysql_query("SELECT SUM(n589) AS sum_n589 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn57=mysql_fetch_array($hn57);
$rn57=$dn57["sum_n589"];
$totaln57=$rn57/$r2*100;
$hn58=mysql_query("SELECT SUM(n596) AS sum_n596 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn58=mysql_fetch_array($hn58);
$rn58=$dn58["sum_n596"];
$totaln58=$rn58/$r2*100;
$hn59=mysql_query("SELECT SUM(n603+n604) AS sum_n603604 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn59=mysql_fetch_array($hn59);
$rn59=$dn59["sum_n603604"];
$totaln59=$rn59/2/$r2*100;
$hn60=mysql_query("SELECT SUM(n610+n611) AS sum_n610611 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn60=mysql_fetch_array($hn60);
$rn60=$dn60["sum_n610611"];
$totaln60=$rn60/2/$r2*100;
$hn61=mysql_query("SELECT SUM(n631+n632) AS sum_n631632 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn61=mysql_fetch_array($hn61);
$rn61=$dn61["sum_n631632"];
$totaln61=$rn61/2/$r2*100;
$hn62=mysql_query("SELECT SUM(n673) AS sum_n673 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn62=mysql_fetch_array($hn62);
$rn62=$dn62["sum_n673"];
$totaln62=$rn62/$r2*100;
$hn63=mysql_query("SELECT SUM(n694) AS sum_n694 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn63=mysql_fetch_array($hn63);
$rn63=$dn63["sum_n694"];
$totaln63=$rn63/$r2*100;
$hn64=mysql_query("SELECT SUM(n813) AS sum_n813 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn64=mysql_fetch_array($hn64);
$rn64=$dn64["sum_n813"];
$totaln64=$rn64/$r2*100;
$hn65=mysql_query("SELECT SUM(n820) AS sum_n820 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn65=mysql_fetch_array($hn65);
$rn65=$dn65["sum_n820"];
$totaln65=$rn65/$r2*100;
$hn66=mysql_query("SELECT SUM(n827) AS sum_n827 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn66=mysql_fetch_array($hn66);
$rn66=$dn66["sum_n827"];
$totaln66=$rn66/$r2*100;
$hn67=mysql_query("SELECT SUM(n835) AS sum_n835 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn67=mysql_fetch_array($hn67);
$rn67=$dn67["sum_n835"];
$totaln67=$rn67/$r2*100;
$hn68=mysql_query("SELECT SUM(n842) AS sum_n842 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn68=mysql_fetch_array($hn68);
$rn68=$dn68["sum_n842"];
$totaln68=$rn68/$r2*100;
$hn69=mysql_query("SELECT SUM(n849) AS sum_n849 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn69=mysql_fetch_array($hn69);
$rn69=$dn69["sum_n849"];
$totaln69=$rn69/$r2*100;
$hn70=mysql_query("SELECT SUM(n856) AS sum_n856 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn70=mysql_fetch_array($hn70);
$rn70=$dn70["sum_n856"];
$totaln70=$rn70/$r2*100;
$hn71=mysql_query("SELECT SUM(n863) AS sum_n863 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn71=mysql_fetch_array($hn71);
$rn71=$dn71["sum_n863"];
$totaln71=$rn71/$r2*100;
$hn72=mysql_query("SELECT SUM(n876+n877) AS sum_n876877 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn72=mysql_fetch_array($hn72);
$rn72=$dn72["sum_n876877"];
$totaln72=$rn72/2/$r2*100;
$hn73=mysql_query("SELECT SUM(n884) AS sum_n884 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn73=mysql_fetch_array($hn73);
$rn73=$dn73["sum_n884"];
$totaln73=$rn73/$r2*100;
$hn74=mysql_query("SELECT SUM(n891) AS sum_n891 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn74=mysql_fetch_array($hn74);
$rn74=$dn74["sum_n891"];
$totaln74=$rn74/$r2*100;
$hn75=mysql_query("SELECT SUM(n898) AS sum_n898 FROM nilaicp WHERE tanggalp LIKE '%$tgl%'");
$dn75=mysql_fetch_array($hn75);
$rn75=$dn75["sum_n898"];
$totaln75=$rn75/$r2*100;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SIMRS v.0.2 | <?php echo $r1["tipe"]; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
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
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
		<!-- pesan feedback -->
	    <?php if ($_GET['status'] == "1") { ?><div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><center><h4><i class="icon fa fa-check"></i>Berhasil</h4>Data pasien telah didistribusikan</center></div>
	    <?php } else if ($_GET['status'] == "2") { ?><div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><center><h4><i class="icon fa fa-check"></i>Berhasil</h4>Data pasien telah diproses</center></div>
	    <?php } else if ($_GET['status'] == "3") { ?><div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><center><h4><i class="icon fa fa-ban"></i>Peringatan!</h4>Data pasien gagal diubah</center></div>
	    <?php } ?>
	    <!-- end pesan -->
        <section class="content-header">
          <h1>
            Rekap
            <small>clinical pathways</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Rekap clinical pathways</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
				  <h3 class="box-title">Data CP</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nomer</th>
						<th>Indikator Kepatuhan</th>
						<th>Persentase</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>A.</td>
						<td><b>Asesmen Klinik</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Asesmen Awal Medis (IGD dan IRJ)</td>
						<td><?php echo "$totaln1%"; ?></td>
                      </tr>
                      <tr>
                        <td>B.</td>
						<td><b>Asesmen Lanjutan</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Asesmen Awal Medis Rawat Inap</td>
						<td><?php echo "$totaln2%"; ?></td>
                      </tr>
                      <tr>
                        <td>2.</td>
						<td>Visite Dokter</td>
						<td><?php echo "$totaln3%"; ?></td>
                      </tr>
                      <tr>
                        <td>3.</td>
						<td>Asesmen Keperawatan Rawat Inap/ asesmen Lanjutan</td>
						<td><?php echo "$totaln4%"; ?></td>
                      </tr>
                      <tr>
                        <td>4.</td>
						<td>Rekonsiliasi Obat</td>
						<td><?php echo "$totaln5%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Visite Farmasi</td>
						<td><?php echo "$totaln6%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total1=($totaln2+$totaln3+$totaln4+$totaln5+$totaln6)/5; echo number_format($total1,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>C.</td>
						<td><b>Pemeriksaan Penunjang</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Hemoglobin</td>
						<td><?php echo "$totaln7%"; ?></td>
                      </tr>
                      <tr>
                        <td>2.</td>
						<td>Hematokrit</td>
						<td><?php echo "$totaln8%"; ?></td>
                      </tr>
                      <tr>
                        <td>3.</td>
						<td>Leukosit</td>
						<td><?php echo "$totaln9%"; ?></td>
                      </tr>
                      <tr>
                        <td>4.</td>
						<td>Trombosit</td>
						<td><?php echo "$totaln10%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Glukosa darah</td>
						<td><?php echo "$totaln11%"; ?></td>
                      </tr>
					  <tr>
                        <td>6.</td>
						<td>Urin lengkap</td>
						<td><?php echo "$totaln12%"; ?></td>
                      </tr>
					  <tr>
                        <td>7.</td>
						<td>HbsAg</td>
						<td><?php echo "$totaln13%"; ?></td>
                      </tr>
					  <tr>
                        <td>8.</td>
						<td>Kardiotografi</td>
						<td><?php echo "$totaln14%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total2=($totaln7+$totaln8+$totaln9+$totaln10+$totaln11+$totaln12+$totaln13+$totaln14)/8; echo number_format($total2,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>D.</td>
						<td><b>Diagnosis</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Diagnosis Medis</td>
						<td><?php echo "$totaln15%"; ?></td>
                      </tr>
                      <tr>
                        <td>2.</td>
						<td>Analisa Kebidanan</td>
						<td><?php echo "$totaln16%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total3=($totaln15+$totaln16)/2; echo number_format($total3,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>E.</td>
						<td><b>Intervensi Medis</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Observasi BJA dan His</td>
						<td><?php echo "$totaln17%"; ?></td>
                      </tr>
                      <tr>
                        <td>2.</td>
						<td>Pemeriksaan tanda vital</td>
						<td><?php echo "$totaln18%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Pemeriksaan dalam</td>
						<td><?php echo "$totaln19%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Manajemen kala II</td>
						<td><?php echo "$totaln20%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Manajemen kala III</td>
						<td><?php echo "$totaln21%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total4=($totaln17+$totaln18+$totaln19+$totaln20+$totaln21)/5; echo number_format($total4,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>F.</td>
						<td><b>Intervensi Kebidanan (Asuhan Awal Kebidanan)</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Informasikan hasil pemeriksaan dan asuhan yang akan diberikan</td>
						<td><?php echo "$totaln22%"; ?></td>
                      </tr>
                      <tr>
                        <td>2.</td>
						<td>Orientasikan pasien dan lingkungan</td>
						<td><?php echo "$totaln23%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Perhatikan kenyamanan/privasi</td>
						<td><?php echo "$totaln24%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Beri dukungan</td>
						<td><?php echo "$totaln25%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total5=($totaln22+$totaln23+$totaln24+$totaln25)/4; echo number_format($total5,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>G.</td>
						<td><b>KALA I</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Kaji nyeri dan respon nyeri</td>
						<td><?php echo "$totaln26%"; ?></td>
                      </tr>
                      <tr>
                        <td>2.</td>
						<td>Berikan metode mengurangi rasa nyeri/sakit menggunakan tehnik non analgetik</td>
						<td><?php echo "$totaln27%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Jaga kebersihan dan kenyamanan pasien</td>
						<td><?php echo "$totaln28%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Pantau tanda gejala infeksi</td>
						<td><?php echo "$totaln29%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Pasang Monitor untuk observasi tanda-tanda vital</td>
						<td><?php echo "$totaln30%"; ?></td>
                      </tr>
					  <tr>
                        <td>6.</td>
						<td>Observasi tekanan darah</td>
						<td><?php echo "$totaln31%"; ?></td>
                      </tr>
					  <tr>
                        <td>7.</td>
						<td>Observasi Suhu</td>
						<td><?php echo "$totaln32%"; ?></td>
                      </tr>
					  <tr>
                        <td>8.</td>
						<td>Observasi nadi dan pernafasan setiap jam</td>
						<td><?php echo "$totaln33%"; ?></td>
                      </tr>
					  <tr>
                        <td>9.</td>
						<td>Observasi kontraksi dan BJA</td>
						<td><?php echo "$totaln34%"; ?></td>
                      </tr>
					  <tr>
                        <td>10.</td>
						<td>Observasi pembukaan cerviks dan penurunan kepala setiap 4 jam atau jika ada indikasi ( ketuban pecah, gawat janin dan ibu ingin mengedan</td>
						<td><?php echo "$totaln35%"; ?></td>
                      </tr>
					  <tr>
                        <td>11.</td>
						<td>Berikan nutrisi dan cairan</td>
						<td><?php echo "$totaln36%"; ?></td>
                      </tr>
					  <tr>
                        <td>12.</td>
						<td>Monitoring intake output</td>
						<td><?php echo "$totaln37%"; ?></td>
                      </tr>
					  <tr>
                        <td>13.</td>
						<td>Anjurkan ibu buang air kecil setiap 2 jam</td>
						<td><?php echo "$totaln38%"; ?></td>
                      </tr>
					  <tr>
                        <td>14.</td>
						<td>Melakukan persiapan alat, bahan dan obat-obatan</td>
						<td><?php echo "$totaln39%"; ?></td>
                      </tr>
					  <tr>
                        <td>15.</td>
						<td>Bimbing ibu posisi persalinan dan cara mengedan yang benar</td>
						<td><?php echo "$totaln40%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total6=($totaln26+$totaln27+$totaln28+$totaln29+$totaln30+$totaln31+$totaln32+$totaln33+$totaln34+$totaln35+$totaln36+$totaln37+$totaln38+$totaln39+$totaln40)/15; echo number_format($total6,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>H.</td>
						<td><b>KALA II</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Pimpin ibu mengedan</td>
						<td><?php echo "$totaln41%"; ?></td>
                      </tr>
					  <tr>
                        <td>2.</td>
						<td>Lakukan pemeriksaan keadaan ibu dan DJJ setiap 5 menit</td>
						<td><?php echo "$totaln42%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Lahirkan bayi</td>
						<td><?php echo "$totaln43%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Beritahukan jenis kelamin bayi</td>
						<td><?php echo "$totaln44%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total7=($totaln41+$totaln42+$totaln43+$totaln44)/4; echo number_format($total7,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>I.</td>
						<td><b>KALA III</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Cek adanya bayi ke-2</td>
						<td><?php echo "$totaln45%"; ?></td>
                      </tr>
					  <tr>
                        <td>2.</td>
						<td>Suntik oksitosin 1 menit setelah bayi lahir</td>
						<td><?php echo "$totaln46%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Lakukan peneganngan tali pusat terkendali</td>
						<td><?php echo "$totaln47%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Lahirkan plasenta</td>
						<td><?php echo "$totaln48%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Lakukan masase uterus</td>
						<td><?php echo "$totaln49%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total8=($totaln45+$totaln46+$totaln47+$totaln48+$totaln49)/5; echo number_format($total8,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>I.</td>
						<td><b>KALA IV</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Cek kelengkapan plasenta dan selaput</td>
						<td><?php echo "$totaln50%"; ?></td>
                      </tr>
					  <tr>
                        <td>2.</td>
						<td>Evaluasi tinggi fundus uteri</td>
						<td><?php echo "$totaln51%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Lakukan evaluasi perdarahan dan luka perineum</td>
						<td><?php echo "$totaln52%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Mengkaji TTV, kontraksi, TFU, perdarahan dan kandung kemih setiap 15 menit dalam 1 jam pertama selanjutnya setiap 30 menit jam kedua, setelah 2 jam per 6 jam</td>
						<td><?php echo "$totaln53%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Berikan kenyamanan ibu dengan membersihkan ibu dan lingkungan</td>
						<td><?php echo "$totaln54%"; ?></td>
                      </tr>
					  <tr>
                        <td>6.</td>
						<td>Bantu mobilisasi dini bertahap ( miring kanan dan kiri, duduk, berdiri dan berjalan)</td>
						<td><?php echo "$totaln55%"; ?></td>
                      </tr>
					  <tr>
                        <td>7.</td>
						<td>Pantau Eliminasi (BAK 2 jam setelah persalinan)</td>
						<td><?php echo "$totaln56%"; ?></td>
                      </tr>
					  <tr>
                        <td>8.</td>
						<td>Lakukan dekontaminasi alat</td>
						<td><?php echo "$totaln57%"; ?></td>
                      </tr>
					  <tr>
                        <td>9.</td>
						<td>Lakukan dokumentasi</td>
						<td><?php echo "$totaln58%"; ?></td>
                      </tr>
					  <tr>
                        <td>10.</td>
						<td>Kolaborasi dengan dokter</td>
						<td><?php echo "$totaln59%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total9=($totaln50+$totaln51+$totaln52+$totaln53+$totaln54+$totaln55+$totaln56+$totaln57+$totaln58+$totaln59)/10; echo number_format($total9,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>J.</td>
						<td><b>Terapi Obat-Obatan</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Antibiotik</td>
						<td><?php echo "$totaln60%"; ?></td>
                      </tr>
					  <tr>
                        <td>2.</td>
						<td>Analgetika</td>
						<td><?php echo "$totaln61%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Sulfas ferosus 10 tablet</td>
						<td><?php echo "$totaln62%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total10=($totaln60+$totaln61+$totaln62)/3; echo number_format($total10,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>K.</td>
						<td><b>Nutrisi</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Asesmen Gizi</td>
						<td><?php echo "$totaln63%"; ?></td>
                      </tr>
					  <tr>
                        <td>L.</td>
						<td><b>Edukasi Terintegrasi</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Edukasi informasi Medis (penjelasan diagnosa, terapi dan infomend consent)</td>
						<td><?php echo "$totaln64%"; ?></td>
                      </tr>
					  <tr>
                        <td>M.</td>
						<td><b>Edukasi Kebidanan</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Kebutuhan persalinan</td>
						<td><?php echo "$totaln65%"; ?></td>
                      </tr>
					  <tr>
                        <td>2.</td>
						<td>Tanda bahaya persalinan</td>
						<td><?php echo "$totaln66%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Tanda bahaya ibu nifas</td>
						<td><?php echo "$totaln67%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Mobilisasi</td>
						<td><?php echo "$totaln68%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Eliminasi</td>
						<td><?php echo "$totaln69%"; ?></td>
                      </tr>
					  <tr>
                        <td>6.</td>
						<td>Perawatan luka jahitan</td>
						<td><?php echo "$totaln70%"; ?></td>
                      </tr>
					  <tr>
                        <td>7.</td>
						<td>Cara menyusui</td>
						<td><?php echo "$totaln71%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total11=($totaln65+$totaln66+$totaln66+$totaln67+$totaln68+$totaln69+$totaln70)/7; echo number_format($total11,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>N.</td>
						<td><b>Edukasi Farmasi</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Informasi obat</td>
						<td><?php echo "$totaln72%"; ?></td>
                      </tr>
					  <tr>
                        <td>O.</td>
						<td><b>Rencana Pemulangan Pasien</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Edukasi selama perawatan</td>
						<td><?php echo "$totaln73%"; ?></td>
                      </tr>
					  <tr>
                        <td>2.</td>
						<td>Edukasi Perawatan di rumah</td>
						<td><?php echo "$totaln74%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Persiapan pemulangan</td>
						<td><?php echo "$totaln75%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total12=($totaln73+$totaln74+$totaln75)/3; echo number_format($total12,2)."%"; ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
	  <!-- static footer -->
	  <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 0.2 build Juni
        </div>
        <strong>Copyright &copy; 2016 <a href="http://rskiakotabandung.com">Divisi IT RSKIA Kota Bandung</a>.</strong> All rights reserved.
      </footer><!-- /.static footer -->
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
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $('#example2').dataTable({
          "bPaginate": false,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": false,
          "bInfo": false,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>
