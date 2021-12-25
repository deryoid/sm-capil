<?php

require '../../config/config.php';
require '../../config/koneksi.php';

$id    = $_GET['id'];
$hapus = $koneksi->query("DELETE FROM user WHERE id_user = '$id'");


if ($hapus) {
   $_SESSION['pesan'] = "User Berhasil dihapus";
   echo "<script>window.location.replace('../user/');</script>";
}
