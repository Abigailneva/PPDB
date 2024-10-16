<DOCTYPE html>
  <html>
    <head>
      <title>pasneva</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="simpan-pendaftaran.php" method="post">
      
    <div class="header ">
      <h1>PENDAFTARAN PESERTA DIDIK BARU<h1>
        <h2>Tahun Ajaran 2022/2023<h2>
        </div>

          <tr>
            <div class="header 2">
            <h4>INFORMASI PRIBADI</h4>
            </div>

            <div class="content 1">
            <table>
            <td><b>No.Pendaftaran</b></td>
            <td><input type="text" name="No_Pendaftaran"></td>
          </tr>

          <tr>
            <td><b>Nama</b></td> 
            <td><input type="text" name="Nama" ></td>
          </tr>

          <tr>
            <td><b>Tempat Lahir</b></td>
            <td><input type="text" name="Tempat_Lahir" ></td>
          </tr>

          <tr>
        <td><b>Tanggal Lahir</b></td>
        <td><input type="date" name="Tanggal_Lahir" ></td>
        </tr>
  
          <tr>
            <td><b>Alamat</b></td>
            <td><textarea cols="22" rows="3" name="Alamat"></textarea></td>
          </tr>

          <tr>
            <td><b>Agama</b></td>
            <td><select name="Agama">
              <option>Islam</option>
              <option>Katolik</option>
              <option>Kristen</option>
              <option>Hindu</option>
              <option>Budha</option>
              <option>Konghucu</option>
              </select></td>
              </tr>


          <tr>
            <td><b>Jenis Kelamin</b></td>
            <td><input type="radio" name="Jenis_Kelamin" value="laki-laki">laki-laki
              <input type="radio" name="Jenis_Kelamin" value="perempuan">perempuan
              </td>
            </tr>
            

            <tr>
              <td><b>Kelurahan</b></td>
              <td><input type="text" name="Kelurahan" ></td>
            </tr>

            <tr>
              <td><b>Kecamatan</b></td>
              <td><input type="text" name="Kecamatan" ></td>
            </tr>

            <tr>
              <td><b>Kota</td>
                <td><input type="text" name="Kota" ></td>
              </tr>

              <tr>
                <td><b>Kabupaten</td>
                  <td><input type="text" name="Kabupaten" ></td>
                </tr>


              <tr>
                <td><b>Provinsi</b></td>
                <td><select name="Provinsi">
                  <option>Nanggroe Aceh Darussalam</option>
                  <option>Sumatera Utara</option>
                  <option>Sumatera Selatan</option>
                  <option>Sumatera Barat</option>
                  <option>Bengkulu</option>
                  <option>Riau</option>
                  <option>Kepulauan Riau</option>
                  <option>Jambi</option>
                  <option>DKI Jakarta</option>
                  <option>Lampung</option>
                  <option>Bangka Belitung</option>
                  <option>Kalimantan Barat</option>
                  <option>Kalimantan Timur</option>
                  <option>Kalimantan Selatan</option>
                  <option>Kalimantan Tengah</option>
                  <option>Kalimantan Utara</option>
                  <option>Banten</option>
                  <option>Jawa Barat</option>
                  <option>Jawa Tengah</option>
                  <option>Daerah Istimewa Yogyakarta</option>
                  <option>Jawa Timur</option>
                  <option>Bali</option>
                  <option>Nusa Tenggara Timur</option>
                  <option>Nusa Tenggara Barat</option>
                  <option>Gorontalo</option>
                  <option>Sulawesi Barat</option>
                  <option>Sulawesi Tengah</option>
                  <option>Sulawesi Utara</option>
                  <option>Sulawesi Tenggara</option>
                  <option>Sulawesi Selatan</option>
                  <option>Maluku Utara</option>
                  <option>Maluku</option>
                  <option>Papua Barat</option>
                  <option>Papua</option>
                  <option>Papua Tengah</option>
                  <option>Papua Pegunungan</option>
                  <option>Papua Selatan</option>
                  <option>Papua Barat Daya</option>
                  </select></td>
                </tr>

                <tr>
                  <td><b>No.Telepon</b></td>
                  <td><input type="text" name="No_Telepon"></td>
                </tr>
              </table>
            </div>

                 <tr>
                  <div class="header 3">
                  <h4>INFORMASI ASAL SEKOLAH</h4>
                  </div>

                  <div class="content 2">
                  <table>
                    <td><b>Nama Sekolah</b></td>
                    <td><input type="text" name="Nama_Sekolah" ></td>
                 </tr>

                 <tr>
                  <td><b>Alamat Sekolah</b></td>
                  <td><input type="text" name="Alamat_Sekolah" ></td>
                 </tr>

                 <tr>
                  <td><b>No.Telp.Sekolah</b></td>
                  <td><input type="text" name="No_Telp_Sekolah" ></b></td>
                 </tr>
                </table>
              </div>

                  <tr>
                    <div class="header 4">
                    <h4>PILIHAN JURUSAN</h4>
                    </div>

                    <div class="content 3">
                    <table>
                    <td><b>Jurusan 1</b></td>
                    <td><select name="Jurusan_1">
                      <option>Rekayasa Perangkat Lunak (RPL)</option>
                      <option>Teknik Kendaraan Ringan Otomotif (TKRO)</option>
                      <option>Desain Komunikasi Visual (DKV)</option>
                      <option>Teknik Kontruksi Perumahan (TKP)</option>
                      <option>Kuliner</option>
                    </tr>

                  
                    <tr>
                      <td><b>Jurusan 2</b></td>
                      <td><select name="Jurusan_2">
                        <option>Rekayasa Perangkat Lunak (RPL)</option>
                        <option>Teknik Kendaraan Ringan Otomotif (TKRO)</option>
                        <option>Desain Komunikasi Visual (DKV)</option>
                        <option>Kuliner</option>
                        <option>Teknik Kontruksi Perumahan (TKP)</option>
                      </tr>
                    </table>
                  </div>

<div class="rectangle">
<h6>Saya mengatakan bahwa data yang saya isikan diatas sudah benar</h6>
</div>

<div class="container">
  <button class="button" type="submit">proses</button>
  <button class="button">batal</button>
</div>


</body>
</html>               
              