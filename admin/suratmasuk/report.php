<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" contentent="IE=Edge">
    <title>Laporan Surat Masuk Dewan</title>
    <link rel="stylesheet" href="">
    <style>
       #divlaporan{ 
           border:1px navy solid;
           outline: 1px navy solid;
           outline-offset: 2px;
           width: 500px;
           text-align: center;
           margin: 0 auto;
        }

        h1{
            text-align: center;
        }

        h2{
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="box">
  <div class="box">
    <div class="box-header with-border">
    <h1>Laporan Surat Masuk Anggota Dewan</h1>
    </div>
    <div class="col-sm box-body" id="divlaporan">
        <form action="<?= site_url('lap_SMdewan/filter') ?>" method="POST">
        <input type="hidden" name="nilaifilter" value="1">
        <h2>Form Filter by Tanggal</h2>
        <hr>
        <h3>Tanggal Awal</h3>    
        <input type="date" name="tanggalawal" required><br>
        
        <h3>Tanggal Akhir</h3>    
        
        <input type="date" name="tanggalakhir" required><br>
        <hr>


        <input class="btn btn-primary" type="submit" value="Print">
        <br>
        <br>
        </form>
    </div>

    <br>
    
    <div class="col-sm" id="divlaporan">
        <form action="<?= site_url('lap_SMdewan/filter') ?>" method="POST">
        <input type="hidden" name="nilaifilter" value="2">
        <h2>Form Filter by Bulan</h2>
        <hr>
        <h3>Pilih Tahun</h3>    
            <select name="tahun1" required>

                <?php foreach ($tahun as $row): ?>

                <option value="<?=$row->tahun ?>"><?=$row->tahun ?></option>

                <?php endforeach ?>

            </select>
        
        <h3>Bulan Awal</h3>    
        
        <select name="bulanawal" required>
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Agustus</option>
            <option value="9">Oktober</option>
            <option value="10">September</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
        </select><br>
        
        <h3>Bulan Akhir</h3>
        <select name="bulanakhir" required>
            <option value="1">Januari</option>
            <option value="2">Februari</option>
            <option value="3">Maret</option>
            <option value="4">April</option>
            <option value="5">Mei</option>
            <option value="6">Juni</option>
            <option value="7">Juli</option>
            <option value="8">Agustus</option>
            <option value="9">Oktober</option>
            <option value="10">September</option>
            <option value="11">November</option>
            <option value="12">Desember</option>
            
        </select>
        <br>
        <br>
        <input class="btn btn-primary" type="submit" value="Print">
        <br>
        <br>
        </form>
    </div>

    <br>

    <div class="col-sm" id="divlaporan">
        <form action="<?= site_url('lap_SMdewan/filter') ?>" method="POST">
        <input type="hidden" name="nilaifilter" value="3">

        <h2>Form Filter by Tahun</h2>
        <br>
        <h3>Pilih Tahun</h3>
        <br>
        <select name="tahun2" required>

            <?php foreach ($tahun as $row): ?>

            <option value="<?=$row->tahun ?>"><?=$row->tahun ?></option>

            <?php endforeach ?>

        </select>
        <hr>
        <input class="btn btn-primary" type="submit" value="Print">
        <br>
        <br>
    </div>
  </div>

  <br>
</div>




</body>
</html>