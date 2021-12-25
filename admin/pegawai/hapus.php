<?php

require '../../config/config.php';
require '../../config/koneksi.php';

$id    = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM pegawai WHERE id_peg = '$id'");


if ($hapus) {
   $_SESSION['pesan'] = "Pegawai Berhasil dihapus";
   echo "<script>window.location.replace('../pegawai/');</script>";
}
