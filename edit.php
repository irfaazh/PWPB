<html>
<head>
    <title>Ini edit PHP </title>
</head>
<body>
    <?php
    include 'Lib/library.php';

    $nis = $_GET ['nis'];
    
    if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
        $nis = $_POST ['nis'];
        $nama_lengkap = $_POST ['nama_lengkap'];
        $jenis_kelamin = $_POST ['jenis_kelamin'];
        $kelas = $_POST ['id_kelas'];
        $alamat = $_POST ['alamat'];
        $golongan_darah = $_POST ['golongan_darah'];
        $ibu_kandung = $_POST ['ibu_kandung'];
        $foto = @$_FILES['foto'];
        $file = $_POST['foto'];

        if (!empty ($foto) && $foto['error'] == 0) {
            $path= './Assets/img/';
            $upload = move_uploaded_file ($foto ['tmp_name'], $path . $foto['name']);

            if (!$upload) {
                flash('error', "Upload file gagal");
                header ('location:index.php');
            }
            $file = $foto['name'];
        }

        $sql = "UPDATE siswa SET nis = '$nis',
        nama_lengkap = '$nama_lengkap',
        jenis_kelamin = '$jenis_kelamin',
        id_kelas = '$kelas', 
        alamat = '$alamat', 
        golongan_darah = '$golongan_darah', 
        ibu_kandung = '$ibu_kandung',
        file = '$file' WHERE nis = '$nis' ";

        $mysqli -> query ($sql) or die ($mysqli -> error);

        header ('location: index.php');
    }

    if (empty ($nis)) header ('location: index.php');

    $sql = "SELECT * FROM siswa WHERE nis = '$nis' ";
    $query = $mysqli -> query ($sql);
    $siswa = $query -> fetch_array();

    if (empty ($siswa)) header ('location: index.php');

    $sql = " SELECT * FROM kelas ";
    $dataKelas = $mysqli -> query ($sql) or die ($mysqli -> error);

    $form = "edit";
    $url = "edit.php";


    include 'Views/v_tambah.php';

    ?>
</body>
</html>