<?php
ob_start();
session_start();
include "../inc/koneksi.inc.php";
//get id_user from session
$mem_id = $_SESSION['id_user'];
//set variable from form_sc.php
$nama_form = isset($_POST['nama_form']) ? $_POST['nama_form'] : '';
$rev = isset($_POST['rev']) ? $_POST['rev'] : '';
$tanggal_post = date('Y-m-d');
$cp_tipe = 'SC';
$status ='non-aktif';

//get max total data
// $sql_count = "SELECT count(*) as jumlah FROM form_input_cp WHERE cp_tipe='$cp_tipe'";
// $get_jumlah = mysql_query($sql_count);
// $jumlah = mysql_fetch_array($get_jumlah);
// //set id_form {tipe_cp.jumlah+1}
// $id_form = $cp_tipe.$jumlah['jumlah']+1;

// query insert ke tabel form_input_cp
$sql_form = "INSERT INTO `form_input_cp` (`id_form`,`nama_form`,`rev`,`cp_tipe`,`status`,`created_at`,`mem_id`) VALUES('','$nama_form',$rev,'$cp_tipe','$status','$tanggal_post',$mem_id)";
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
 window.location="form_sc.php";
 </script>
