<?php
session_start();
include 'Lib/helper.php';
$host = 'localhost';
$user = 'root';
$pass = '12345678';
$db= 'pwpb';

$mysqli = mysqli_connect ($host, $user, $pass, $db) or die ('Tidak dapat koneksi ke Database');
?>
