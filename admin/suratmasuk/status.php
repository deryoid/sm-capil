<?php
require '../../config/config.php';
require '../../config/koneksi.php';

$id   =  $_GET['id'];
$v    = $_GET['v'];

if ($v == "Disetujui") {
    $submit = $koneksi->query("UPDATE surat_masuk SET  status_admin = '$v' WHERE id_sm = '$id'");
} elseif ($v == "Ditolak") {
    $submit = $koneksi->query("UPDATE surat_masuk SET status_admin = '$v' WHERE id_sm = '$id'");
} else {
    $submit = $koneksi->query("UPDATE surat_masuk SET status_admin = '$v' WHERE id_sm = '$id'");
}

if ($submit) {

    $data = $koneksi->query("SELECT * FROM surat_masuk WHERE id_sm = '$id'")->fetch_array();



    $_SESSION['pesan'] = "Status Surat Masuk Diubah";
    echo "<script>window.location.replace('../suratmasuk');</script>";
}