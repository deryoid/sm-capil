<?php
require '../../config/config.php';
require '../../config/koneksi.php';
$id   = $_GET['id'];
$data = $koneksi->query("SELECT * FROM surat_masuk WHERE id_sm = '$id'");
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
                            <h1 class="m-0 text-dark">Ubah Surat Masuk</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Surat Masuk</li>
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
                                        <h3 class="card-title">Surat Masuk</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <!-- form start -->
                                    <div class="card-body" style="background-color: white;">
                                    <div class="form-group row">
                                            <label for="no_surat" class="col-sm-2 col-form-label">Nomor Surat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="no_surat" name="no_surat" value="<?= $row['no_surat']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="tgl_terima" class="col-sm-2 col-form-label">Tanggal Diterima</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tgl_terima" name="tgl_terima" value="<?= $row['tgl_terima']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="id_peg" class="col-sm-2 col-form-label">Pegawai</label>
                                            <div class="col-sm-10">
                                            <select class="form-control select2" data-placeholder="Pilih" id="id_peg" name="id_peg">
                                                <?php
                                                $data1 = $koneksi->query("SELECT * FROM pegawai ORDER BY id_peg ASC");
                                                while ($dsn = $data1->fetch_array()) {
                                                ?>
                                                    <option value="<?= $dsn['id_peg'] ?>" 
                                                    <?php if ($dsn['id_peg'] == $row['id_peg']) {
                                                         echo "selected";
                                                } ?>><?= $dsn['nama'] ?></option>
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
                                                        <option value="<?= $dk['id_kategori'] ?>" 
                                                        <?php if ($dk['id_kategori'] == $row['id_kategori']) {
                                                         echo "selected";
                                                        }?>><?= $dk['nama_kategori'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="ket_surat" class="col-sm-2 col-form-label"> Keterangan Surat</label>
                                            <div class="col-sm-10">
                                                <textarea type="text" class="form-control" id="ket_surat" name="ket_surat"><?php echo $row['ket_surat']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="file" class="col-sm-2 col-form-label">File Surat</label>
                                            <div class="col-sm-10"><span class="badge badge-info"> <?php echo $row['file']; ?></span> <br>
                                                <input type="file" class="form-control" id="file" name="file" >
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer" style="background-color: white;">
                                        <a href="<?= base_url('user/suratmasuk/') ?>" class="btn bg-gradient-secondary float-right"><i class="fa fa-arrow-left"> Batal</i></a>
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
        $no_surat        = $_POST['no_surat'];
        $tgl_terima      = $_POST['tgl_terima'];
        $id_peg          = $_POST['id_peg'];
        $id_kategori     = $_POST['id_kategori'];
        $ket_surat       = $_POST['ket_surat'];

              

// CEK APAKAH file DIGANTI
        if (!empty($_FILES['file']['name'])) {
            $filelama = $row['file'];

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
                    if (file_exists($dir_file . $filelama)) {
                        unlink($dir_file . $filelama);
                    }
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
        }else{
            $nama_file = $row['file'];
        }

        $submit = $koneksi->query("UPDATE surat_masuk SET  
                            no_surat = '$no_surat',
                            tgl_terima = '$tgl_terima',
                            id_peg = '$id_peg',
                            id_kategori = '$id_kategori',
                            ket_surat = '$ket_surat',
                            file = '$nama_file'
                            WHERE 
                            id_sm = '$id'");

        if ($submit) {
            $_SESSION['pesan'] = "Data Surat Masuk Ditambahkan";
            echo "<script>window.location.replace('../suratmasuk/');</script>";
        }
    }

    ?>

</body>

</html>