<?php
    include 'Lib/library.php';

    $sql = "SELECT * FROM kelas";
    $dataKelas = $mysqli->query ($sql) or die ($mysqli->error);
    
    if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
        $nis              =    @$_POST ['nis'];
        $nama_lengkap     =    @$_POST ['nama_lengkap'];
        $jenis_kelamin    =    @$_POST ['jenis_kelamin'];
        $kelas            =    @$_POST ['id_kelas'];
        $alamat           =    @$_POST ['alamat'];
        $golongan_darah   =    @$_POST ['golongan_darah'];
        $ibu_kandung      =    @$_POST ['ibu_kandung'];
        $foto             =    @$_FILES['foto'];
        $file             =     $foto['name'];

       
        if (empty($nis)) {
            flash('error', 'NIS Kosong!');
        } else if (empty($nama_lengkap)) {
            flash('error1', 'Nama Lengkap Kosong!');
        } else {
            if (!empty ($foto) AND $foto['error'] == 0) {
                $path= './Assets/img/';
                $upload = move_uploaded_file ($foto ['tmp_name'], $path . $foto['name']);
                
                if (!$upload) {
                    flash('error', "Upload file gagal");
                    header ('location:index.php');
                }
                
                $File = $foto['name'];
            }
        
            $sql = "INSERT INTO siswa (nis, nama_lengkap, jenis_kelamin, id_kelas, alamat, golongan_darah, ibu_kandung, file ) 
                    VALUES ('$nis', '$nama_lengkap', '$jenis_kelamin', '$kelas', '$alamat', '$golongan_darah', '$ibu_kandung', '$file')";
            $mysqli->query($sql) or die($mysqli->error);
        
            header('location: index.php');
        }
    }

    $success = flash('success');
    $error = flash('error');
    $error1 = flash('error1');

    include 'views/v_tambah.php';
    ?>