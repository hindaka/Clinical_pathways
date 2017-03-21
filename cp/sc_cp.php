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
if($namauser=='kasir'){
	$sql = "SELECT a.created_at,a.id_asesmen,rp.nomedrek,rp.nama as 'nama_pasien',dr.id_drcp,p.nama as 'nama_dokter',a.biaya_riil,a.cara_bayar FROM `asesmen` a INNER JOIN ok o ON(o.id_ok=a.id_ok) INNER JOIN registerpasien rp ON(rp.id_pasien= o.id_register) INNER JOIN drclinical dr ON(dr.id_drcp=a.id_drcp) INNER JOIN pegawai p ON(p.id_pegawai= dr.id_pegawai) WHERE a.biaya_riil=0";
	$data_kasir = mysql_query($sql);
}elseif($namauser=='jkn'){
	$sql = "SELECT a.created_at,a.id_asesmen,rp.nomedrek,rp.nama as 'nama_pasien',dr.id_drcp,p.nama as 'nama_dokter',a.biaya_klaim FROM `asesmen` a INNER JOIN ok o ON(o.id_ok=a.id_ok) INNER JOIN registerpasien rp ON(rp.id_pasien= o.id_register) INNER JOIN drclinical dr ON(dr.id_drcp=a.id_drcp) INNER JOIN pegawai p ON(p.id_pegawai= dr.id_pegawai) WHERE a.biaya_klaim=0";
	$data_jkn = mysql_query($sql);
}else{

}
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
            Clinical Pathway
            <small>Sectio Cesarea</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li>CP</li>
            <li class="active">Sectio Cesarea</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
				<?php
				if($namauser=='kasir'){ ?>
					<!-- Biaya box -->
					<div class="box">
						<div class="box-header">
							<i class="fa fa-user"></i>
							<h3 class="box-title">Data CP SC</h3>
						</div><!-- /.box-header -->
						<!-- display message  -->
						<?php if(!empty($_SESSION['sukses'])==true){
							echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											<span class="sr-only">Close</span>
										</button>
										'.$_SESSION['msg'].'
									</div>';
									unset($_SESSION['sukses']);
									unset($_SESSION['msg']);

						}
						if(!empty($_SESSION['error'])==true){
							echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											<span class="sr-only">Close</span>
										</button>
										'.$_SESSION['msg'].'
									</div>';
									unset($_SESSION['error']);
									unset($_SESSION['msg']);
						}
						?>
						<!-- end display message -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>no</th>
											<th>Tanggal Post</th>
											<th>Pasien</th>
											<th>Dokter</th>
											<th>Cara pembayaran</th>
											<th>Biaya Riil</th>
											<th>aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if(mysql_num_rows($data_kasir)>0){
											$urutan = 0;
											while($kasir = mysql_fetch_array($data_kasir)){
												$f_date = date('d-M-Y',strtotime($kasir['created_at']));
											echo "<tr>
														<td>".++$urutan."</td>
														<td>".$f_date."</td>
														<td>".$kasir['nama_pasien']."</td>
														<td>".$kasir['nama_dokter']."</td>
														<td>".$kasir['cara_bayar']."</td>
														<td>Rp ".number_format($kasir['biaya_riil'],2,',','.')."</td>
														<td><a href='sc_sectio_ksr.php?f=".$kasir['id_asesmen']."&n=".$kasir['nomedrek']."' class='btn btn-sm btn-primary'><i class='fa fa-pencil'></i> Detail</a></td>
													</tr>";
											}
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
				</div>
					<!-- end biaya box -->
				<?php }elseif($namauser=='jkn'){ ?>
					<!-- Biaya box -->
					<div class="box">
						<div class="box-header">
							<i class="fa fa-user"></i>
							<h3 class="box-title">Data CP SC</h3>
						</div><!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>no</th>
											<th>Tanggal Post</th>
											<th>Pasien</th>
											<th>Dokter</th>
											<th>Biaya Klaim</th>
											<th>aksi</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if(mysql_num_rows($data_jkn)>0){
											$urutan = 0;
											while($jkn = mysql_fetch_array($data_jkn)){
												$f_date = date('d-M-Y',strtotime($jkn['created_at']));
											echo "<tr>
														<td>".++$urutan."</td>
														<td>".$f_date."</td>
														<td>".$jkn['nama_pasien']."</td>
														<td>".$jkn['nama_dokter']."</td>
														<td>Rp ".number_format($jkn['biaya_klaim'],2,',','.')."</td>
														<td><a href='sc_sectio_jkn.php?f=".$jkn['id_asesmen']."&n=".$jkn['nomedrek']."' class='btn btn-sm btn-primary'><i class='fa fa-pencil'></i> Detail</a></td>
													</tr>";
											}
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
				</div>
					<!-- end biaya box -->
				<?php }else{ ?>
					<div class="box">
                <div class="box-header">
                  <i class="fa fa-user"></i>
				  <h3 class="box-title">Input No. RM</h3>
                </div><!-- /.box-header -->
				<!-- form start -->
                <form role="form" action="sc_sectio.php?id=1" method="post">
                  <div class="box-body">
					<div class="form-group">
                      <label for="nomedrek">Input No. RM</label>
                      <input type="text" class="form-control" id="nomedrek" name="nomedrek" placeholder="No. Rekam Medis" required autofocus>
                    </div>
                  </div><!-- /.box-body -->

				  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Kirim</button>
                  </div>
				</form>
			  </div>
				<?php } ?>
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
		$(function () {
			$("#example1").dataTable();
			$('#example2').dataTable({
				"bPaginate": true,
				"bLengthChange": false,
				"bFilter": false,
				"bSort": true,
				"bInfo": true,
				"bAutoWidth": false
			});
		});
      //Flat red color scheme for iCheck
      $('input[type="checkbox"].flat-blue').iCheck({
        checkboxClass: 'icheckbox_flat-blue'
      });
    </script>

  </body>
</html>
