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
// query register pasien
$nomedrek = isset($_GET['n']) ? $_GET['n'] : '';
$id_asesmen = isset($_GET['f']) ? $_GET['f'] : '';
$sql_pasien ="SELECT a.*,rp.*,rp.rujukan as rujukan_rp,o.*,rp.nama as nama_pasien,p.nama as nama_dokter FROM `asesmen` a INNER JOIN ok o ON(o.id_ok=a.id_ok) INNER JOIN registerpasien rp ON(rp.id_pasien= o.id_register) INNER JOIN drclinical dr ON(dr.id_drcp=a.id_drcp) INNER JOIN pegawai p ON(p.id_pegawai= dr.id_pegawai) where rp.nomedrek=$nomedrek";
$get_pasien = mysql_query($sql_pasien);
$pasien = mysql_fetch_array($get_pasien);
// query dokter
$sql_dokter ="SELECT * FROM drclinical d INNER JOIN pegawai p ON(d.id_pegawai=p.id_pegawai)  WHERE d.cp_tipe='SC' ORDER BY p.nama";
$state_dokter = mysql_query($sql_dokter);
// query asesment form type
$sql_form = "SELECT * FROM asesmen a INNER JOIN form_input_cp fi ON(fi.id_form=a.id_form) WHERE a.id_asesmen=$id_asesmen";
$state_form = mysql_query($sql_form);
$title = mysql_fetch_array($state_form);
$f_masuk = date('d-m-Y',strtotime($title['tanggal_masuk']));
$f_keluar = date('d-m-Y',strtotime($title['tanggal_keluar']));
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
    <!-- custom css -->
    <link rel="stylesheet" href="../dist/css/cp_form.css" type="text/css">

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
            <li class="active"><?php echo $title['nama_form']."<small> Rev".$title['rev']."</small>"; ?></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="box">
            <div class="box-header">
              <i class="fa fa-user"></i>
		          <h3 class="box-title"><?php echo $title['nama_form']."<small> Rev".$title['rev']."</small>"; ?></h3>
            </div><!-- /.box-header -->

            <div class="box-body">
              <form class="" action="sc_form_save.php" method="post">
								<input type="hidden" name="id_ok" value="<?php echo $titla['id_ok']; ?>">
								<input type="hidden" name="id_form" value="<?php echo $title['id_form']; ?>">
                <div class="table-responsive">
                  <table class="tabel-border" id="form_sc">
                    <!-- row 1 -->
                    <tr>
                      <td>No Rekam Medis</td>
                      <td colspan="3"><?php echo $nomedrek; ?></td>
                      <td colspan="2">Rujukan</td>
                      <td colspan="3"><?php echo $pasien['rujukan_rp']; ?></td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                      <td>Nama Pasien</td>
                      <td colspan="3"><?php echo $pasien['nama_pasien']; ?></td>
                      <td colspan="2">Rencana Rawat</td>
                      <td colspan="3"><input type="number" name="rencana_rawat" placeholder=".......... hari" min="1" class="form-control" value="<?php echo $title['rencana_rawat'] ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                      <td>Tanggal Lahir</td>
                      <td colspan="3"><?php echo $pasien['tanggallahir'] ?></td>
                      <td colspan="2">Berat Badan</td>
                      <td colspan="3"><?php echo $pasien['bb'] ?></td>
                    </tr>
                    <!-- row 4 -->
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td colspan="3"><?php echo $pasien['kelamin'] ?></td>
                      <td colspan="2">Tinggi Badan</td>
                      <td colspan="3"><?php echo $pasien['tinggi'] ?></td>
                    </tr>
                    <!-- row 5 -->
                    <tr>
                      <td>Dokter Penanggung Jawab Pasien</td>
                      <td colspan="3">
                        <select name="dpjp" class="form-control" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';}else{ echo 'required';} ?>>
                          <option value="">------Pilih Dokter------</option>
                          <?php
                          while ($list_dokter=mysql_fetch_assoc($state_dokter)) {
                            if($list_dokter['id_drcp']==$title['id_drcp']){
                              echo "<option value=".$list_dokter['id_drcp']." selected>".$list_dokter['nama']."</option>";
                            }else{
                                echo "<option value=".$list_dokter['id_drcp'].">".$list_dokter['nama']."</option>";
                            }

                          }
                          ?>
                        </select>
                      </td>
                      <td colspan="2">Penolong</td>
                      <td colspan="3"><input type="text" name="penolong" placeholder="Nama Penolong" class="form-control" value="<?php echo $title['penolong']; ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                    </tr>
                    <!-- row 6 -->
                    <tr>
                      <td>Diagnosa Masuk</td>
                      <td colspan="3"><input type="text" name="diagnosaM" placeholder="Masukan Diagnosa Masuk" class="form-control" value="<?php echo $title['diagnosaM']; ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                      <td colspan="2">Kode ICD</td>
                      <td colspan="3"><input type="text" name="kodeICD_masuk" placeholder="Masukan Kode ICD" class="form-control" value="<?php echo $title['kodeICD_masuk']; ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                    </tr>
                    <!-- row 7 -->
                    <tr>
                      <td>Diagnosa Utama</td>
                      <td colspan="3"><input type="text" name="diagnosaU" placeholder="Masukan Diagnosa Utama" class="form-control" value="<?php echo $title['diagnosaU']; ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                      <td colspan="2">Kode ICD</td>
                      <td colspan="3"><input type="text" name="kodeICD_utama" placeholder="Masukan Kode ICD" class="form-control" value="<?php echo $title['kodeICD_utama']; ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                    </tr>
                    <!-- row 8 -->
                    <tr>
                      <td>Diagnosa Penyerta</td>
                      <td colspan="3"><input type="text" name="diagnosaP" placeholder="Masukan Diagnosa Penyerta" class="form-control" value="<?php echo $title['diagnosaP']; ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                      <td colspan="2">Kode ICD</td>
                      <td colspan="3"><input type="text" name="kodeICD_penyerta" placeholder="Masukan Kode ICD" class="form-control" value="<?php echo $title['kodeICD_penyerta']; ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                    </tr>
                    <!-- row 9 -->
                    <tr>
                      <td ><input type="text" name="nama_diagnosa" placeholder="Masukan Diagnosa Tambahan" class="form-control" value="<?php echo $title['nama_diagnosa'] ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                      <td colspan="3"><input type="text" name="diagnosaT" placeholder="Masukan Diagnosa Tambahan" class="form-control" value="<?php echo $title['diagnosaT'] ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                      <td colspan="2">Kode ICD</td>
                      <td colspan="3"><input type="text" name="KodeICD_tambahan" placeholder="masukan kode ICD" class="form-control" value="<?php echo $title['kodeICD_tambahan'] ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                    </tr>
                    <!-- row 10 -->
                    <tr>
                      <td>Komplikasi</td>
                      <td colspan="3"><input type="text" name="komplikasi" placeholder="Masukan Komplikasi" class="form-control" value="<?php echo $title['komplikasi'] ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                      <td colspan="2">Kode ICD</td>
                      <td colspan="3"><input type="text" name="kodeICD_komplikasi" placeholder="Masukan Kode ICD" class="form-control" value="<?php echo $title['kodeICD_komplikasi'] ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                    </tr>
                    <!-- row 11 -->
                    <tr>
                      <td>Tindakan</td>
                      <td colspan="3"><input type="text" name="tindakan" placeholder="Masukan tindakan" class="form-control" value="<?php echo $title['tindakan'] ?>"  <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                      <td colspan="2">Kode ICD</td>
                      <td colspan="3"><input type="text" name="kodeICD_tindakan" placeholder="Masukan Kode ICD" class="form-control" value="<?php echo $title['kodeICD_tindakan'] ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                    </tr>
                     <!-- row 12 -->
                    <tr>
                      <td>
												Ruang Rawat :&nbsp;
												<select name="ruang_rawat" disabled>
													<option value="">Pilih Ruang Rawat</option>
                          <?php
                            if($title['ruang_rawat']=='irna3'){
                              echo "<option value=\"irna3\" selected>Irna 3</option>
                                    <option value=\"irna4\">Irna 4</option>";
                            }else{
                              echo "<option value=\"irna3\">Irna 3</option>
                                    <option value=\"irna4\" selected>Irna 4</option>";
                            }
                          ?>
												</select>
											</td>
                      <td>Kelas : </td>
                      <td>Tarif / Hari</td>
                      <td colspan="2">Tgl Masuk</td>
                      <td colspan="2">Tgl Keluar</td>
                      <td>Lama Rawat</td>
                      <td rowspan="2">Biaya</td>
                    </tr>
                    <!-- row 13 -->
                    <tr>
                      <td>Tanggal/Bulan/Tahun</td>
                      <td>
                        <select name="kelas" class="form-control" <?php if(($namauser=='kasir')||($namauser=='jkn')){ echo 'disabled';} else{ echo 'required';} ?>>
                          <option value="">Kelas</option>
                          <?php
                          if($title['kelas'] == 1){
                            echo "<option value='1' selected>1</option>
                            <option value='2'>2</option>
                            <option value='3'>3</option>";
                          }elseif($title['kelas']== 2){
                            echo "<option value='1'>1</option>
                            <option value='2' selected>2</option>
                            <option value='3'>3</option>";
                          }else{
                            echo "<option value='1'>1</option>
                            <option value='2'>2</option>
                            <option value='3' selected>3</option>";
                          }
                          ?>

                        </select>
                      </td>
                      <td><input type="number" name="tarifHarian" placeholder="Tarif / Hari" min="0" class="form-control" value ="<?php echo $title['tarif_harian'] ?>" <?php if($namauser!='kasir'){ echo "disabled";} ?>></td>
                      <td colspan="2"><input type="text" id="tanggal_masuk" name="tanggal_masuk" placeholder="dd/mm/yyyy" class="form-control" value="<?php echo $f_masuk ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                      <td colspan="2"><input type="text" id="tanggal_keluar" name="tanggal_keluar" placeholder="dd/mm/yyyy" class="form-control" value="<?php echo $f_keluar ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                      <td><input type="text" name="lama_rawat" placeholder="....." id="lama_rawat" class="form-control" disabled value="<?php echo $title['lama_rawat'] ?>"> Hari</td>
                    </tr>
                    <!-- row 14 -->
                    <tr>
                      <td>Aktivitas : Hari Rawat</td>
                      <?php
                      for ($x=1; $x <= 7; $x++) {
                        echo "<td style='text-align:center'>$x</td>";
                      }
                      ?>
                      <td>&nbsp;</td>
                    </tr>
                    <!-- row assesment -->
                    <?php
                    $num =0;
                    $sup2s=0;
                    while($list_asses=mysql_fetch_assoc($state_form)){
											if($list_asses['head_menu']=='y'){
												echo "<tr>
																<td><b>".$list_asses['nama_penilaian']."</b></td>
																<td colspan='7'></td>
																<td></td>
														</tr>";
												$num=0;
											}else{
												echo "<tr>
																<td>".++$num.". ".$list_asses['nama_penilaian']."</td>";
																for ($i=1; $i <= 7 ; $i++) {
																	if($list_asses['h'.$i]=='r'){
																		echo "<td class=\"red\"><input type=\"checkbox\" class=\"form-control\" name=\"nilai[]\"";
																		if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';}
																		echo "></td>";
																	}elseif($list_asses['h'.$i]=='y'){
																		echo "<td class=\"yellow\"><input type=\"checkbox\" class=\"form-control\" name=\"nilai[]\"";
																		if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';}
																		echo "></td>";
																	}else{
																		echo "<td><input type=\"checkbox\" class=\"form-control\" name=\"nilai[]\"";
																		if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';}
																		echo "></td>";
																	}
																}
												echo "<td></td>
														</tr>";
											}
										}
                    ?>
                     <tr>
                       <td id="varian">Varian</td>
                       <td colspan="7"><input type="text" name="varian" placeholder="Masukan Varian" class="form-control" value="<?php echo $title['varian'] ?>" <?php if($namauser=='kasir' || $namauser=='jkn'){ echo 'disabled';} ?>></td>
                       <td></td>
                     </tr>
                  </table>
                </div>

            </div><!-- /.box-body -->
						<?php if(($namauser!='kasir') && ($namauser!='jkn')){ ?>
							<div class="box-footer">
		              <button type="submit" class="btn btn-success">Simpan</button>
		          </div>
						<?php	} ?>
        </form>
			  </div>
						<form action="sc_section_ksr_up.php" method="post">
							<div class="box">
								<div class="box-header">
										<i class="fa fa-pencil"></i>
										<h3 class="box-title">Masukan Biaya Riil</h3>
								</div>
								<div class="box-body">
									<div class="row">
										<div class="col-xs-6">
											<div class="form-group">
												<label for="biayaRiil">Biaya Riil</label>
												<input type="number" name="biaya_riil" placeholder="Masukan Biaya Riil" class="form-control">
											</div>
											<div class="form-group">
												<label for="cara_pembayaran">Cara Pembayaran</label>
												<select class="form-control" name="jpasien">
													<option value="">---- Pilih Cara Pembayaran ----</option>
													<option value="Umum">Umum</option>
													<option value="ASKES">ASKES</option>
	                        <option value="KIS">Kartu Indonesia Sehat</option>
	                        <option value="Premi">Premi</option>
													<option value="Jamkesmas">Jamkesmas</option>
													<option value="Jamkesda kuota">Jamkesda kuota</option>
													<option value="Jamkesda non kuota">Jamkesda non kuota</option>
													<option value="TNI/POLRI">TNI/POLRI</option>
	                        <option value="Swasta">Swasta</option>
													<option value="Penerima pensiun">Penerima pensiun</option>
													<option value="Karyawan">Karyawan</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="box-footer">
									<button type="submit" name="button" class="btn btn-success">Simpan</button>
								</div>
							</div>
						</form>
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
        checkboxClass: 'icheckbox_flat-blue'
      });
      //datepicker tanggal masuk
      $('#tanggal_masuk').datepicker({
  	    format: 'dd/mm/yyyy',
  		todayHighlight: true,
  		autoclose: true,});
      //datepicker tanggal keluar
      $('#tanggal_keluar').datepicker({
  	    format: 'dd/mm/yyyy',
  		todayHighlight: true,
  		autoclose: true,});
      //kalkulasi lama rawat
      $('#tanggal_keluar').on('change', function() {
  		 var today = document.getElementById("tanggal_masuk").value;
       var out_day = this.value;
       var result = false;
       if(today <= out_day){
         var tchunks = today.split('/');
         var tnewdob = tchunks[1]+'/'+tchunks[0]+'/'+tchunks[2];
         var tnewdob1 = new Date(tnewdob);
         var dob = this.value;
         var chunks = dob.split('/');
         var newdob = chunks[1]+'/'+chunks[0]+'/'+chunks[2];
         var newdob1 = new Date(newdob);
         var hari = Math.floor((newdob1-tnewdob1) / (1 * 24 * 60 * 60 * 1000));
         var hari = hari+1;
         var hasilnya = hari;
       }else{
         var hasilnya = '0';
       }
       $('#lama_rawat').val(hasilnya);
  	  });
    </script>

  </body>
</html>
