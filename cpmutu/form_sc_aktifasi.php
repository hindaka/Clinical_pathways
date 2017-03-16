<?php
ob_start();
session_start();
include "../inc/koneksi.inc.php";
//get id_user from session
$mem_id = $_SESSION['id_user'];
$id_form = isset($_GET['f']) ? $_GET['f'] : '';
$status = isset($_GET['s']) ? $_GET['s'] : '';

// query update ke tabel form_input_cp

$sql_form = "UPDATE form_input_cp SET status='aktif' WHERE id_form=$id_form and cp_tipe='SC'";
$result = mysql_query($sql_form);
$sql_up = "UPDATE form_input_cp SET status='non-aktif' WHERE id_form<>$id_form and cp_tipe='SC'";
$result_up = mysql_query($sql_up);

if($result){
  //set sukses message
  $_SESSION['sukses'] = true;
  $_SESSION['msg'] = "Form berhasil diaktifkan.";
}else{
  //set sukses message
  $_SESSION['error'] = true;
  $_SESSION['msg'] = mysql_errno() . ": " . mysql_error();
}
 ?>
 <script>
 window.location="form_sc.php";
 </script>
