<?php

function base_url()  {
    return "http://localhost/PWPB/";
}
function flash($tipe, $pesan = ''){
    if (empty($pesan)) {
        $pesan = @$_SESSION[$tipe];
        unset($_SESSION[$tipe]);
        return $pesan;

    }else {
        $_SESSION[$tipe] = $pesan;
    }
}

function chekLogin(){
    $username = @$_SESSION['username'];
    $level = @$_SESSION['level'];

    if (empty($username) AND empty($level)){
        header("location: login.php");
    }
}

function sudahLogin(){
    $username = @$_SESSION['username'];
    $level = @$_SESSION['level'];

    if (!empty($username) AND !empty($level)) {
        header("location: index.php");
    }
}
