<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

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

<table border="1" cellpadding="0" cellspacing="5">

    <tr>
        <th>#</th>
        <th>Aksi</th>
        <th>gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1;?>
    <?php while($row=mysqli_fetch_assoc($result)){?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> | <a href="">hapus</a>
        </td>
        <td><img src="img/<?=$row["gambar"];?>" width="80" height="80" ></td>
        
        <td><?=$row["nrp"];?></td>
        <td><?=$row["nama"];?></td>
        <td><?=$row["email"];?></td>
        <td><?=$row["jurusan"];?></td>
    </tr>
    <?php $i++; ?>
    <?php } ?>

</table>

</body>
<html>