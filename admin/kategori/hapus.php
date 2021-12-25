<?php

require '../../config/config.php';
require '../../config/koneksi.php';

$id    = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM kategori WHERE id_kategori = '$id'");


if ($hapus) {
   $_SESSION['pesan'] = "Kategori Berhasil dihapus";
   echo "<script>window.location.replace('../kategori/');</script>";
}
