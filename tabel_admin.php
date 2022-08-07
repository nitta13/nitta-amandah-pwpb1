<?php

    include "koneksi.php";

?>
<h1>Nitta Amandah absen 33</h1> 
<h2>TABEL ADMIN</h2>
<table border="1">
    <tr>
        <td>ID Admin</td>
        <td>Username</td>
        <td>Password</td>
    </tr>
    <?php

        $tampil = mysqli_query($mysqli, "select * from admin");
        $no = 1;
        while($hasil = mysqli_fetch_array($tampil)){
    ?>
    <tr>
        <td><?php echo $hasil['id_admin']; ?></td>
        <td><?php echo $hasil['username']; ?></td>
        <td><?php echo $hasil['password']; ?></td>
        </td>
    </tr>
    <?php
        }
    ?>
</table>

<h2>TABEL ANGGOTA</h2>
<table border="1">
    <tr>
        <td>ID Anggota</td>
        <td>Nama</td>
        <td>No Telp</td>
        <td>Alamat</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
    <?php

        $tampil = mysqli_query($mysqli, "select * from anggota");
        $no = 1;
        while($hasil = mysqli_fetch_array($tampil)){
    ?>
    <tr>
        <td><?php echo $hasil['id_anggota']; ?></td>
        <td><?php echo $hasil['nama']; ?></td>
        <td><?php echo $hasil['no_telp']; ?></td>
        <td><?php echo $hasil['alamat']; ?></td>
        <td><?php echo $hasil['email']; ?></td>
        <td><?php echo $hasil['password']; ?></td>
        </td>
    </tr>
    <?php
        }
    ?>
</table>

<h2>TABEL BUKU</h2>
<table border="1">
    <tr>
        <td>ID Buku</td>
        <td>ID Katalog</td>
        <td>Judul Buku</td>
        <td>Pengarang</td>
        <td>Tahun Terbit </td>
        <td>Penerbit</td>
    </tr>
    <?php

        $tampil = mysqli_query($mysqli, "select * from buku");
        $no = 1;
        while($hasil = mysqli_fetch_array($tampil)){
    ?>
    <tr>
        <td><?php echo $hasil['id_buku']; ?></td>
        <td><?php echo $hasil['id_katalog']; ?></td>
        <td><?php echo $hasil['judul_buku']; ?></td>
        <td><?php echo $hasil['pengarang']; ?></td>
        <td><?php echo $hasil['thn_terbit']; ?></td>
        <td><?php echo $hasil['penerbit']; ?></td>
        </td>
    </tr>
    <?php
        }
    ?>
</table>