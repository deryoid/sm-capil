<?php

require '../../config/config.php';
require '../../config/koneksi.php';

$id    = $_GET['id'];
$data  = $koneksi->query("SELECT * FROM surat_keluar WHERE id_sk = '$id'")->fetch_array();
$file  = $data['file'];
$hapus = $koneksi->query("DELETE FROM surat_keluar WHERE id_sk = '$id'");


if ($hapus) {
   unlink('../../filesurat/' . $file);
   $_SESSION['pesan'] = "Surat Keluar Berhasil dihapus";
   echo "<script>window.location.replace('../suratkeluar/');</script>";
}
