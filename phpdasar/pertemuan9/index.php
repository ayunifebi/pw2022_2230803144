<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","dasarphp");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari objest result
// mysqli_fetch_row()
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()

?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1;?>
    <?php while($row=mysqli_fetch_assoc($result)):?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>
        <td><img src="pertemuan 9/gambar" ?></td>
        <td><?=$row["NRP"];?></td>
        <td><?=$row["NAMA"];?></td>
        <td><?=$row["EMAIL"];?></td>
        <td><?=$row["JURUSAN"];?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

</table>

</body>
<html>