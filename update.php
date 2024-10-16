
<html>
    <head>
    <style>
    

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    form {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 15px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    input, select, textarea {
      width: 100%;
      padding: 8px;
      margin: 5px 0;
      box-sizing: border-box;
    }

    select, input[type="rad"]

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    form {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 15px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    input, select, textarea {
      width: 100%;
      padding: 8px;
      margin: 5px 0;
      box-sizing: border-box;
    }

    select, input[type]

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    form {
      max-width: 600px;
      margin: 20px auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 15px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 10px;
      text-align: left;
    }

    input, select, textarea {
      width: 100%;
      padding: 8px;
      margin: 5px 0;
      box-sizing: border-box;
    }

    select, input[type="radio"] {
      width: auto;
    }

    textarea {
      resize: vertical;
    }

    .container {
       margin-top: 15px;
       text-align: center; 
     }

     button {
       padding: 10px 20px;
       background-color: #4caf50;
       color: #fff;
       border: none;
       border-radius: 4px;
       cursor: pointer;
       margin-right: 10px; 
      }

    button:hover {
        background-color: #45a049;
       }


    a {
      text-decoration: none;
      color: #333;
    }

    a:hover {
      color: #4caf50;
    }
  </style>

      <title>Pendaftaran PPDB</title>
    </head>
    <body>
      
    <?php 
            include "koneksi.php";

            //  $message = "<p style='color:green;'>berhasil!</p>";
            // if(isset($message)) {echo $message;}
            
            $No_Pendaftaran = $_GET['No_Pendaftaran'];
            $result = mysqli_query($kon, "SELECT * FROM pendaftaran WHERE No_Pendaftaran='" . $No_Pendaftaran . "'");
            $row= mysqli_fetch_array($result);
            
            
            ?>

       <form action="proses-update.php" method="post">
          <div>
           
          </div>

          <div style=padding-bottom:5px;>
          <a href="retrieve.php"><b>DATA PESERTA DIDIK BARU<b></a>
          </div>
<table>
            <tr>
            <td><b>No.Pendaftaran</b></td>
            <td><input type="text" name="No_Pendaftaran" class="txtField"
             value="<?php echo $row['No_Pendaftaran']?>" readonly></td>
          </tr>

          <tr>
            <td><b>Nama</b></td> 
            <td><input type="text" name="Nama" class="txtField"
             value="<?php echo $row['Nama']?>" ></td>
          </tr>

          <tr>
            <td><b>Tempat Lahir</b></td>
            <td><input type="text" name="Tempat_Lahir" class="txtField"
             value="<?php echo $row['Tempat_Lahir']?>"></td>
          </tr>

          <tr>
        <td><b>Tanggal Lahir</b></td>
        <td><input type="date" name="Tanggal_Lahir" class="txtField"
         value="<?php echo $row['Tanggal_Lahir']?>" ></td>
        </tr>
  
          
        <tr>
    <td><b>Alamat</b></td>
    <td>
        <textarea cols="22" rows="3" name="Alamat" class="txtField"><?php echo $row['Alamat']; ?></textarea>
    </td>
</tr>


          <tr>
    <td><b>Agama</b></td>
    <td>
        <select name="Agama" class="txtField">
            <option <?php echo ($row['Agama'] == 'Islam') ? 'selected' : ''; ?>>Islam</option>
            <option <?php echo ($row['Agama'] == 'Katolik') ? 'selected' : ''; ?>>Katolik</option>
            <option <?php echo ($row['Agama'] == 'Kristen') ? 'selected' : ''; ?>>Kristen</option>
            <option <?php echo ($row['Agama'] == 'Hindu') ? 'selected' : ''; ?>>Hindu</option>
            <option <?php echo ($row['Agama'] == 'Budha') ? 'selected' : ''; ?>>Budha</option>
            <option <?php echo ($row['Agama'] == 'Konghucu') ? 'selected' : ''; ?>>Konghucu</option>
        </select>
    </td>
</tr>
 

     <tr>
         <td><b>Jenis Kelamin</b></td>
         <td>
         <input type="radio" name="Jenis_Kelamin" class="txtField" value="laki-laki" <?php echo ($row['Jenis_Kelamin'] == 'laki-laki') ? 'checked' : ''; ?>>Laki-laki
         <input type="radio" name="Jenis_Kelamin" class="txtField" value="perempuan" <?php echo ($row['Jenis_Kelamin'] == 'perempuan') ? 'checked' : ''; ?>>Perempuan
         </td>
     </tr>

            <tr>
              <td><b>Kelurahan</b></td>
              <td><input type="text" name="Kelurahan" class="txtField" value="<?php echo $row['Kelurahan']?>" ></td>
            </tr>

            <tr>
              <td><b>Kecamatan</b></td>
              <td><input type="text" name="Kecamatan" class="txtField" value="<?php echo $row['Kecamatan']?>"></td>
            </tr>

            <tr>
              <td><b>Kota</td>
                <td><input type="text" name="Kota" class="txtField" value="<?php echo $row['Kota']?>"></td>
              </tr>

              <tr>
                <td><b>Kabupaten</td>
                  <td><input type="text" name="Kabupaten" class="txtField" value="<?php echo $row['Kabupaten']?>"></td>
                </tr>


              <tr>
                <td><b>Provinsi</b></td>
                <td><select name="Provinsi"class="txtField" value="<?php echo $row['Provinsi']?>">
                  <option <?php echo ($row['Provinsi'] == 'Nanggroe Aceh Darussalam') ? 'selected' : ''; ?>>Nanggroe Aceh Darussalam</option>
                  <option <?php echo ($row['Provinsi'] == 'Sumatera Utara') ? 'selected' : ''; ?>>Sumatera Utara</option>  
                  <option <?php echo ($row['Provinsi'] == 'Sumatera Selatan') ? 'selected' : ''; ?>>Sumatera Selatan</option>
                  <option <?php echo ($row['Provinsi'] == 'Sumatera Barat') ? 'selected' : ''; ?>>Sumatera Barat</option>
                  <option <?php echo ($row['Provinsi'] == 'Bengkulu') ? 'selected' : ''; ?>>Bengkulu</option>
                  <option <?php echo ($row['Provinsi'] == 'Riau') ? 'selected' : ''; ?>>Riau</option>
                  <option <?php echo ($row['Provinsi'] == 'Kepulauan Riau') ? 'selected' : ''; ?>>Kepulauan Riau</option>
                  <option <?php echo ($row['Provinsi'] == 'Jambi') ? 'selected' : ''; ?>>Jambi</option>
                  <option <?php echo ($row['Provinsi'] == 'DKI Jakarta') ? 'selected' : ''; ?>>DKI Jakarta</option>
                  <option <?php echo ($row['Provinsi'] == 'Lampung') ? 'selected' : ''; ?>>Lampung</option>
                  <option <?php echo ($row['Provinsi'] == 'Bangka Belitung') ? 'selected' : ''; ?>>Bangka Belitung</option>
                  <option <?php echo ($row['Provinsi'] == 'Kalimantan Barat') ? 'selected' : ''; ?>>Kalimantan Barat</option>
                  <option <?php echo ($row['Provinsi'] == 'Kalimantan Timur') ? 'selected' : ''; ?>>Kalimantan Timur</option>
                  <option <?php echo ($row['Provinsi'] == 'Kalimantan Selatan') ? 'selected' : ''; ?>>Kalimantan Selatan</option>
                  <option <?php echo ($row['Provinsi'] == 'Kalimantan Tengah') ? 'selected' : ''; ?>>Kalimantan Tengah</option>
                  <option <?php echo ($row['Provinsi'] == 'Kalimantan Utara') ? 'selected' : ''; ?>>Kalimantan Utara</option>
                  <option <?php echo ($row['Provinsi'] == 'Banten') ? 'selected' : ''; ?>>Banten</option>
                  <option <?php echo ($row['Provinsi'] == 'Jawa Barat') ? 'selected' : ''; ?>>Jawa Barat</option>
                  <option <?php echo ($row['Provinsi'] == 'Jawa Tengah') ? 'selected' : ''; ?>>Jawa Tengah</option>
                  <option <?php echo ($row['Provinsi'] == 'Daerah Istimewa Yogyakarta') ? 'selected' : ''; ?>>Daerah Istimewa Yogyakarta</option>
                  <option <?php echo ($row['Provinsi'] == 'Jawa Timur') ? 'selected' : ''; ?>>Jawa Timur</option>
                  <option <?php echo ($row['Provinsi'] == 'Bali') ? 'selected' : ''; ?>>Bali</option>
                  <option <?php echo ($row['Provinsi'] == 'Nusa Tenggara Timur') ? 'selected' : ''; ?>>Nusa Tenggara Timur</option>
                  <option <?php echo ($row['Provinsi'] == 'Nusa Tenggara Barat') ? 'selected' : ''; ?>>Nusa Tenggara Barat</option>
                  <option <?php echo ($row['Provinsi'] == 'Gorontalo') ? 'selected' : ''; ?>>Gorontalo</option>
                  <option <?php echo ($row['Provinsi'] == 'Sulawesi Barat') ? 'selected' : ''; ?>>Sulawesi Barat</option>
                  <option <?php echo ($row['Provinsi'] == 'Sulawesi Tengah') ? 'selected' : ''; ?>>Sulawesi Tengah</option>
                  <option <?php echo ($row['Provinsi'] == 'Sulawesi Utara') ? 'selected' : ''; ?>>Sulawesi Utara</option>
                  <option <?php echo ($row['Provinsi'] == 'Sulawesi Tenggara') ? 'selected' : ''; ?>>Sulawesi Tenggara</option>
                  <option <?php echo ($row['Provinsi'] == 'Sulawesi Selatan') ? 'selected' : ''; ?>>Sulawesi Selatan</option>
                  <option <?php echo ($row['Provinsi'] == 'Maluku Utara') ? 'selected' : ''; ?>>Maluku Utara</option>
                  <option <?php echo ($row['Provinsi'] == 'Maluku') ? 'selected' : ''; ?>>Maluku</option>
                  <option <?php echo ($row['Provinsi'] == 'Papua Barat') ? 'selected' : ''; ?>>Papua Barat</option>
                  <option <?php echo ($row['Provinsi'] == 'Papua') ? 'selected' : ''; ?>>Papua</option>
                  <option <?php echo ($row['Provinsi'] == 'Papua Tengah') ? 'selected' : ''; ?>>Papua Tengah</option>
                  <option <?php echo ($row['Provinsi'] == 'Papua Pegunungan') ? 'selected' : ''; ?>>Papua Pegunungan</option>
                  <option <?php echo ($row['Provinsi'] == 'Papua Selatan') ? 'selected' : ''; ?>>Papua Selatan</option>
                  <option <?php echo ($row['Provinsi'] == 'Papua Barat Daya') ? 'selected' : ''; ?>>Papua Barat Daya</option>
                  </select></td>
                </tr>

                <tr>
                  <td><b>No.Telepon</b></td>
                  <td><input type="text" name="No_Telepon" class="txtField" value="<?php echo $row['No_Telepon']?>"></td>
                </tr>
</table>
            </div>
                    <table>
                    <td><b>Nama Sekolah</b></td>
                    <td><input type="text" name="Nama_Sekolah" class="txtField" value="<?php echo $row['Nama_Sekolah']?>"></td>
                 </tr>

                 <tr>
                  <td><b>Alamat Sekolah</b></td>
                  <td><input type="text" name="Alamat_Sekolah"class="txtField" value="<?php echo $row['Alamat_Sekolah']?>" ></td>
                 </tr>

                 <tr>
                  <td><b>No.Telp.Sekolah</b></td>
                  <td><input type="text" name="No_Telp_Sekolah" class="txtField" value="<?php echo $row['No_Telp_Sekolah']?>"></b></td>
                 </tr>
                </table>
              </div>

                   <table>
                  <tr>
    <td><b>Jurusan 1</b></td>
    <td>
        <select name="Jurusan_1" class="txtField">
            <option <?php echo ($row['Jurusan_1'] == 'Rekayasa Perangkat Lunak (RPL)') ? 'selected' : ''; ?>>Rekayasa Perangkat Lunak (RPL)</option>
            <option <?php echo ($row['Jurusan_1'] == 'Teknik Kendaraan Ringan Otomotif (TKRO)') ? 'selected' : ''; ?>>Teknik Kendaraan Ringan Otomotif (TKRO)</option>
            <option <?php echo ($row['Jurusan_1'] == 'Desain Komunikasi Visual (DKV)') ? 'selected' : ''; ?>>Desain Komunikasi Visual (DKV)</option>
            <option <?php echo ($row['Jurusan_1'] == 'Teknik Konstruksi Perumahan (TKP)') ? 'selected' : ''; ?>>Teknik Konstruksi Perumahan (TKP)</option>
            <option <?php echo ($row['Jurusan_1'] == 'Kuliner') ? 'selected' : ''; ?>>Kuliner</option>
        </select>
    </td>
</tr>

<tr>
    <td><b>Jurusan 2</b></td>
    <td>
        <select name="Jurusan_2" class="txtField">
            <option <?php echo ($row['Jurusan_2'] == 'Rekayasa Perangkat Lunak (RPL)') ? 'selected' : ''; ?>>Rekayasa Perangkat Lunak (RPL)</option>
            <option <?php echo ($row['Jurusan_2'] == 'Teknik Kendaraan Ringan Otomotif (TKRO)') ? 'selected' : ''; ?>>Teknik Kendaraan Ringan Otomotif (TKRO)</option>
            <option <?php echo ($row['Jurusan_2'] == 'Desain Komunikasi Visual (DKV)') ? 'selected' : ''; ?>>Desain Komunikasi Visual (DKV)</option>
            <option <?php echo ($row['Jurusan_2'] == 'Kuliner') ? 'selected' : ''; ?>>Kuliner</option>
            <option <?php echo ($row['Jurusan_2'] == 'Teknik Konstruksi Perumahan (TKP)') ? 'selected' : ''; ?>>Teknik Konstruksi Perumahan (TKP)</option>
        </select>
    </td>
</tr>

       </tr>

         </table>
            </div>

<div class="container">
  <button type="submit" class="button">update</label></button>
  <button class="button">batal</button>
</div>
 


</form>
</body>
</html>               
              
