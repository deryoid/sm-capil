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
                            <h1 class="m-0 text-dark">Surat Tugas</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Surat Tugas</li>
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
                                        <h3 class="card-title">Surat Tugas</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">


                                        <div class="form-group row">
                                            <label for="no_surat" class="col-sm-2 col-form-label">Nomor Urut</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nomor_urut" name="nomor_urut">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="no_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="no_surat" name="no_surat">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_pd" class="col-sm-2 col-form-label">Tanggal Tugas</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tgl_st" name="tgl_st">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="no_surat" class="col-sm-2 col-form-label">Nama yang ditugaskan</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_st" name="nama_st">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ket_sst" class="col-sm-2 col-form-label"> Perihal</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" id="perihal" name="perihal"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tujuan_pd" class="col-sm-2 col-form-label"> Tujuan Tugas</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" id="tujuan_st" name="tujuan_st"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keperluan_pd" class="col-sm-2 col-form-label"> Keterangan Tugas</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" id="ket_st" name="ket_st"></textarea>
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
                                        <a href="<?= base_url('admin/st/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
        $nomor_urut        = $_POST['nomor_urut'];
        $no_surat        = $_POST['no_surat'];
        $tgl_st          = $_POST['tgl_st'];
        $nama_st          = $_POST['nama_st'];
        $perihal     = $_POST['perihal'];
        $tujuan_st       = $_POST['tujuan_st'];
        $ket_st         = $_POST['ket_st'];
    



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

        $submit = $koneksi->query("INSERT INTO surat_tugas VALUES (
            NULL,
            '$nomor_urut',
            '$no_surat',
            '$tgl_st',
            '$nama_st',
            '$perihal',
            '$tujuan_st',
            '$ket_st',
            '$nama_file'
            )");
        // var_dump($submit, $koneksi->error);
        // die;
        if ($submit) {

            $_SESSION['pesan'] = "Data Surat Tugas Ditambahkan";
            echo "<script>window.location.replace('../st/');</script>";
        }
    }
    ?>


</body>

</html>