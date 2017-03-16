<?php
ob_start();
session_start();
include "../inc/koneksi.inc.php";
//set variable from form_sc.php
$nama_form = isset($_POST['nama_periksa']) ? $_POST['nama_periksa'] : '';

// query insert ke tabel form_input_cp
$sql_form = "INSERT INTO penilaian (`nama_penilaian`) VALUES('$nama_form')";
$result = mysql_query($sql_form);

if($result){
  //set sukses message
  $_SESSION['sukses'] = true;
  $_SESSION['msg'] = $nama_form." telah berhasil disimpan";
}else{
  //set sukses message
  $_SESSION['error'] = true;
  $_SESSION['msg'] = mysql_errno() . ": " . mysql_error();
}
 ?>
 <script>
 window.location="list_periksa.php";
 </script>
