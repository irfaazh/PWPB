<html>
<head>
    <title>Tambah PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #ffe4c4;
        }

        form {
            background-color: #FFF8DC;
            border: 1px solid #dee2e6;
            box-shadow: 0 2px 4px #E9967A;
            padding: 20px;
            border-radius: 8px;
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 20px;
        }

label {
    font-weight: bold;
}

img {
    margin-top: 10px;
    margin-bottom: 10px;
    display: block;
    max-width: 100%;
}

button {
    margin-top: 20px;
}

.alert {
    text-align: center;
    margin: 0 auto;
    max-width: 250px; 
    padding: 15px;
    border-radius: 5px;
    margin-top: 20px;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    border: 1px solid #f5c6cb;
}



    </style>
</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <?php
    $action = 'tambah.php';
    if (!empty ($siswa) ) $action = 'edit.php';
    ?>

<?php if (!empty($success)) { ?>
    <div class="alert alert-success">
        <p><?= $success ?></p>
    </div>
<?php } ?>

<?php if (!empty($error)) { ?>
    <div class="alert alert-danger">
        <p><?= $error ?></p>
    </div>
<?php } ?>

<?php if (!empty($error1)) { ?>
    <div class="alert alert-danger">
        <p><?= $error1 ?></p>
    </div>
<?php } ?>

<form action= "<?= $action ?>" method="POST" enctype = "multipart/form-data" class="col-md-6 mx-auto">
<center><b>Edit/Tambah Data</b></center><br>
  <div class="form-group">
    <label for="nis">NIS:</label>
    <input type="text" class="form-control" name="nis" value="<?= @$siswa['nis'] ?>">
  </div>

  <div class="form-group">
    <label for="nama_lengkap">Nama Lengkap:</label>
    <input type="text" class="form-control" name="nama_lengkap" value="<?= @$siswa['nama_lengkap'] ?>">
  </div>

  <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <select name="jenis_kelamin" class="form-control">
      <option value="Laki-Laki" <?= @$siswa['jenis_kelamin'] == 'Laki-Laki' ? 'selected' : '' ?>>Laki-Laki</option>
      <option value="Perempuan" <?= @$siswa['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
    </select>
  </div>

  <div class="form-group">
    <label for="kelas">Kelas:</label>
  <select name="id_kelas" class="select1">
    <option value="">[ Pilih Kelas ] </option>
    <?php while ($murid = @$dataKelas -> fetch_array ()) { ?>
    <option value="<?php echo $murid [ 'id_kelas' ] ?>" <?php echo @$siswa [ 'id_kelas' ] == $murid ['id_kelas'] ? 'selected'  : '' ?>>
    <?php echo $murid ['nama_kelas'] ?>
    </option>
    <?php } ?>
    </select>
  </div>

  <div class="form-group">
    <label for="alamat">Alamat:</label>
    <input type="text" class="form-control" name="alamat" value="<?= @$siswa ['alamat'] ?>">
  </div>

  <div class="form-group">
    <label for="golongan_darah">Golongan Darah:</label>
    <input type="text" class="form-control" name="golongan_darah" value="<?= @$siswa ['golongan_darah'] ?>">
  </div>

  <div class="form-group">
    <label for="ibu_kandung">Ibu Kandung:</label>
    <input type="text" class="form-control " name="ibu_kandung" value="<?= @$siswa ['ibu_kandung'] ?>">
  </div>

  <div class="form-group">
    <label for="foto">Foto:</label>
    <?php if ($action == "edit.php") { ?>
      <img width="100" height="110" src="<?php echo empty ($siswa['file']) ? 'Assets/img/ava.png' : 'Assets/img' .$siswa['file']; ?>" id ="output">

      <input type="hidden" name="foto" value="<?php echo @$siswa ['file'] ?>">
    <?php } else { ?>
      <img src ="Assets/img/ava.png" id="output" style="width:100px;height:100px;">
    <?php } ?>
    <input type="file" name="foto" class="border" autocomplate="off" onchange="loadFile(event)">
  </div>

  <button type="submit" class="btn btn-primary">Simpan Data</button>
</form>
</body>
</html>