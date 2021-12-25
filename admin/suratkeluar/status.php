<?php
require '../../config/config.php';
require '../../config/koneksi.php';

$id   =  $_GET['id'];
$v    = $_GET['v'];

if ($v == "Disetujui") {
    $submit = $koneksi->query("UPDATE surat_keluar SET  status_admin = '$v' WHERE id_sk = '$id'");
} elseif ($v == "Ditolak") {
    $submit = $koneksi->query("UPDATE surat_keluar SET status_admin = '$v' WHERE id_sk = '$id'");
} else {
    $submit = $koneksi->query("UPDATE surat_keluar SET status_admin = '$v' WHERE id_sk = '$id'");
}

if ($submit) {

    $data = $koneksi->query("SELECT * FROM surat_keluar WHERE id_sk = '$id'")->fetch_array();



    $_SESSION['pesan'] = "Status Surat Keluar Diubah";
    echo "<script>window.location.replace('../suratkeluar');</script>";
}