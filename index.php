<?php

include 'Lib/library.php';

$success = flash('success');
$error = flash('error');
$error1 = flash('error1');

chekLogin();


$sql = 'SELECT * FROM siswa INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas';

$search = @$_GET ['search'];
if (!empty ($search)) 
    $sql .= " WHERE nis LIKE '%$search%' OR nama_lengkap LIKE '%$search%' OR jenis_kelamin LIKE '%$search%' OR nama_kelas LIKE '%$search%' OR jurusan LIKE '%$search%' OR alamat LIKE '%$search%'";

$order_field = @$_GET ['sort']; //Mengambil field yang akan di order
$order_mode = @$_GET ['order']; //Mengambil modenya
if (!empty ($order_field) && !empty ($order_mode)) $sql .= " ORDER BY $order_field $order_mode";

$listSiswa = $mysqli -> query ($sql);

include 'Views/v_index.php';