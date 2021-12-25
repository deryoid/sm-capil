<?php

require '../../config/config.php';
require '../../config/koneksi.php';

$id    = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM inventaris WHERE id_barang = '$id'");


if ($hapus) {
   $_SESSION['pesan'] = "inventaris Berhasil dihapus";
   echo "<script>window.location.replace('../inventaris/');</script>";
}
