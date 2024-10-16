<?php 
include "koneksi.php";

$No_Pendaftaran = $_POST['No_Pendaftaran'];
$Nama = $_POST['Nama'];
$Tempat_Lahir=$_POST['Tempat_Lahir'];
$Tanggal_Lahir= $_POST['Tanggal_Lahir']; 
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

  $update = mysqli_query($kon, "UPDATE pendaftaran SET
      Nama='$Nama',
      Tempat_Lahir='$Tempat_Lahir',
      Tanggal_Lahir='$Tanggal_Lahir',
      Alamat='$Alamat',
      Agama='$Agama',
      Jenis_Kelamin='$Jenis_Kelamin',
      Kelurahan='$Kelurahan',
      Kecamatan='$Kecamatan',
      Kota='$Kota',
      Kabupaten='$Kabupaten',
      Provinsi='$Provinsi',
      No_Telepon='$No_Telepon',
      Nama_Sekolah='$Nama_Sekolah',
      Alamat_Sekolah='$Alamat_Sekolah',
      No_Telp_Sekolah='$No_Telp_Sekolah',
      Jurusan_1='$Jurusan_1',
      Jurusan_2='$Jurusan_2'
      WHERE No_Pendaftaran='$No_Pendaftaran'");
 

  // Use JavaScript to redirect to the read page after displaying the message
  if ($update){
  echo "<script>window.location.href= 'read.php';</script>";
  }




?>