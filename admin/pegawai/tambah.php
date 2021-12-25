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
                            <h1 class="m-0 text-dark">Pegawai</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Pegawai</li>
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
                                        <h3 class="card-title">Pegawai</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">


                                        <div class="form-group row">
                                            <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nip" name="nip">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama" name="nama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="jabatan" name="jabatan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="golongan" class="col-sm-2 col-form-label">Golongan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="golongan" name="golongan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                            <select class="form-control select2"  id="jk" name="jk">
                                                    <option>--Pilih--</option>
                                                    <option value="Laki - Laki">Laki - Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                            </select>
                                            </div>
                                        </div>
                                                                     
                                        <div class="form-group row">
                                            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                            <div class="col-sm-10">
                                            <select class="form-control select2"  id="agama" name="agama">
                                                    <option>--Pilih--</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Kongkuchu">Kongkuchu</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tmp_lhr" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tmp_lhr" name="tmp_lhr">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_lhr" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tgl_lhr" name="tgl_lhr">
                                            </div>
                                        </div>                         
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('admin/pegawai/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
        $nip        = $_POST['nip'];
        $nama       = $_POST['nama'];
        $jabatan    = $_POST['jabatan'];
        $golongan   = $_POST['golongan'];
        $jk          = $_POST['jk'];
        $agama       = $_POST['agama'];
        $tmp_lhr       = $_POST['tmp_lhr'];
        $tgl_lhr       = $_POST['tgl_lhr'];
    

        $submit = $koneksi->query("INSERT INTO pegawai VALUES (
            NULL,
            '$nip',
            '$nama',
            '$jabatan',
            '$golongan',
            '$jk',
            '$agama',
            '$tmp_lhr',
            '$tgl_lhr'
            )");
        // var_dump($submit, $koneksi->error);
        // die;
        if ($submit) {

            $_SESSION['pesan'] = "Data Pegawai Ditambahkan";
            echo "<script>window.location.replace('../pegawai/');</script>";
        }
    }
    ?>


</body>

</html>