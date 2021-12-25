<?php
include '../../config/config.php';
include '../../config/koneksi.php';

$no = 1;

$data = $koneksi->query("SELECT * FROM pegawai ORDER BY jabatan ASC");

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
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Golongan</th>
                            <th>JK</th>
                            <th>Agama</th>
                            <th>TTL</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php while ($row = mysqli_fetch_array($data)) { ?>
                            <tr>
                            <td align="center"><?= $no++ ?></td>
                            <td><?= $row['nip'] ?></td>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['jabatan'] ?></td>
                            <td align="center"><?= $row['golongan'] ?></td>
                            <td><?= $row['jk'] ?></td>
                            <td><?= $row['agama'] ?></td>
                            <td><?= $row['tmp_lhr']." / ".tgl_indo($row['tgl_lhr']) ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>

            </div>
        </div>
    </div>
    <br>

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