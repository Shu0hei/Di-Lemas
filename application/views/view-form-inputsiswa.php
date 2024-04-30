<html>
<head>
  <title>Form Input Nama Siswa</title>
</head>
<?php echo validation_errors(); ?>
<body>

  <center>

    <form action="<?= base_url('web/cetak'); ?>" method="post">
      <table class="view">
        <tr>
          <th colspan="3">
            Form Input Data Nama Siswa
          </th>
        </tr>
        <tr>
          <td colspan="3">
            <hr>
          </td>
        </tr>
        <tr>
          <th>Nama Siswa</th>
          <td>:</td>
          <td>
            <input type="text" name="nama_siswa" id="nama_siswa">
          </td>
        </tr>
        <tr>
          <th>NIS</th>
          <td>:</td>
          <td>
            <input type="text" name="nis" id="nis">
          </td>
        </tr>
        <tr>
          <th>Kelas</th>
          <td>:</td>
          <td>
            <input type="text" name="kelas" id="kelas">
          </td>
        </tr>
        <tr>
          <th>Tanggal lahir</th>
          <td>:</td>
          <td>
            <input type="text" name="tanggal_lahir" id="tanggal_lahir">
          </td>
        </tr>
        <tr>
          <th>Tempat lahir</th>
          <td>:</td>
          <td>
            <input type="text" name="tempat_lahir" id="tempat_lahir">
          </td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>:</td>
          <td>
            <input type="text" name="alamat" id="alamat">
          </td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td>:</td>
          <td>
            <input type="radio" id="laki-laki" name="jenis_kelamin" value="laki-laki">
            <label for="laki-laki">laki-laki</label>
            <input type="radio" id="wanita" name="jenis_Kelamin" value="wanita">
            <label for="wanita">wanita</label>
          </td>
        </tr>
        <tr>
          <th>Agama</th>
          <td>:</td>
          <td>
            <select name="agama" id="agama">
              <option value="">Agama anda</option>
              <option value="islam">Islam</option>
              <option value="kristen">Kristen</option>
              <option value="katolik">Katolik</option>
              <option value="budha">Budha</option>
              <option value="hindu">Hindu</option>
              <option value="protestan">Protestan</option>
              <option value="khonghucu">Khonghucu</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" align="center">
          <input type="submit" value="Submit">

          <a href="<?= base_url('web'); ?>"><input type="button" value="Cancel"></a>
          </td>
        </tr>
      </table>
    </form>

 </center>

</body>
</html>