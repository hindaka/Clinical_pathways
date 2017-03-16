<?php
ob_start();
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
//mysql data
$get_data_form = "SELECT * FROM form_input_cp WHERE cp_tipe='SC' ORDER BY created_at";
$result = mysql_query($get_data_form);
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
	    <?php if ($_GET['status'] == "1") { ?><div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><center><h4><i class="icon fa fa-check"></i>Berhasil</h4>Data CP telah disimpan</center></div>
	    <?php } else if ($_GET['status'] == "2") { ?><div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><center><h4><i class="icon fa fa-check"></i>Berhasil</h4>Data pasien telah diproses</center></div>
	    <?php } else if ($_GET['status'] == "3") { ?><div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><center><h4><i class="icon fa fa-ban"></i>Peringatan!</h4>Data pasien gagal diubah</center></div>
	    <?php } ?>
	    <!-- end pesan -->
        <section class="content-header">
          <h1>
            Form Asesmen
            <small>Sectio Cesarea</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Form Asesmen SC</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- form tambah -->
          <div id="new_form" class="row" style="display:none;">
            <form action="form_sc_save.php" method="post">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
                  <h3 class="box-title">Tambah Data Form Asesmen SC</h3>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label for="nama_form">Nama Form</label>
                    <input type="text" class="form-control" id="nama_form" name="nama_form" placeholder="Masukan Nama Form">
                  </div>
                  <div class="form-group">
                    <label for="rev">Revisi</label>
                    <input type="number" class="form-control" id="rev" name="rev" placeholder="revisi" min="0">
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                  <button id="close_form" type="button" name="simpan" class="btn btn-danger"><i class="fa fa-close"></i> Batal</button>
                </div>
              </div>
            </div>
            </form>
          </div>
          <!-- end form tambah -->
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
				              <h3 class="box-title">Data Form Asesmen SC</h3>
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
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama form</th>
                        <th>Rev</th>
                        <th>tanggal dibuat</th>
                        <th>perubahan terakhir</th>
                        <th>status</th>
                        <th>aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $num =1;
                        while($data = mysql_fetch_assoc($result)){
                          $format_date = date('d-M-Y',strtotime($data['created_at']));
                          $updated = date('d-M-Y H:i:s',strtotime($data['updated_at']));
                          echo "<tr>
                                  <td>".$num."</td>
                                  <td>".$data['nama_form']."</td>
                                  <td>".$data['rev']."</td>
                                  <td>".$format_date."</td>
                                  <td>".$updated."</td>
																	<td>";
																		if($data['status']=='non-aktif'){
																			echo " <a href=\"form_sc_aktifasi.php?f=".$data['id_form']."&s=".$data['status']."\" class=\"btn btn-sm btn-warning\"><i class=\"fa fa-arrow-circle-o-down\"></i> non-aktif</a>";
																		} else{
																			echo " <a href=\"form_sc_aktifasi.php?f=".$data['id_form']."&s=".$data['status']."\" class=\"btn btn-sm btn-success\"><i class=\"fa fa-check-square\"></i> Aktif</a>";
																		}
													echo"		</td>
                                  <td>
                                    <a href=\"form_sc_detail.php?f=".$data['id_form']."\" class=\"btn btn-sm btn-primary\"><i class=\"fa fa-play-circle\"></i> Detail</a>
                                  </td>
                                </tr>";
                            $num++;
                        }
                      ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button id="open_form" type="button" name="tambah_data" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Data</button>
                </div>
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
        <strong>Copyright &copy; 2016-<?php echo date('Y'); ?> <a href="http://rskiakotabandung.com">Divisi IT RSKIA Kota Bandung</a>.</strong> All rights reserved.
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
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
        $("#open_form").click(function(){
          $('#new_form').fadeIn( "slow" );
        });
        $("#close_form").click(function(){
          $('#new_form').fadeOut( "slow" );
        });
      });
    </script>

  </body>
</html>
