<?php
ob_start();
session_start();
include "../inc/koneksi.inc.php";
//get variable from address
$id_form = isset($_GET['f']) ? $_GET['f'] : '';
$id_detail_form = isset($_GET['d']) ? $_GET['d'] : '';
$order = isset($_GET['o']) ? $_GET['o'] : '';
$urutan = isset($_GET['u']) ? $_GET['u'] : '';

if($order=='up'){ //up
//get id sebelum urutan
$sql_switch = "SELECT id_detail_form FROM form_detail_cp WHERE urutan=$urutan-1";
$get_before_rec = mysql_query($sql_switch);
$id_before = mysql_fetch_array($get_before_rec);
$id_detail_b = $id_before['id_detail_form'];
//turunkan urutan 1
$sql_down = "UPDATE form_detail_cp SET urutan=urutan+1 WHERE id_detail_form=$id_detail_b";
$down =mysql_query($sql_down);
//naikan urutan rec 1
$sql_order = "UPDATE form_detail_cp SET urutan=urutan-1 WHERE id_detail_form=$id_detail_form";
$up = mysql_query($sql_order);
//set sukses message
$_SESSION['sukses'] = true;
$_SESSION['msg'] = "Urutan data berhasil diubah";

}else if($order=='down'){ //down
  //get id setelah urutan
  $sql_switch = "SELECT id_detail_form FROM form_detail_cp WHERE urutan=$urutan+1";
  $get_after_rec = mysql_query($sql_switch);
  $id_after = mysql_fetch_array($get_after_rec);
  $id_detail_a = $id_after['id_detail_form'];

  //turunkan urutan 1
  $sql_down = "UPDATE form_detail_cp SET urutan=urutan+1 WHERE id_detail_form=$id_detail_form";
  $down =mysql_query($sql_down);
  //naikan urutan rec 1
  $sql_order = "UPDATE form_detail_cp SET urutan=urutan-1 WHERE id_detail_form=$id_detail_a";
  $up = mysql_query($sql_order);
  //set sukses message
  $_SESSION['sukses'] = true;
  $_SESSION['msg'] = "Urutan data berhasil diubah";
}else{
  //set error message
  $_SESSION['error'] = true;
  $_SESSION['msg'] = mysql_errno() . ": " . mysql_error();
}

 ?>
 <script>
 window.location="form_sc_detail.php?f="+<?php echo $id_form; ?>;
 </script>
