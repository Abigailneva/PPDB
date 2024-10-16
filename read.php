<?php
include "koneksi.php";

if (isset($_GET['No_Pendaftaran'])) {
  $No_Pendaftaran=$_GET['No_Pendaftaran'];
  $delete=mysqli_query($kon, "DELETE FROM `pendaftaran` WHERE `No_Pendaftaran`='$No_Pendaftaran'");
}

$query = "select * from pendaftaran";
$result = mysqli_query($kon,$query);
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h2>DATA PENDAFTARAN SISWA</h2>

<table>
        <tr>
            <th>No Pendaftaran</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Jenis Kelamin</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Kota</th>
            <th>Kabupaten</th>
            <th>Provinsi</th>
            <th>No Telepon</th>
            <th>Nama Sekolah</th>
            <th>Alamat Sekolah</th>
            <th>No Telp Sekolah</th>
            <th>Jurusan 1</th>
            <th>Jurusan 2</th>
            <th>aksi</th>
      </tr>   
      <tr>
         <?php
         while($row = mysqli_fetch_assoc($result))
         {
        ?>
        <td><?php echo $row ['No_Pendaftaran']; ?></td>
        <td><?php echo $row ['Nama']; ?></td>
        <td><?php echo $row ['Tempat_Lahir']; ?></td>
        <td><?php echo $row ['Tanggal_Lahir']; ?></td>
        <td><?php echo $row ['Alamat']; ?></td>
        <td><?php echo $row ['Agama']; ?></td>
        <td><?php echo $row ['Jenis_Kelamin']; ?></td>
        <td><?php echo $row ['Kelurahan']; ?></td>
        <td><?php echo $row ['Kecamatan']; ?></td>
        <td><?php echo $row ['Kota']; ?></td>
        <td><?php echo $row ['Kabupaten']; ?></td>
        <td><?php echo $row ['Provinsi']; ?></td>
        <td><?php echo $row ['No_Telepon']; ?></td>
        <td><?php echo $row ['Nama_Sekolah']; ?></td>
        <td><?php echo $row ['Alamat_Sekolah']; ?></td>
        <td><?php echo $row ['No_Telp_Sekolah']; ?></td>
        <td><?php echo $row ['Jurusan_1']; ?></td>
        <td><?php echo $row ['Jurusan_2']; ?></td>

        <td>
            <a href="update.php?No_Pendaftaran=<?php echo $row["No_Pendaftaran"]; ?>" class="btn btn-primary">Edit</a>
            <a href="delete.php?No_Pendaftaran=<?php echo $row["No_Pendaftaran"]; ?>" class="btn btn-danger">Delete</a>
        </td>

         </tr>
        <?php
         }

        ?>
</table>

</body>
</html>
