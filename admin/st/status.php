<?php
require '../../config/config.php';
require '../../config/koneksi.php';

$id   =  $_GET['id'];
$v    = $_GET['v'];

if ($v == "Disetujui") {
    $submit = $koneksi->query("UPDATE surat_pd SET  status_admin = '$v' WHERE id_spd = '$id'");
} elseif ($v == "Ditolak") {
    $submit = $koneksi->query("UPDATE surat_pd SET status_admin = '$v' WHERE id_spd = '$id'");
} else {
    $submit = $koneksi->query("UPDATE surat_pd SET status_admin = '$v' WHERE id_spd = '$id'");
}

if ($submit) {

    $data = $koneksi->query("SELECT * FROM surat_pd WHERE id_spd = '$id'")->fetch_array();



    $_SESSION['pesan'] = "Status Surat Perjalanan Dinas Diubah";
    echo "<script>window.location.replace('../spd');</script>";
}