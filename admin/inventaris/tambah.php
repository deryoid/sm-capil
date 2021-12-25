<?php
require '../../config/config.php';
require '../../config/koneksi.php';
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
                            <h1 class="m-0 text-dark">Inventaris</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Inventaris</li>
                                <li class="breadcrumb-item active">Tambah Data</li>
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
                                        <h3 class="card-title">Inventaris</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">


                                        <div class="form-group row">
                                            <label for="nama_kategori" class="col-sm-2 col-form-label">Merk</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="merk" name="merk">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ket" class="col-sm-2 col-form-label">Nama Barang</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ket" class="col-sm-2 col-form-label">Kode Aset</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kode_aset" name="kode_aset">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ket" class="col-sm-2 col-form-label">Tahun Perolehan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tahun_perolehan" name="tahun_perolehan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ket" class="col-sm-2 col-form-label">Sumber Dana</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="sumber_dana" name="sumber_dana">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ket" class="col-sm-2 col-form-label">Jumlah</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="jumlah" name="jumlah">
                                            </div>
                                        </div>
                                                                              
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/inventaris/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
                                        <button type="submit" name="submit" class="btn bg-gradient-primary float-right mr-2"><i class="fa fa-save"> Simpan</i></button>
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
        $merk        = $_POST['merk'];
        $nama_barang  = $_POST['nama_barang'];
        $kode_aset  = $_POST['kode_aset'];
        $tahun_perolehan  = $_POST['tahun_perolehan'];
        $sumber_dana  = $_POST['sumber_dana'];
        $jumlah  = $_POST['jumlah'];
    

        $submit = $koneksi->query("INSERT INTO inventaris VALUES (
            NULL,
            '$merk',
            '$nama_barang',
            '$kode_aset',
            '$tahun_perolehan',
            '$sumber_dana',
            '$jumlah'
            )");
        // var_dump($submit, $koneksi->error);
        // die;
        if ($submit) {

            $_SESSION['pesan'] = "Data inventaris Ditambahkan";
            echo "<script>window.location.replace('../inventaris/');</script>";
        }
    }
    ?>


</body>

</html>