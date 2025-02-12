<?php

var_dump($_POST);
var_dump($_POST['extra']);

// simpan form ke database
// simpan ke tabel siswa
$koneksi = mysqli_connect('localhost', '', '', '');

$query = "INSERT INTO siswa (
    nisn,
    nama_lengkap,
    tempat_lahir,
    tanggal_lahir,
    gender,
    agama,
    alamat,
    asal_sekolah,
    jurusan1,
    jurusan2,
    extra
) VALUES (
    '$_POST[nisn]',
    '$_POST[nama]',
    '$_POST[tempat_lahir]',
    '$_POST[tanggal_lahir]',
    '$_POST[gender]',
    '$_POST[agama]',
    '$_POST[alamat]',
    '$_POST[asal_sekolah]',
    '$_POST[jurusan1]',
    '$_POST[jurusan2]',
    '$_POST[extra]',
)";

var_dump($query);

mysqli_query($koneksi, $query);