<?php
session_start();
include "../inc/koneksi.inc.php";

$id_asesmen = isset($_POST['id_asesmen']) ? $_POST['id_asesmen'] : '';
$biaya_riil = isset($_POST['biaya_riil']) ? $_POST['biaya_riil'] : '';
$cara_bayar = isset($_POST['cara_bayar']) ? $_POST['cara_bayar'] : '';

$sql = "UPDATE asesmen SET biaya_riil=$biaya_riil,cara_bayar='$cara_bayar' WHERE id_asesmen=$id_asesmen";
$result = mysql_query($sql);

if($result){
  //set sukses message
  $_SESSION['sukses'] = true;
  $_SESSION['msg'] = "Biaya Riil sebesar ".number_format($biaya_riil,2,',','.')." berhasil disimpan";
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
