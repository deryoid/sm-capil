<?php
include '../../config/config.php';
include '../../config/koneksi.php';

$no = 1;

$data = $koneksi->query("SELECT * FROM inventaris");

$bln = array(
    '01' => 'Januari',
    '02' => 'Februari',
    '03' => 'Maret',
    '04' => 'April',
    '05' => 'Mei',
    '06' => 'Juni',
    '07' => 'Juli',
    '08' => 'Agustus',
    '09' => 'September',
    '10' => 'Oktober',
    '11' => 'November',
    '12' => 'Desember'
);

?>

<script type="text/javascript">
    window.print();
</script>

<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN DATA </title>
</head>

<body>
<img src="<?= base_url('assets/dist/img/kop-logo.png') ?>" align="left" width="90" height="90">
    <p align="center"><b>
        <font size="4,5" align="center">PEMERINTAH KABUPATEN HULU SUNGAI SELATAN </font> <br>
        <font size="5" align="center">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</font><br>
        <font size="2">Jalan Jenderal Achmad Yani Km.2,5 Gambah Luar  No.80 Telepon (0517) 21302</font><br>
        <font size="2">Website : www.dukcapil-hss.Org E-mail : pelayanan @ dukcatpil-hss.org</font><br>
        <hr size="2px" color="black">
        </b></p>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">
                <table border="1" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Merk</th>
                            <th>Nama Barang</th>
                            <th>Kode Aset</th>
                            <th>Tahun Perolehan</th>
                            <th>Sumberdana</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($row = mysqli_fetch_array($data)) { ?>
                            <tr>
                                <td align="center"><?= $no++ ?></td>
                                <td><?= $row['merk'] ?></td>
                                <td><?= $row['nama_barang'] ?></td>
                                <td><?= $row['kode_aset'] ?></td>
                                <td><?= $row['tahun_perolehan'] ?></td>
                                <td><?= $row['sumber_dana'] ?></td>
                                <td><?= $row['jumlah'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <br>
    <br>
  <div id="123" class="pull-right" style="float: right;">
    <h5>
      Kandangan _________________<br>
      Mengetahui,<br>
    </h5>

    </div>


</body>

</html>

<script>
    <?php
    function tgl_indo($tanggal)
    {
        $bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

        return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
    }

    ?>
</script>