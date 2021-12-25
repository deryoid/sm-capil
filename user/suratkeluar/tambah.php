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
                            <h1 class="m-0 text-dark">Surat Keluar</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Surat Keluar</li>
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
                                        <h3 class="card-title">Surat Keluar</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">


                                        <div class="form-group row">
                                            <label for="no_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="no_surat" name="no_surat">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_kirim" class="col-sm-2 col-form-label">Tanggal Dikirim</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tgl_kirim" name="tgl_kirim">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_kirim" class="col-sm-2 col-form-label">Tujuan Surat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tujuan" name="tujuan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="id_peg" class="col-sm-2 col-form-label">Pegawai</label>
                                            <div class="col-sm-10">
                                                <select class="form-control select2" data-placeholder="Pilih" id="id_peg" name="id_peg">
                                                    <option value=""></option>
                                                    <?php
                                                    $data1 = $koneksi->query("SELECT * FROM pegawai ORDER BY id_peg ASC");
                                                    while ($dsn = $data1->fetch_array()) {
                                                    ?>
                                                        <option value="<?= $dsn['id_peg'] ?>"><?= $dsn['nama'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="id_kategori" class="col-sm-2 col-form-label">Kategori</label>
                                            <div class="col-sm-10">
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
                                        <div class="form-group row">
                                            <label for="ket_surat" class="col-sm-2 col-form-label"> Keterangan Surat</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" id="ket_surat" name="ket_surat"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="file" class="col-sm-2 col-form-label">File Surat</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" id="file" name="file">
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('user/suratkeluar/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
        $no_surat        = $_POST['no_surat'];
        $tgl_kirim       = $_POST['tgl_kirim'];
        $tujuan          = $_POST['tujuan'];
        $id_peg          = $_POST['id_peg'];
        $id_kategori     = $_POST['id_kategori'];
        $ket_surat       = $_POST['ket_surat'];
    



// CEK APAKAH file DIGANTI
        if (!empty($_FILES['file']['name'])) {
          
            // UPLOAD file PEMOHON
            $file      = $_FILES['file']['name'];
            $x_file    = explode('.', $file);
            $ext_file  = end($x_file);
            $nama_file = rand(1, 99999) . '.' . $ext_file;
            $size_file = $_FILES['file']['size'];
            $tmp_file  = $_FILES['file']['tmp_name'];
            $dir_file  = '../../filesurat/';
            $allow_ext        = array('png', 'jpg', 'jpeg', 'zip', 'rar', 'pdf');
            $allow_size       = 2048 * 2048 * 1;
            // var_dump($nama_file); die();

            if (in_array($ext_file, $allow_ext) === true) {
                if ($size_file <= $allow_size) {
                    move_uploaded_file($tmp_file, $dir_file . $nama_file);
                    // if (file_exists($dir_file . $filelama)) {
                    //     unlink($dir_file . $filelama);
                    // }
                    // $e .= "Upload Success"; 
                } else {
                    echo "
                <script type='text/javascript'>
                setTimeout(function () {    
                    swal({
                        title: '',
                        text:  'Ukuran File Terlalu Besar, Maksimal 1 Mb',
                        type: 'warning',
                        timer: 3000,
                        showConfirmButton: true
                    });     
                },10);  
                window.setTimeout(function(){ 
                    window.history.back();
                } ,2000);   
                </script>";
                }
            } else {
                echo "
            <script type='text/javascript'>
            setTimeout(function () {    
                swal({
                    title: 'Format File Tidak Didukung',
                    text:  'Format File Harus Berupa PNG,JPG,RAR, ZIP',
                    type: 'warning',
                    timer: 3000,
                    showConfirmButton: true
                });     
            },10);  
            window.setTimeout(function(){ 
                window.history.back();
            } ,2000);   
            </script>";
            }
        } 
        // else {    
        //     $nama_file = $data['file']; 
        //     $e .= "Upload Success!"; 
        // }

        $submit = $koneksi->query("INSERT INTO surat_keluar VALUES (
            NULL,
            '$no_surat',
            '$tgl_kirim',
            '$tujuan',
            '$id_peg',
            '$id_kategori',
            '$ket_surat',
            'Menunggu',
            'Menunggu',
            'Menunggu Tanggapan',
            '$nama_file'
            )");
        // var_dump($submit, $koneksi->error);
        // die;
        if ($submit) {

            $_SESSION['pesan'] = "Data Surat Keluar Ditambahkan";
            echo "<script>window.location.replace('../suratkeluar/');</script>";
        }
    }
    ?>


</body>

</html>