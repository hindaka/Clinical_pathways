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
$nomedrek = isset($_POST['nomedrek']) ? $_POST['nomedrek'] : '';
$sql_pasien ="SELECT rp.nomedrek,rp.nama,rp.rujukan,rp.tanggallahir,rp.kelamin,o.bb,o.tinggi FROM registerpasien rp INNER JOIN ok o ON(rp.id_pasien=o.id_register) WHERE rp.nomedrek='$nomedrek' LIMIT 1";
$get_pasien = mysql_query($sql_pasien);
$pasien = mysql_fetch_array($get_pasien);
// query dokter
$sql_dokter ="SELECT * FROM drclinical d INNER JOIN pegawai p ON(d.id_pegawai=p.id_pegawai)  WHERE d.cp_tipe='SC' ORDER BY p.nama";
$state_dokter = mysql_query($sql_dokter);
// query asesment form type
$sql_form = "SELECT * FROM penilaian ORDER BY id_penilaian";
$state_form = mysql_query($sql_form);
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
            <li class="active">Sectio Cesarea</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="box">
            <div class="box-header">
              <i class="fa fa-user"></i>
		          <h3 class="box-title">Form Sectio Cesarea</h3>
            </div><!-- /.box-header -->

            <div class="box-body">
              <form class="" action="sc_form_save.php" method="post">
                <div class="table-responsive">
                  <table class="tabel-border" id="form_sc">
                    <!-- row 1 -->
                    <tr>
                      <td>No Rekam Medis</td>
                      <td colspan="3"><?php echo $nomedrek; ?></td>
                      <td colspan="2">Rujukan</td>
                      <td colspan="3"><?php echo $pasien['rujukan']; ?></td>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                      <td>Nama Pasien</td>
                      <td colspan="3"><?php echo $pasien['nama']; ?></td>
                      <td colspan="2">Rencana Rawat</td>
                      <td colspan="3"><input type="number" name="rencana_rawat" placeholder=".......... hari" min="1" class="form-control"></td>
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
                        <select name="dpjp" class="form-control" required>
                          <option value="">------Pilih Dokter------</option>
                          <?php
                          while ($list_dokter=mysql_fetch_assoc($state_dokter)) {
                            echo "<option value=".$list_dokter['id_drcp'].">".$list_dokter['nama']."</option>";
                          }
                          ?>
                        </select>
                      </td>
                      <td colspan="2">Penolong</td>
                      <td colspan="3"><input type="text" name="penolong" placeholder="Nama Penolong" class="form-control"></td>
                    </tr>
                    <!-- row 6 -->
                    <tr>
                      <td>Diagnosa Masuk</td>
                      <td colspan="3"><input type="text" name="diagnosaM" placeholder="Masukan Diagnosa Masuk" class="form-control"></td>
                      <td colspan="2">Kode ICD</td>
                      <td colspan="3"><input type="text" name="kodeICD_masuk" placeholder="Masukan Kode ICD" class="form-control"></td>
                    </tr>
                    <!-- row 7 -->
                    <tr>
                      <td>Diagnosa Utama</td>
                      <td colspan="3"><input type="text" name="diagnosaU" placeholder="Masukan Diagnosa Utama" class="form-control"></td>
                      <td colspan="2">Kode ICD</td>
                      <td colspan="3"><input type="text" name="kodeICD_utama" placeholder="Masukan Kode ICD" class="form-control"></td>
                    </tr>
                    <!-- row 8 -->
                    <tr>
                      <td>Diagnosa Penyerta</td>
                      <td colspan="3"><input type="text" name="diagnosaP" placeholder="Masukan Diagnosa Penyerta" class="form-control"></td>
                      <td colspan="2">Kode ICD</td>
                      <td colspan="3"><input type="text" name="kodeICD_penyerta" placeholder="Masukan Kode ICD" class="form-control"></td>
                    </tr>
                    <!-- row 9 -->
                    <tr>
                      <td ><input type="text" name="nama_diagnosa" placeholder="Masukan Diagnosa Tambahan" class="form-control"></td>
                      <td colspan="3"><input type="text" name="diagnosaT" placeholder="Masukan Diagnosa Tambahan" class="form-control"></td>
                      <td colspan="2">Kode ICD</td>
                      <td colspan="3"><input type="text" name="KodeICD_tambahan" placeholder="masukan kode ICD" class="form-control"></td>
                    </tr>
                    <!-- row 10 -->
                    <tr>
                      <td>Komplikasi</td>
                      <td colspan="3"><input type="text" name="komplikasi" placeholder="Masukan Komplikasi" class="form-control"></td>
                      <td colspan="2">Kode ICD</td>
                      <td colspan="3"><input type="text" name="kodeICD_komplikasi" placeholder="Masukan Kode ICD" class="form-control"></td>
                    </tr>
                    <!-- row 11 -->
                    <tr>
                      <td>Tindakan</td>
                      <td colspan="3"><input type="text" name="tindakan" placeholder="Masukan tindakan" class="form-control"></td>
                      <td colspan="2">Kode ICD</td>
                      <td colspan="3"><input type="text" name="kodeICD_tindakan" placeholder="Masukan Kode ICD" class="form-control"></td>
                    </tr>
                     <!-- row 12 -->
                    <tr>
                      <td>input ruang rawat</td>
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
                        <select name="kelas" class="form-control">
                          <option value="">Kelas</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                        </select>
                      </td>
                      <td><input type="number" name="tarifHarian" placeholder="Tarif / Hari" min="0" class="form-control"></td>
                      <td colspan="2"><input type="date" id="tanggal_masuk" name="tanggal_masuk" placeholder="dd/mm/yyyy" class="form-control"></td>
                      <td colspan="2"><input type="date" id="tanggal_keluar" name="tanggal_keluar" placeholder="dd/mm/yyyy" class="form-control"></td>
                      <td><input type="text" name="lama_rawat" placeholder="..... hari" id="lama_rawat" readonly class="form-control"></td>
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
                      echo "<tr>
                              <td><b>".$list_asses['nama_penilaian']."</b></td>
                              <td colspan='7'></td>
                              <td></td>
                          </tr>";
                      // sub penilaian
                      $sql_sub = "SELECT * FROM sub_penilaian WHERE id_penilaian=".$list_asses['id_penilaian']." ORDER BY urutan";
                      $list_sub = mysql_query($sql_sub);
                      if(mysql_num_rows($list_sub)>0){
                        while($subs=mysql_fetch_assoc($list_sub)){ //loop for sub penilaian
                          //super sub penilaian
                          $sup =0;
                          $sql_sup = "SELECT * FROM super_sub_penilaian WHERE id_sub_penilaian=".$subs['id_sub_penilaian']." ORDER BY urutan";
                          $list_sup = mysql_query($sql_sup);
                          if(mysql_num_rows($list_sup)>0){ //if super_sub > 0
                            echo "<tr>
                                    <td><b>".$subs['nama_sub']."</b></td>
                                    <td colspan='7'></td>
                                    <td></td>
                                </tr>";
                            while($sups = mysql_fetch_assoc($list_sup)){ //loop for super sub penilaian
                              $sql_sup2 = "SELECT * FROM super_sub2_penilaian WHERE id_sup_penilaian=".$sups['id_sup_penilaian']." ORDER BY urutan";
                              $list_sup2 = mysql_query($sql_sup2);

                              if(mysql_num_rows($list_sup2)>0){ // if super sub2 has child
                                echo "<tr>
                                        <td><b>".$sups['sup_penilaian']."</b></td>
                                        <td colspan='7'></td>
                                        <td></td>
                                    </tr>";
                                while($sup2 = mysql_fetch_assoc($list_sup2)){ //loop sub 3
                                  echo "<tr>
                                          <td>".++$sup2s.". ".$sup2['sup2_penilaian']."</td>";
                                          for ($x=1; $x <=7 ; $x++) {
                                            echo "<td>".$sup2['id_sup_penilaian'].":".$sup2['id_sup2_penilaian'].":".$x."<input type='checkbox' name='nilai[]' class='form-control'></td>";
                                          }
                                  echo "<td></td>
                                      </tr>";
                                }
                              }else{
                                echo "<tr>
                                        <td>".++$sup.". ".$sups['sup_penilaian']."</td>";
                                        for ($x=1; $x <=7 ; $x++) {
                                          echo "<td><input type='checkbox' name='nilai[]' class='form-control'></td>";
                                        }
                                echo "<td></td>
                                    </tr>";
                              }
                            }//end loop for super sub penilaian
                            $sup=0;
                          }else{
                            echo "<tr>
                                    <td>".++$num.". ".$subs['nama_sub']."</td>";
                                    for ($x=1; $x <=7 ; $x++) {
                                      echo "<td><input type='checkbox' name='nilai[]' class='form-control'></td>";
                                    }
                            echo "<td></td>
                                </tr>";
                          } //end if super sub
                        } //end while
                        $num=0;
                      } //end if num_rows list sub
                    }
                     ?>
                     <tr>
                       <td id="varian">Varian</td>
                       <td colspan="7"><input type="text" name="varian" placeholder="Masukan Varian" class="form-control"></td>
                       <td></td>
                     </tr>
                  </table>
                </div>

            </div><!-- /.box-body -->

				  <div class="box-footer">
              <button type="submit" class="btn btn-primary">simpan</button>
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
         var hasilnya = hari+' hari';
       }else{
         var hasilnya = '0 hari';
       }
       $('#lama_rawat').val(hasilnya);
  	  });
    </script>

  </body>
</html>
