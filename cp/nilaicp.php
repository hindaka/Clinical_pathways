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
$id_clinicp=$_GET["id"];
//mysql data
$h2=mysql_query("SELECT * FROM nilaicp WHERE id_clinicp='$id_clinicp'");
$r2=mysql_fetch_array($h2);
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
	  <header class="main-header">
        <a href="index.php" class="logo"><b>SIMRS</b>v.0.1</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <div class="pull-left">
                            <img src="../dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href="#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo $r1["nama"]; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $r1["nama"]; ?> - <?php echo $r1["tipe"]; ?>
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="../logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header><!-- ./static header -->
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
						<td><?php $total1=$r2["n1"]*100; echo "$total1%"; ?></td>
                      </tr>
                      <tr>
                        <td>B.</td>
						<td><b>Asesmen Lanjutan</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Asesmen Awal Medis Rawat Inap</td>
						<td><?php $total2=$r2["n8"]*100; echo "$total2%"; ?></td>
                      </tr>
                      <tr>
                        <td>2.</td>
						<td>Visite Dokter</td>
						<td><?php $total3=($r2["n15"]+$r2["n16"])/2*100; echo "$total3%"; ?></td>
                      </tr>
                      <tr>
                        <td>3.</td>
						<td>Asesmen Keperawatan Rawat Inap/ asesmen Lanjutan</td>
						<td><?php $total4=($r2["n22"]+$r2["n23"])/2*100; echo "$total4%"; ?></td>
                      </tr>
                      <tr>
                        <td>4.</td>
						<td>Rekonsiliasi Obat</td>
						<td><?php $total5=$r2["n29"]*100; echo "$total5%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Visite Farmasi</td>
						<td><?php $total6=($r2["n36"]+$r2["n37"])/2*100; echo "$total6%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total7=($r2["n8"]+$r2["n15"]+$r2["n16"]+$r2["n22"]+$r2["n23"]+$r2["n29"]+$r2["n29"]+$r2["n36"]+$r2["n37"])/9*100; echo number_format($total7,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>C.</td>
						<td><b>Pemeriksaan Penunjang</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Hemoglobin</td>
						<td><?php $total8=$r2["n43"]*100; echo "$total8%"; ?></td>
                      </tr>
                      <tr>
                        <td>2.</td>
						<td>Hematokrit</td>
						<td><?php $total9=$r2["n50"]*100; echo "$total9%"; ?></td>
                      </tr>
                      <tr>
                        <td>3.</td>
						<td>Leukosit</td>
						<td><?php $total10=$r2["n57"]*100; echo "$total10%"; ?></td>
                      </tr>
                      <tr>
                        <td>4.</td>
						<td>Trombosit</td>
						<td><?php $total11=$r2["n64"]*100; echo "$total11%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Glukosa darah</td>
						<td><?php $total12=$r2["n71"]*100; echo "$total12%"; ?></td>
                      </tr>
					  <tr>
                        <td>6.</td>
						<td>Urin lengkap</td>
						<td><?php $total13=$r2["n78"]*100; echo "$total13%"; ?></td>
                      </tr>
					  <tr>
                        <td>7.</td>
						<td>HbsAg</td>
						<td><?php $total14=$r2["n85"]*100; echo "$total14%"; ?></td>
                      </tr>
					  <tr>
                        <td>8.</td>
						<td>Kardiotografi</td>
						<td><?php $total15=$r2["n106"]*100; echo "$total15%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total16=($r2["n43"]+$r2["n50"]+$r2["n57"]+$r2["n64"]+$r2["n71"]+$r2["n78"]+$r2["n85"]+$r2["n106"])/8*100; echo number_format($total16,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>D.</td>
						<td><b>Diagnosis</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Diagnosis Medis</td>
						<td><?php $total17=($r2["n141"]+$r2["n142"])/2*100; echo "$total17%"; ?></td>
                      </tr>
                      <tr>
                        <td>2.</td>
						<td>Analisa Kebidanan</td>
						<td><?php $total18=($r2["n148"]+$r2["n149"])/2*100; echo "$total8%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total19=($r2["n141"]+$r2["n142"]+$r2["n148"]+$r2["n149"])/4*100; echo number_format($total19,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>E.</td>
						<td><b>Intervensi Medis</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Observasi BJA dan His</td>
						<td><?php $total20=$r2["n162"]*100; echo "$total20%"; ?></td>
                      </tr>
                      <tr>
                        <td>2.</td>
						<td>Pemeriksaan tanda vital</td>
						<td><?php $total21=($r2["n169"]+$r2["n170"])/2*100; echo "$total21%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Pemeriksaan dalam</td>
						<td><?php $total22=$r2["n176"]*100; echo "$total22%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Manajemen kala II</td>
						<td><?php $total23=$r2["n218"]*100; echo "$total23%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Manajemen kala III</td>
						<td><?php $total24=$r2["n225"]*100; echo "$total24%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total25=($r2["n162"]+$r2["n169"]+$r2["n170"]+$r2["n176"]+$r2["n218"]+$r2["n225"])/6*100; echo number_format($total25,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>F.</td>
						<td><b>Intervensi Kebidanan (Asuhan Awal Kebidanan)</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Informasikan hasil pemeriksaan dan asuhan yang akan diberikan</td>
						<td><?php $total26=($r2["n288"]+$r2["n289"])/2*100; echo "$total26%"; ?></td>
                      </tr>
                      <tr>
                        <td>2.</td>
						<td>Orientasikan pasien dan lingkungan</td>
						<td><?php $total27=($r2["n295"]+$r2["n296"])/2*100; echo "$total27%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Perhatikan kenyamanan/privasi</td>
						<td><?php $total28=($r2["n302"]+$r2["n303"])/2*100; echo "$total28%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Beri dukungan</td>
						<td><?php $total29=($r2["n309"]+$r2["n310"])/2*100; echo "$total29%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total30=($r2["n288"]+$r2["n289"]+$r2["n295"]+$r2["n296"]+$r2["n302"]+$r2["n303"]+$r2["n309"]+$r2["n310"])/8*100; echo number_format($total30,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>G.</td>
						<td><b>KALA I</b></td>
						<td></td>
                      </tr>
                      <tr>
                        <td>1.</td>
						<td>Kaji nyeri dan respon nyeri</td>
						<td><?php $total31=($r2["n316"]+$r2["n317"])/2*100; echo "$total31%"; ?></td>
                      </tr>
                      <tr>
                        <td>2.</td>
						<td>Berikan metode mengurangi rasa nyeri/sakit menggunakan tehnik non analgetik</td>
						<td><?php $total32=($r2["n323"]+$r2["n324"])/2*100; echo "$total32%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Jaga kebersihan dan kenyamanan pasien</td>
						<td><?php $total33=($r2["n330"]+$r2["n331"])/2*100; echo "$total33%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Pantau tanda gejala infeksi</td>
						<td><?php $total34=($r2["n337"]+$r2["n338"])/2*100; echo "$total34%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Pasang Monitor untuk observasi tanda-tanda vital</td>
						<td><?php $total35=($r2["n344"]+$r2["n345"])/2*100; echo "$total35%"; ?></td>
                      </tr>
					  <tr>
                        <td>6.</td>
						<td>Observasi tekanan darah</td>
						<td><?php $total36=($r2["n351"]+$r2["n352"])/2*100; echo "$total36%"; ?></td>
                      </tr>
					  <tr>
                        <td>7.</td>
						<td>Observasi Suhu</td>
						<td><?php $total37=($r2["n358"]+$r2["n359"])/2*100; echo "$total37%"; ?></td>
                      </tr>
					  <tr>
                        <td>8.</td>
						<td>Observasi nadi dan pernafasan setiap jam</td>
						<td><?php $total38=($r2["n365"]+$r2["n366"])/2*100; echo "$total38%"; ?></td>
                      </tr>
					  <tr>
                        <td>9.</td>
						<td>Observasi kontraksi dan BJA</td>
						<td><?php $total39=($r2["n372"]+$r2["n373"])/2*100; echo "$total39%"; ?></td>
                      </tr>
					  <tr>
                        <td>10.</td>
						<td>Observasi pembukaan cerviks dan penurunan kepala setiap 4 jam atau jika ada indikasi ( ketuban pecah, gawat janin dan ibu ingin mengedan</td>
						<td><?php $total40=$r2["n386"]*100; echo "$total40%"; ?></td>
                      </tr>
					  <tr>
                        <td>11.</td>
						<td>Berikan nutrisi dan cairan</td>
						<td><?php $total41=($r2["n393"]+$r2["n394"])/2*100; echo "$total41%"; ?></td>
                      </tr>
					  <tr>
                        <td>12.</td>
						<td>Monitoring intake output</td>
						<td><?php $total42=($r2["n400"]+$r2["n401"])/2*100; echo "$total42%"; ?></td>
                      </tr>
					  <tr>
                        <td>13.</td>
						<td>Anjurkan ibu buang air kecil setiap 2 jam</td>
						<td><?php $total43=$r2["n407"]*100; echo "$total43%"; ?></td>
                      </tr>
					  <tr>
                        <td>14.</td>
						<td>Melakukan persiapan alat, bahan dan obat-obatan</td>
						<td><?php $total44=$r2["n414"]*100; echo "$total44%"; ?></td>
                      </tr>
					  <tr>
                        <td>15.</td>
						<td>Bimbing ibu posisi persalinan dan cara mengedan yang benar</td>
						<td><?php $total45=$r2["n421"]*100; echo "$total45%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total46=($r2["n316"]+$r2["n317"]+$r2["n323"]+$r2["n324"]+$r2["n330"]+$r2["n331"]+$r2["n337"]+$r2["n338"]+$r2["n344"]+$r2["n345"]+$r2["n351"]+$r2["n352"]+$r2["n358"]+$r2["n359"]+$r2["n365"]+$r2["n366"]+$r2["n372"]+$r2["n373"]+$r2["n386"]+$r2["n393"]+$r2["n394"]+$r2["n400"]+$r2["n401"]+$r2["n407"]+$r2["n414"]+$r2["n421"])/26*100; echo number_format($total46,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>H.</td>
						<td><b>KALA II</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Pimpin ibu mengedan</td>
						<td><?php $total47=$r2["n428"]*100; echo "$total47%"; ?></td>
                      </tr>
					  <tr>
                        <td>2.</td>
						<td>Lakukan pemeriksaan keadaan ibu dan DJJ setiap 5 menit</td>
						<td><?php $total48=$r2["n435"]*100; echo "$total48%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Lahirkan bayi</td>
						<td><?php $total49=$r2["n456"]*100; echo "$total49%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Beritahukan jenis kelamin bayi</td>
						<td><?php $total50=$r2["n463"]*100; echo "$total50%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total51=($r2["n428"]+$r2["n435"]+$r2["n456"]+$r2["n463"])/4*100; echo number_format($total51,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>I.</td>
						<td><b>KALA III</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Cek adanya bayi ke-2</td>
						<td><?php $total52=$r2["n477"]*100; echo "$total52%"; ?></td>
                      </tr>
					  <tr>
                        <td>2.</td>
						<td>Suntik oksitosin 1 menit setelah bayi lahir</td>
						<td><?php $total53=$r2["n484"]*100; echo "$total53%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Lakukan peneganngan tali pusat terkendali</td>
						<td><?php $total54=$r2["n491"]*100; echo "$total54%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Lahirkan plasenta</td>
						<td><?php $total55=$r2["n498"]*100; echo "$total55%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Lakukan masase uterus</td>
						<td><?php $total56=$r2["n519"]*100; echo "$total56%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total57=($r2["n477"]+$r2["n484"]+$r2["n491"]+$r2["n498"]+$r2["n519"])/5*100; echo number_format($total57,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>I.</td>
						<td><b>KALA IV</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Cek kelengkapan plasenta dan selaput</td>
						<td><?php $total58=$r2["n533"]*100; echo "$total58%"; ?></td>
                      </tr>
					  <tr>
                        <td>2.</td>
						<td>Evaluasi tinggi fundus uteri</td>
						<td><?php $total59=($r2["n540"]+$r2["n541"])/2*100; echo "$total59%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Lakukan evaluasi perdarahan dan luka perineum</td>
						<td><?php $total60=($r2["n547"]+$r2["n548"])/2*100; echo "$total60%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Mengkaji TTV, kontraksi, TFU, perdarahan dan kandung kemih setiap 15 menit dalam 1 jam pertama selanjutnya setiap 30 menit jam kedua, setelah 2 jam per 6 jam</td>
						<td><?php $total61=$r2["n561"]*100; echo "$total61%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Berikan kenyamanan ibu dengan membersihkan ibu dan lingkungan</td>
						<td><?php $total62=$r2["n568"]*100; echo "$total62%"; ?></td>
                      </tr>
					  <tr>
                        <td>6.</td>
						<td>Bantu mobilisasi dini bertahap ( miring kanan dan kiri, duduk, berdiri dan berjalan)</td>
						<td><?php $total63=$r2["n575"]*100; echo "$total63%"; ?></td>
                      </tr>
					  <tr>
                        <td>7.</td>
						<td>Pantau Eliminasi (BAK 2 jam setelah persalinan)</td>
						<td><?php $total64=$r2["n582"]*100; echo "$total64%"; ?></td>
                      </tr>
					  <tr>
                        <td>8.</td>
						<td>Lakukan dekontaminasi alat</td>
						<td><?php $total65=$r2["n589"]*100; echo "$total65%"; ?></td>
                      </tr>
					  <tr>
                        <td>9.</td>
						<td>Lakukan dokumentasi</td>
						<td><?php $total66=$r2["n596"]*100; echo "$total66%"; ?></td>
                      </tr>
					  <tr>
                        <td>10.</td>
						<td>Kolaborasi dengan dokter</td>
						<td><?php $total67=($r2["n603"]+$r2["n604"])/2*100; echo "$total67%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total68=($r2["n533"]+$r2["n540"]+$r2["n541"]+$r2["n547"]+$r2["n548"]+$r2["n561"]+$r2["n568"]+$r2["n575"]+$r2["n582"]+$r2["n589"]+$r2["n596"]+$r2["n603"]+$r2["n604"])/13*100; echo number_format($total68,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>J.</td>
						<td><b>Terapi Obat-Obatan</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Antibiotik</td>
						<td><?php $total69=($r2["n610"]+$r2["n611"])/2*100; echo "$total69%"; ?></td>
                      </tr>
					  <tr>
                        <td>2.</td>
						<td>Analgetika</td>
						<td><?php $total70=($r2["n631"]+$r2["n632"])/2*100; echo "$total70%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Sulfas ferosus 10 tablet</td>
						<td><?php $total71=$r2["n673"]*100; echo "$total71%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total72=($r2["n610"]+$r2["n611"]+$r2["n631"]+$r2["n632"]+$r2["n673"])/5*100; echo number_format($total72,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>K.</td>
						<td><b>Nutrisi</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Asesmen Gizi</td>
						<td><?php $total73=$r2["n694"]*100; echo "$total73%"; ?></td>
                      </tr>
					  <tr>
                        <td>L.</td>
						<td><b>Edukasi Terintegrasi</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Edukasi informasi Medis (penjelasan diagnosa, terapi dan infomend consent)</td>
						<td><?php $total74=$r2["n813"]*100; echo "$total74%"; ?></td>
                      </tr>
					  <tr>
                        <td>M.</td>
						<td><b>Edukasi Kebidanan</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Kebutuhan persalinan</td>
						<td><?php $total75=$r2["n820"]*100; echo "$total75%"; ?></td>
                      </tr>
					  <tr>
                        <td>2.</td>
						<td>Tanda bahaya persalinan</td>
						<td><?php $total76=$r2["n827"]*100; echo "$total76%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Tanda bahaya ibu nifas</td>
						<td><?php $total77=$r2["n835"]*100; echo "$total77%"; ?></td>
                      </tr>
					  <tr>
                        <td>4.</td>
						<td>Mobilisasi</td>
						<td><?php $total78=$r2["n842"]*100; echo "$total78%"; ?></td>
                      </tr>
					  <tr>
                        <td>5.</td>
						<td>Eliminasi</td>
						<td><?php $total79=$r2["n849"]*100; echo "$total79%"; ?></td>
                      </tr>
					  <tr>
                        <td>6.</td>
						<td>Perawatan luka jahitan</td>
						<td><?php $total80=$r2["n856"]*100; echo "$total80%"; ?></td>
                      </tr>
					  <tr>
                        <td>7.</td>
						<td>Cara menyusui</td>
						<td><?php $total81=$r2["n863"]*100; echo "$total81%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total82=($r2["n820"]+$r2["n827"]+$r2["n835"]+$r2["n842"]+$r2["n849"]+$r2["n856"]+$r2["n863"])/7*100; echo number_format($total82,2)."%"; ?></td>
                      </tr>
					  <tr>
                        <td>N.</td>
						<td><b>Edukasi Farmasi</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Informasi obat</td>
						<td><?php $total83=($r2["n876"]+$r2["n877"])/2*100; echo "$total83%"; ?></td>
                      </tr>
					  <tr>
                        <td>O.</td>
						<td><b>Rencana Pemulangan Pasien</b></td>
						<td></td>
                      </tr>
					  <tr>
                        <td>1.</td>
						<td>Edukasi selama perawatan</td>
						<td><?php $total84=$r2["n884"]*100; echo "$total84%"; ?></td>
                      </tr>
					  <tr>
                        <td>2.</td>
						<td>Edukasi Perawatan di rumah</td>
						<td><?php $total85=$r2["n891"]*100; echo "$total85%"; ?></td>
                      </tr>
					  <tr>
                        <td>3.</td>
						<td>Persiapan pemulangan</td>
						<td><?php $total86=$r2["n898"]*100; echo "$total86%"; ?></td>
                      </tr>
					  <tr>
                        <td></td>
						<td></td>
						<td><?php $total87=($r2["n884"]+$r2["n891"]+$r2["n898"])/3*100; echo number_format($total87,2)."%"; ?></td>
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
