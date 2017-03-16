<?php
ob_start();
session_start();
include "../inc/koneksi.inc.php";
//set variable from form_sc.php
$id = isset($_POST['id']) ? $_POST['id'] : '';
$nama_form = isset($_POST['nama_periksa']) ? $_POST['nama_periksa'] : '';

// query insert ke tabel form_input_cp
$sql_form = "UPDATE penilaian SET nama_penilaian='$nama_form' WHERE id_penilaian='$id'";
$result = mysql_query($sql_form);

if($result){
  //set sukses message
  $_SESSION['sukses'] = true;
  $_SESSION['msg'] = "Ubah data telah berhasil dilakukan";
}else{
  //set sukses message
  $_SESSION['error'] = true;
  $_SESSION['msg'] = mysql_errno() . ": " . mysql_error();
}
 ?>
 <script>
 window.location="list_periksa.php";
 </script>
