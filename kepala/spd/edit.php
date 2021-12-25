<?php
require '../../config/config.php';
require '../../config/koneksi.php';
$id   = $_GET['id'];
$data = $koneksi->query("SELECT * FROM surat_pd WHERE id_spd = '$id'");
$row  = $data->fetch_array();
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
                            <h1 class="m-0 text-dark">Ubah Surat Perjalan Dinas</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Surat Perjalan Dinas</li>
                                <li class="breadcrumb-item active">Ubah Data</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- left column -->
                    <form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">

                        <div class="row">
                            <div class="col-md-12">
                                <!-- Horizontal Form -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Surat Perjalanan Dinas</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">
                                    <div class="form-group row">
                                            <label for="no_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="no_surat" name="no_surat" value="<?= $row['no_surat']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_pd" class="col-sm-2 col-form-label">Tanggal Perjalanan Dinas</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tgl_pd" name="tgl_pd" value="<?= $row['tgl_pd']; ?>" readonly>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="ket_spd" class="col-sm-2 col-form-label"> Keterangan Perjalanan Dinas</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" id="ket_spd" name="ket_spd" readonly><?php echo $row['ket_spd']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tujuan_pd" class="col-sm-2 col-form-label"> Tujuan Perjalanan Dinas</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" id="tujuan_pd" name="tujuan_pd" readonly><?php echo $row['tujuan_pd']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keperluan_pd" class="col-sm-2 col-form-label"> Keperluan Perjalanan Dinas</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" id="keperluan_pd" name="keperluan_pd" readonly><?php echo $row['keperluan_pd']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="status_pimpinan" class="col-sm-2 col-form-label">Status Tanggapan</label>
                                            <div class="col-sm-10">
                                            <select class="form-control select2"  id="status_pimpinan" name="status_pimpinan">
                                                    <option value="Disetujui" <?php if ($row['status_pimpinan'] == "Disetujui") {
                                                                            echo "selected";
                                                                            } ?>>Disetujui</option>
                                                    <option value="Menunggu" <?php if ($row['status_pimpinan'] == "Menunggu") {
                                                                                echo "selected";
                                                                            } ?>>Menunggu</option>
                                                    <option value="Ditolak" <?php if ($row['status_pimpinan'] == "Ditolak") {
                                                                                echo "selected";
                                                                            } ?>>Ditolak</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tanggapan" class="col-sm-2 col-form-label"> Berikan Tanggapan</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" id="tanggapan" name="tanggapan"><?php echo $row['tanggapan']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="file" class="col-sm-2 col-form-label">File Surat</label>
                                            <div class="col-sm-10">
                                                <embed bordered src="<?= base_url(); ?>/filesurat/<?= $row['file']?>" type="application/pdf" width="600" height="620">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('kepala/spd/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
                                        <button type="submit" name="submit" class="btn bg-gradient-primary float-right mr-2"><i class="fa fa-save"> Ubah</i></button>
                                    </div>
                                    <!-- /.card-footer -->

                                </div>

                            </div>
                            <!--/.col (left) -->
                        </div>

                    </form>

                </div><!-- /.container-fluid -->
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


    <?php
    if (isset($_POST['submit'])) {
        $status_pimpinan  = $_POST['status_pimpinan'];
        $tanggapan        = $_POST['tanggapan'];
        

        $submit = $koneksi->query("UPDATE surat_pd SET  
                            status_pimpinan = '$status_pimpinan',
                            tanggapan = '$tanggapan'
                            WHERE 
                            id_spd = '$id'");

        if ($submit) {
            $_SESSION['pesan'] = "Tanggapan Surat Perjalanan Dinas Ditanggapi";
            echo "<script>window.location.replace('../spd/');</script>";
        }
    }

    ?>

</body>

</html>