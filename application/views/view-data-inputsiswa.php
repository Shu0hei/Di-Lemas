<html>
<head>
  <title>Tampil Data Nama Siswa</title>
</head>
<body>
  <center>
    <div class="view-data">
      <table>
        <tr>
          <th colspan="3">Tampil Data Nama Siswa</th>
        </tr>
        <tr>
          <td colspan="3">
          <hr>
          </td>
        </tr>
        <tr>
          <th>Nama Siswa</th>
          <th>:</th>
          <td>
            <?= $nama_siswa; ?>
          </td>
        </tr>
        <tr>
          <th>NIS</th>
          <th>:</th>
          <td>
            <?= $nis; ?>
          </td>
        </tr>
        <tr>
          <th>Kelas</th>
          <th>:</th>
          <td>
            <?= $kelas; ?>
          </td>
        </tr>
        <tr>
          <th>Tanggal lahir</th>
          <th>:</th>
          <td>
            <?= $tanggal_lahir; ?>
          </td>
        </tr>
        <tr>
          <th>Tempat lahir</th>
          <th>:</th>
          <td>
            <?= $tempat_lahir; ?>
          </td>
        </tr>
        <tr>
          <th>Alamat</th>
          <th>:</th>
          <td>
            <?= $alamat; ?>
          </td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <th>:</th>
          <td>
            <?= $jenis_kelamin; ?>
          </td>
        </tr>
        <tr>
          <th>Agama</th>
          <th>:</th>
          <td>
            <?= $agama; ?>
          </td>
        </tr>
        <tr>
        <td colspan="3" align="center">
          <a href="<?= base_url('web/form'); ?>">Kembali</a>
        </td>
        </tr>
      </table>
    </div>
  </center>
</body>
</html>
