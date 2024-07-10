<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Mahasiswa</title>
  </head>
  <body>

    <a href="index.php">Beranda</a>
    <a href="form_login.php">Login</a>
    <h2>DATA MAHASISWA</h2>
    <br>
    <br>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Alamat</th>

        </tr>
        <?php
        include 'koneksi.php';
        $no=1;
        $data = mysqli_query($koneksi,"select * from mahasiswa");
        while($d=mysqli_fetch_array($data)){
        ?>

        <tr>
            <td><?php echo $no++; ?> </td>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['nim'];?></td>
            <td><?php echo $d['alamat'];?></td>

        </tr>

        <?php
        }
        ?>
        </table>

<a href="index.php">Kembali</a>


  </body>
</html>
