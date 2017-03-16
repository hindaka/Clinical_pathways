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
//get data from address url
$id_form = isset($_GET['f']) ? $_GET['f'] : '';
$id_detail = isset($_GET['d']) ? $_GET['d'] : '';
//get data detail form
$detail_sql = "SELECT * FROM form_detail_cp WHERE id_detail_form=$id_detail LIMIT 1";
$get_detail = mysql_query($detail_sql);
$detail = mysql_fetch_array($get_detail);
//get data
$get_penilaian = "SELECT * FROM penilaian ORDER BY id_penilaian";
$data_penilaian = mysql_query($get_penilaian);

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
    <style>
    #rad_group{
      display: none;
    }
		.red{
			background-color: red;
		}
		.yellow{
			background-color: yellow;
		}
    </style>
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
            <?php echo $desc['nama_form']; ?>
            <small><?php echo "Rev.".$desc['rev']; ?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $desc['nama_form']." Rev.".$desc['rev']; ?></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- form tambah -->
          <div id="new_form" class="row">
            <form action="form_sc_detail_up_save.php" method="post">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
                  <h3 class="box-title">Tambah Data <?php echo $desc['nama_form']." Rev.".$desc['rev'] ?></h3>
                </div>
                <div class="box-body">
                  <div class="row">
                    <div class="col-xs-3">
                      <div class="form-group">
                        <label for="pertanyaan">Pertanyaan</label>
                        <select class="form-control" name="pemeriksaan" required>
                          <?php
                            while($data_p = mysql_fetch_array($data_penilaian)){
                              if($data_p['id_penilaian']==$detail['id_penilaian']){
                                  echo "<option value='".$data_p['id_penilaian']."' selected>".$data_p['nama_penilaian']."</option>";
                              }else{
                                  echo "<option value='".$data_p['id_penilaian']."'>".$data_p['nama_penilaian']."</option>";
                              }
                            }
                           ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="pertanyaan">Header/sub header</label>
                        <select class="form-control" name="menu" id="head_menu" required>
                          <?php
                            if($detail['head_menu'] == 'y'){
                              echo "<option value=\"y\" selected>ya</option>
                                    <option value=\"n\">tidak</option>";
                            }else{
                              echo "<option value=\"y\">ya</option>
                                    <option value=\"n\" selected>tidak</option>";
                            }
                          ?>
                        </select>
												<input type="hidden" name="id_form" value="<?php echo $id_form; ?>">
                        <input type="hidden" name="id_detail_form" value="<?php echo $id_detail; ?>">
                      </div>
                    </div>
                      <div class="col-xs-1">
                        <div class="form-group">
                          <label for="checkHari">h1</label>
                          <?php
                            if($detail['h1']=='r'){ //kondisi red
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h1\" id=\"optionsRadios1\" value=\"r\" checked>
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h1\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h1\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else if($detail['h1']=='y'){ //kondisi yellow
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h1\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h1\" id=\"optionsRadios2\" value=\"y\" checked>
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h1\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else{ //kondisi no
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h1\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h1\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h1\" id=\"optionsRadios3\" value=\"n\" checked>
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }
                          ?>
                        </div>
                      </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h2</label>
                          <?php
                            if($detail['h2']=='r'){ //kondisi red
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h2\" id=\"optionsRadios1\" value=\"r\" checked>
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h2\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h2\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else if($detail['h2']=='y'){ //kondisi yellow
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h2\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h2\" id=\"optionsRadios2\" value=\"y\" checked>
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h2\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else{ //kondisi no
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h2\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h2\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h2\" id=\"optionsRadios3\" value=\"n\" checked>
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }
                          ?>
                        </div>
                      </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h3</label>
                          <?php
                            if($detail['h3']=='r'){ //kondisi red
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h3\" id=\"optionsRadios1\" value=\"r\" checked>
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h3\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h3\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else if($detail['h3']=='y'){ //kondisi yellow
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h3\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h3\" id=\"optionsRadios2\" value=\"y\" checked>
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h3\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else{ //kondisi no
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h3\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h3\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h3\" id=\"optionsRadios3\" value=\"n\" checked>
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }
                          ?>
                        </div>
                      </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h4</label>
                          <?php
                            if($detail['h4']=='r'){ //kondisi red
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h4\" id=\"optionsRadios1\" value=\"r\" checked>
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h4\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h4\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else if($detail['h4']=='y'){ //kondisi yellow
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h4\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h4\" id=\"optionsRadios2\" value=\"y\" checked>
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h4\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else{ //kondisi no
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h4\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h4\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h4\" id=\"optionsRadios3\" value=\"n\" checked>
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }
                          ?>
                        </div>
                      </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h5</label>
                          <?php
                            if($detail['h5']=='r'){ //kondisi red
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h5\" id=\"optionsRadios1\" value=\"r\" checked>
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h5\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h5\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else if($detail['h5']=='y'){ //kondisi yellow
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h5\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h5\" id=\"optionsRadios2\" value=\"y\" checked>
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h5\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else{ //kondisi no
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h5\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h5\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h5\" id=\"optionsRadios3\" value=\"n\" checked>
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }
                          ?>
                        </div>
                      </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h6</label>
                          <?php
                            if($detail['h6']=='r'){ //kondisi red
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h6\" id=\"optionsRadios1\" value=\"r\" checked>
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h6\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h6\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else if($detail['h6']=='y'){ //kondisi yellow
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h6\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h6\" id=\"optionsRadios2\" value=\"y\" checked>
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h6\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else{ //kondisi no
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h6\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h6\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h6\" id=\"optionsRadios3\" value=\"n\" checked>
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }
                          ?>
                        </div>
                      </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h7</label>
                          <?php
                            if($detail['h7']=='r'){ //kondisi red
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h7\" id=\"optionsRadios1\" value=\"r\" checked>
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h7\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h7\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else if($detail['h7']=='y'){ //kondisi yellow
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h7\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h7\" id=\"optionsRadios2\" value=\"y\" checked>
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h7\" id=\"optionsRadios3\" value=\"n\">
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }else{ //kondisi no
                              echo "<div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h7\" id=\"optionsRadios1\" value=\"r\">
                                        Wajib
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h7\" id=\"optionsRadios2\" value=\"y\">
                                        Optional
                                      </label>
                                    </div>
                                    <div class=\"radio\">
                                      <label>
                                        <input type=\"radio\" name=\"h7\" id=\"optionsRadios3\" value=\"n\" checked>
                                        Tidak Wajib
                                      </label>
                                    </div>";
                            }
                          ?>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                  <a href="form_sc_detail.php?f=<?php echo $id_form; ?>" class="btn btn-warning"><i class="fa fa-close"> Batal</i></a>
                </div>
              </div>
            </div>
            </form>
          </div>
          <!-- end form tambah -->
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
      });
    </script>

  </body>
</html>
