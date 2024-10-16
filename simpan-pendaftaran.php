<?php
include "koneksi.php";

$No_Pendaftaran = $_POST["No_Pendaftaran"];
$Nama = $_POST["Nama"];
$Tempat_Lahir = $_POST["Tempat_Lahir"];
$Tanggal_Lahir = $_POST["Tanggal_Lahir"];
$Alamat = $_POST["Alamat"];
$Agama = $_POST["Agama"];
$Jenis_Kelamin = $_POST["Jenis_Kelamin"];
$Kelurahan = $_POST["Kelurahan"];
$Kecamatan = $_POST["Kecamatan"];
$Kota = $_POST["Kota"];
$Kabupaten = $_POST["Kabupaten"];
$Provinsi = $_POST["Provinsi"];
$No_Telepon = $_POST["No_Telepon"];
$Nama_Sekolah = $_POST["Nama_Sekolah"];
$Alamat_Sekolah = $_POST["Alamat_Sekolah"];
$No_Telp_Sekolah = $_POST["No_Telp_Sekolah"];
$Jurusan_1 = $_POST["Jurusan_1"];
$Jurusan_2 = $_POST["Jurusan_2"];

$sql = "INSERT INTO pendaftaran (No_pendaftaran, Nama, Tempat_Lahir, Tanggal_Lahir, Alamat, Agama,
        Jenis_Kelamin, Kelurahan, Kecamatan, Kota, Kabupaten, Provinsi, No_Telepon, Nama_Sekolah, Alamat_Sekolah,
        No_Telp_Sekolah, Jurusan_1, Jurusan_2) VALUES
        ('$No_Pendaftaran', '$Nama', '$Tempat_Lahir', '$Tanggal_Lahir', '$Alamat', '$Agama',
        '$Jenis_Kelamin', '$Kelurahan', '$Kecamatan', '$Kota', '$Kabupaten', '$Provinsi', '$No_Telepon',
        '$Nama_Sekolah', '$Alamat_Sekolah', '$No_Telp_Sekolah', '$Jurusan_1', '$Jurusan_2')";

$hasil = mysqli_query($kon, $sql);


if ($hasil) {
    header("location:read.php"); 
    
} else {
    echo "Gagal simpan data anggota: " . mysqli_error($kon);


}
?>
