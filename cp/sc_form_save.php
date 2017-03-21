<?php
ob_start();
session_start();
include "../inc/koneksi.inc.php";
//get mem_id from Session
$mem_id = $_SESSION['id_user'];
//set variable from sc_sectio.php
$id_ok = isset($_POST['id_ok']) ? $_POST['id_ok'] : '';
$id_form = isset($_POST['id_form']) ? $_POST['id_form'] : '';
$rencana_rawat = isset($_POST['rencana_rawat']) ? $_POST['rencana_rawat'] : '';
$dpjp = isset($_POST['dpjp']) ? $_POST['dpjp'] : '';
$penolong = isset($_POST['penolong']) ? $_POST['penolong'] : '';
$diagnosaM = isset($_POST['diagnosaM']) ? $_POST['diagnosaM'] : '';
$kodeICD_masuk = isset($_POST['kodeICD_masuk']) ? $_POST['kodeICD_masuk'] : '';
$diagnosaU = isset($_POST['diagnosaU']) ? $_POST['diagnosaU'] : '';
$kodeICD_utama = isset($_POST['kodeICD_utama']) ? $_POST['kodeICD_utama'] : '';
$diagnosaP = isset($_POST['diagnosaP']) ? $_POST['diagnosaP'] : '';
$kodeICD_penyerta = isset($_POST['kodeICD_penyerta']) ? $_POST['kodeICD_penyerta'] : '';
$nama_diagnosa = isset($_POST['nama_diagnosa']) ? $_POST['nama_diagnosa'] : '';
$diagnosaT = isset($_POST['diagnosaT']) ? $_POST['diagnosaT'] : '';
$kodeICD_tambahan = isset($_POST['kodeICD_tambahan']) ? $_POST['kodeICD_tambahan'] : '';
$komplikasi = isset($_POST['komplikasi']) ? $_POST['komplikasi'] : '';
$kodeICD_komplikasi = isset($_POST['kodeICD_komplikasi']) ? $_POST['kodeICD_komplikasi'] : '';
$tindakan = isset($_POST['tindakan']) ? $_POST['tindakan'] : '';
$kodeICD_tindakan = isset($_POST['kodeICD_tindakan']) ? $_POST['kodeICD_tindakan'] : '';
$ruang_rawat = isset($_POST['ruang_rawat']) ? $_POST['ruang_rawat'] : '';
$kelas = isset($_POST['kelas']) ? $_POST['kelas'] : '';
$tarifHarian = isset($_POST['tarifHarian']) ? $_POST['tarifHarian'] : 0;
$tanggal_masuk = isset($_POST['tanggal_masuk']) ? $_POST['tanggal_masuk'] : '';
$chunks = explode('/',$tanggal_masuk);
$f_tanggal_masuk = $chunks[2]."/".$chunks[1]."/".$chunks[0];
$tanggal_keluar = isset($_POST['tanggal_keluar']) ? $_POST['tanggal_keluar'] : '';
$parts = explode('/',$tanggal_keluar);
$f_tanggal_keluar = $parts[2]."/".$parts[1]."/".$parts[0];
$lama_rawat = isset($_POST['lama_rawat']) ? $_POST['lama_rawat'] : '';
$id_form = isset($_POST['id_form']) ? $_POST['id_form'] : '';
$varian = isset($_POST['varian']) ? $_POST['varian'] : '';
$created_at = date('Y/m/d H:i:s');
$nilai = isset($_POST['nilai']) ? $_POST['nilai'] : '';

$sql_asesmen = "INSERT INTO asesmen(`id_ok`,`rencana_rawat`,`id_drcp`,`penolong`,`diagnosaM`,`kodeICD_masuk`,`diagnosaU`,`kodeICD_utama`,`diagnosaP`,`kodeICD_penyerta`,`nama_diagnosa`,`diagnosaT`,`kodeICD_tambahan`,`komplikasi`,`kodeICD_komplikasi`,`tindakan`,`kodeICD_tindakan`,`ruang_rawat`,`kelas`,`tarif_harian`,`tanggal_masuk`,`tanggal_keluar`,`lama_rawat`,`varian`,`id_form`,`mem_id`,`created_at`) VALUES($id_ok,$rencana_rawat,$dpjp,'$penolong','$diagnosaM','$kodeICD_masuk','$diagnosaU','$kodeICD_utama','$diagnosaP','$kodeICD_penyerta','$nama_diagnosa','$diagnosaT','$kodeICD_tambahan','$komplikasi','$kodeICD_komplikasi','$tindakan','$kodeICD_tindakan','$ruang_rawat',$kelas,$tarifHarian,'$f_tanggal_masuk','$f_tanggal_keluar',$lama_rawat,'$varian',$id_form,$mem_id,'$created_at')";
$result = mysql_query($sql_asesmen);
$last_id = mysql_insert_id();
//grouping
foreach ($nilai as $item) {
  $split = explode('/',$item);
  $head = $split[0];
  $tail = $split[1];
  $key = $head;
  if (!isset($groups[$key])) {
      $groups[$key] = array(
          'list' => array($item),
          'count' => 1,
      );
  } else {
      $groups[$key]['list'][] = $item;
      $groups[$key]['count'] += 1;
  }
}
foreach ($groups as $key => $value) {
  for ($i=0; $i < count($value['list']) ; $i++) {
    $parts = explode('/',$value['list'][$i]);
    $id_detail_form = $parts[0];
    if($i== (count($value['list'])-1)){
      $h.= "`h".$parts[1]."`";
      $content .= "'y'";
    }else{
      $h.= "`h".$parts[1]."`,";
      $content .= "'y',";
    }
  }
  $sql = "INSERT INTO detail_asesmen (`id_asesmen`,`id_detail_form`,".$h.") VALUES (".$last_id.",".$id_detail_form.",".$content.")";
  $hasil = mysql_query($sql);
  if($hasil){
    echo "sukses ".$id_detail_form."<br>";
  }else{
    echo "fail : ".mysql_errno() . ": " . mysql_error();
  }
  $h = "";
  $content ="";
}

if($result){
  //set sukses message
  $_SESSION['sukses'] = true;
  $_SESSION['msg'] = "Data Berhasil disimpan";
}else{
  //set sukses message
  $_SESSION['error'] = true;
  $_SESSION['msg'] = mysql_errno() . ": " . mysql_error();
}
 ?>
 <script>
 window.location="sc_cp.php";
 </script>
