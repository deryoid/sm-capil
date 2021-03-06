<?php
require '../../config/config.php';
require '../../config/koneksi.php';
require '../../config/day.php';
?>
<!DOCTYPE html>
<html>
<?php
include '../../templates/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php
        include '../../templates/navbar.php';
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include '../../templates/sidebar.php';
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Surat Tugas</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Surat Tugas</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <a href="tambah" class="btn bg-blue"><i class="fa fa-plus-circle"> Tambah Data</i></a>
                                    <a href="print" target="blank" class="btn bg-info" ><i class="fa fa-print"> Cetak</i></a>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <?php
                                    if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
                                    ?>
                                        <div class="alert alert-info alertinfo" role="alert">
                                            <i class="fa fa-check-circle"> <?= $_SESSION['pesan']; ?></i>
                                        </div>
                                    <?php
                                        $_SESSION['pesan'] = '';
                                    }
                                    ?>

                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead class="bg-blue">
                                                <tr align="center">
                                                    <th>No</th>
                                                    <th>No Urut</th>
                                                    <th>Nomor Surat Tugas</th>
                                                    <th>Tanggal Tugas</th>
                                                    <th>Nama Yang Ditugaskan</th>
                                                    <th>Perihal</th>
                                                    <th>Tujuan Tugas</th>
                                                    <th>Keterangan Tugas</th>
                                                    <th>File</th>
                                                    <th>Opsi</th>
                                                </tr>
                                            </thead>
                                                <tbody style="background-color: azure">
                                            <?php
                                            $no = 1;
                                            $data = $koneksi->query("SELECT * FROM
                                            surat_tugas
                                            ORDER BY id_st DESC");
                                            while ($row = $data->fetch_array()) {
                                            ?>
                                                    <tr>
                                                        <td align="center"><?= $no++ ?></td>
                                                        <td><?= $row['no_surat'] ?></td>
                                                        <td><?= $row['nomor_urut'] ?></td>
                                                        <td><?= $row['tgl_st'] ? tgl_indo($row['tgl_st']) : '--/--/----'; ?></td>
                                                        <td><?= $row['nama_st'] ?></td>
                                                        <td><?= $row['perihal'] ?></td>
                                                        <td><?= $row['tujuan_st'] ?></td>
                                                        <td><?= $row['ket_st'] ?></td>
                                                        <td><a href="<?= base_url(); ?>/filesurat/<?= $row['file']?>" data-title="file" data-gallery="galery" title="Lihat" target="blank"><i>Lihat File</i></a></td>
                                                        
                                                         <td align="center">
                                                         <a href="hapus?id=<?= $row['id_st'] ?>" class="btn btn-danger btn-sm alert-hapus" title="Hapus"><i class="fa fa-trash"></i></a>
                                                            
                                                        </td>
                                                    </tr>
                                            <?php } ?>
                                                </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php include_once "../../templates/footer.php"; ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php include_once "../../templates/script.php"; ?>

    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox({
                alwaysShowClose: true
            });
        });
    </script>

</body>

</html>


<!-- MODAL LAPORAN SURAT PERJALANAN DINAS -->
<div id="lap_suratmasuk" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button> -->
                <h4 class="modal-title">Laporan Surat Perjalanan Dinas</h4>
            </div>
            <div class="modal-body">

            <!-- kategori -->
            <label style="font-size: 15px; font-style: bold;">Berdasarkan Kategori</label>
                <form method="POST" target="blank" action="<?= base_url('admin/spd/print.php') ?>">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                            <select class="form-control select2" data-placeholder="Pilih" id="id_kategori" name="id_kategori">
                                <option value=""></option>
                                <?php
                                $data2 = $koneksi->query("SELECT * FROM kategori ORDER BY id_kategori ASC");
                                while ($dk = $data2->fetch_array()) {
                                ?>
                                    <option value="<?= $dk['id_kategori'] ?>"><?= $dk['nama_kategori'] ?></option>
                                <?php } ?>
                            </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <button type="submit" name="c1" class="btn btn-info waves-effect waves-light m-l-10 btn-md"><i class="mdi mdi-printer"></i> Cetak</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end kategori -->
                <hr>
                <!-- tanggal -->
                <label style="font-size: 15px; font-style: bold;">Berdasarkan Tanggal</label>
                <form method="POST" target="blank" action="<?= base_url('admin/spd/print.php') ?>">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="date" name="tgl1" class="form-control" required="" value="<?php echo $date_old; ?>">
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="date" name="tgl2" class="form-control" required="" value="<?php echo $date_now; ?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <button type="submit" name="cetak" class="btn btn-info waves-effect waves-light m-l-10 btn-md"><i class="mdi mdi-printer"></i> Cetak</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end tanggal -->

            </div><!-- modal body -->

            <div class="modal-footer">
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal"><i class="mdi mdi-close"></i> Batal</button>
            </div>
        </div>
    </div>
</div>