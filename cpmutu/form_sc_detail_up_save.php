<?php
ob_start();
session_start();
include "../inc/koneksi.inc.php";
//set variable from form_sc.php
$id_penilaian = isset($_POST['pemeriksaan']) ? $_POST['pemeriksaan'] : '';
$h1 = isset($_POST['h1']) ? $_POST['h1'] : '';
$h2 = isset($_POST['h2']) ? $_POST['h2'] : '';
$h3 = isset($_POST['h3']) ? $_POST['h3'] : '';
$h4 = isset($_POST['h4']) ? $_POST['h4'] : '';
$h5 = isset($_POST['h5']) ? $_POST['h5'] : '';
$h6 = isset($_POST['h6']) ? $_POST['h6'] : '';
$h7 = isset($_POST['h7']) ? $_POST['h7'] : '';
$menu_header = isset($_POST['menu']) ? $_POST['menu'] : '';
$id_form = isset($_POST['id_form']) ? $_POST['id_form'] : '';
$id_detail = isset($_POST['id_detail_form']) ? $_POST['id_detail_form'] : '';


$sql_form = "UPDATE form_detail_cp SET `id_penilaian`=$id_penilaian,`head_menu`='$menu_header',`h1`='$h1',`h2`='$h2',`h3`='$h3',`h4`='$h4',`h5`='$h7',`h6`='$h6',`h7`='$h7' WHERE `id_detail_form`=$id_detail";
$result = mysql_query($sql_form);

if($result){
  //set sukses message
  $_SESSION['sukses'] = true;
  $_SESSION['msg'] = "Data Berhasil diubah";
}else{
  //set sukses message
  $_SESSION['error'] = true;
  $_SESSION['msg'] = mysql_errno() . ": " . mysql_error();
}
 ?>
 <script>
 window.location="form_sc_detail.php?f="+<?php echo $id_form; ?>;
 </script>
