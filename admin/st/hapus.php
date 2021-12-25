<?php

require '../../config/config.php';
require '../../config/koneksi.php';

$id    = $_GET['id'];
$data  = $koneksi->query("SELECT * FROM surat_pd WHERE id_spd = '$id'")->fetch_array();
$file  = $data['file'];
$hapus = $koneksi->query("DELETE FROM surat_pd WHERE id_spd = '$id'");


if ($hapus) {
   unlink('../../filesurat/' . $file);
   $_SESSION['pesan'] = "Surat Perjalanan Dinas Berhasil dihapus";
   echo "<script>window.location.replace('../spd/');</script>";
}
