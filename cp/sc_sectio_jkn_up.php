<?php
session_start();
include "../inc/koneksi.inc.php";

$id_asesmen = isset($_POST['id_asesmen']) ? $_POST['id_asesmen'] : '';
$biaya_klaim = isset($_POST['biaya_klaim']) ? $_POST['biaya_klaim'] : '';

$sql = "UPDATE asesmen SET biaya_klaim=$biaya_klaim WHERE id_asesmen=$id_asesmen";
$result = mysql_query($sql);

if($result){
  //set sukses message
  $_SESSION['sukses'] = true;
  $_SESSION['msg'] = "Biaya Klaim sebesar ".number_format($biaya_klaim,2,',','.')." berhasil disimpan";
}else{
  //set sukses message
  $_SESSION['error'] = true;
  $_SESSION['msg'] = mysql_errno() . ": " . mysql_error();
}
 ?>
 <script>
 window.location="sc_cp.php";
 </script>
?>
