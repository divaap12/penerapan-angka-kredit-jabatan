<?php
require_once("../../vendor/autoload.php");
require("../../pengaturan/medoo.php");
require("../../pengaturan/helper.php");
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id_sub_unsur'])){
  $db->update("tbl_butir_kegiatan", [
      'butir_kegiatan' => $_POST['butir_kegiatan'],
      'satuan' => $_POST['satuan'],
      'angka_kredit' => $_POST['angka_kredit']
    ],["id_butir" => $_POST['id_butir']]);
}

// Arahkan posisi ke halaman posisi kembali
header("Location: $alamat_web/unsur-kegiatan/butir-kegiatan/index.php?id_sub_unsur=".$_POST['id_sub_unsur']);
?>

