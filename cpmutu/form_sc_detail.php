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
$id_form = isset($_GET['f']) ? $_GET['f'] : '';
$get_data_form = "SELECT * FROM form_input_cp WHERE id_form=$id_form LIMIT 1";
$result = mysql_query($get_data_form);
$desc = mysql_fetch_array($result);
//get data detail form
$detail_sql = "SELECT * FROM form_detail_cp fd INNER JOIN form_input_cp fi ON(fd.id_form=fi.id_form) INNER JOIN penilaian p ON(p.id_penilaian=fd.id_penilaian) WHERE fi.id_form=$id_form ORDER BY fd.urutan ASC";
$get_detail = mysql_query($detail_sql);
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
            <form action="form_sc_detail_save.php" method="post">
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
                          <option value="">---pilih pemeriksaan---</option>
                          <?php
                            while($data_p = mysql_fetch_array($data_penilaian)){
                              echo "<option value='".$data_p['id_penilaian']."'>".$data_p['nama_penilaian']."</option>";
                            }
                           ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="pertanyaan">Header/sub header</label>
                        <select class="form-control" name="menu" id="head_menu" required>
                          <option value="">---pilih Salah Satu---</option>
                          <option value="y">ya</option>
                          <option value="n">tidak</option>
                        </select>
												<input type="hidden" name="id_form" value="<?php echo $id_form; ?>">
                      </div>
                    </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h1</label>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h1" id="optionsRadios1" value="r">
                              Wajib
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h1" id="optionsRadios2" value="y">
                              Optional
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h1" id="optionsRadios3" value="n" checked>
                              Tidak Wajib
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h2</label>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h2" id="optionsRadios1" value="r">
                              Wajib
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h2" id="optionsRadios2" value="y">
                              Optional
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h2" id="optionsRadios3" value="n" checked>
                              Tidak Wajib
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h3</label>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h3" id="optionsRadios1" value="r">
                              Wajib
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h3" id="optionsRadios2" value="y">
                              Optional
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h3" id="optionsRadios3" value="n" checked>
                              Tidak Wajib
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h4</label>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h4" id="optionsRadios1" value="r">
                              Wajib
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h4" id="optionsRadios2" value="y">
                              Optional
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h4" id="optionsRadios3" value="n" checked>
                              Tidak Wajib
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h5</label>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h5" id="optionsRadios1" value="r">
                              Wajib
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h5" id="optionsRadios2" value="y">
                              Optional
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h5" id="optionsRadios3" value="n" checked>
                              Tidak Wajib
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h6</label>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h6" id="optionsRadios1" value="r">
                              Wajib
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h6" id="optionsRadios2" value="y">
                              Optional
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h6" id="optionsRadios3" value="n" checked>
                              Tidak Wajib
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-1" >
                        <div class="form-group">
                          <label for="checkHari">h7</label>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h7" id="optionsRadios1" value="r">
                              Wajib
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h7" id="optionsRadios2" value="y">
                              Optional
                            </label>
                          </div>
                          <div class="radio">
                            <label>
                              <input type="radio" name="h7" id="optionsRadios3" value="n" checked>
                              Tidak Wajib
                            </label>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="box-footer">
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
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
                  <i class="fa fa-list"></i>
				              <h3 class="box-title">Detail <?php echo $desc['nama_form']." Rev.".$desc['rev']; ?></h3>
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
                        <th>Pertanyaan</th>
                        <th>h1</th>
                        <th>h2</th>
                        <th>h3</th>
                        <th>h4</th>
                        <th>h5</th>
                        <th>h6</th>
                        <th>h7</th>
                        <th>Ubah</th>
												<th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
												<?php
													$num =1;
													while($d = mysql_fetch_assoc($get_detail)){
														echo "<tr>
																		<td>".$num++."</td>
																		<td>".$d['nama_penilaian']."</td>";
																		// h1 block
																		if($d['h1']=='r'){
																			echo "<td class='red'>".$d['h1']."</td>";
																		}elseif($d['h1']=='y'){
																			echo "<td class='yellow'>".$d['h1']."</td>";
																		}else{
																			echo "<td>".$d['h1']."</td>";
																		}
																		// h2 block
																		if($d['h2']=='r'){
																			echo "<td class='red'>".$d['h2']."</td>";
																		}elseif($d['h2']=='y'){
																			echo "<td class='yellow'>".$d['h2']."</td>";
																		}else{
																			echo "<td>".$d['h2']."</td>";
																		}
																		// h3 block
																		if($d['h3']=='r'){
																			echo "<td class='red'>".$d['h3']."</td>";
																		}elseif($d['h3']=='y'){
																			echo "<td class='yellow'>".$d['h3']."</td>";
																		}else{
																			echo "<td>".$d['h3']."</td>";
																		}
																		//h4 block
																		if($d['h4']=='r'){
																			echo "<td class='red'>".$d['h4']."</td>";
																		}elseif($d['h4']=='y'){
																			echo "<td class='yellow'>".$d['h4']."</td>";
																		}else{
																			echo "<td>".$d['h4']."</td>";
																		}
																		// h5 block
																		if($d['h5']=='r'){
																			echo "<td class='red'>".$d['h5']."</td>";
																		}elseif($d['h5']=='y'){
																			echo "<td class='yellow'>".$d['h5']."</td>";
																		}else{
																			echo "<td>".$d['h5']."</td>";
																		}
																		// h6 block
																		if($d['h6']=='r'){
																			echo "<td class='red'>".$d['h6']."</td>";
																		}elseif($d['h6']=='y'){
																			echo "<td class='yellow'>".$d['h6']."</td>";
																		}else{
																			echo "<td>".$d['h6']."</td>";
																		}
																		//h7 block
																		if($d['h7']=='r'){
																			echo "<td class='red'>".$d['h7']."</td>";
																		}elseif($d['h7']=='y'){
																			echo "<td class='yellow'>".$d['h7']."</td>";
																		}else{
																			echo "<td>".$d['h7']."</td>";
																		}
															echo "<td>
																			<a href='form_sc_detail_up.php?f=".$d['id_form']."&d=".$d['id_detail_form']."' class='btn btn-warning btn-sm'><i class='fa fa-pencil'></i> Ubah</a></td>";
																		if($d['urutan']=='1'){
																			echo "<td><a href='#' class='btn btn-info btn-sm'><i class='fa fa-arrow-down'></i> Turun</a>";
																		}else{
																			echo "<td><a href='#' class='btn btn-success btn-sm'><i class='fa fa-arrow-up'></i> Naik</a>&nbsp;
																					  <a href='#' class='btn btn-info btn-sm'><i class='fa fa-arrow-down'></i> Turun</a>";
																		}

															echo "</td>
																</tr>";
													}
												 ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
                <!-- <div class="box-footer">
                    <button id="open_form" type="button" name="tambah_data" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Data</button>
                </div> -->
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
      });
    </script>

  </body>
</html>
