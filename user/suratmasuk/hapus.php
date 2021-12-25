<?php

require '../../config/config.php';
require '../../config/koneksi.php';

$id    = $_GET['id'];
$data  = $koneksi->query("SELECT * FROM surat_masuk WHERE id_sm = '$id'")->fetch_array();
$file  = $data['file'];
$hapus = $koneksi->query("DELETE FROM surat_masuk WHERE id_sm = '$id'");


if ($hapus) {
   unlink('../../filesurat/' . $file);
   $_SESSION['pesan'] = "Surat Masuk Berhasil dihapus";
   echo "<script>window.location.replace('../suratmasuk/');</script>";
}
