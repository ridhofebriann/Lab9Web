<?php
$sql = "SELECT * FROM data_barang ORDER BY id_barang DESC";
$result = mysqli_query($conn, $sql);
?>

<h2>Data Barang</h2>

<a href="index.php?page=user/add" class="btn">+ Tambah Data</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th style="width: 150px;">Aksi</th>
        </tr>
    </thead>

    <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= $row['id_barang']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['kategori']; ?></td>
            <td><?= number_format($row['harga_jual']); ?></td>
            <td><?= number_format($row['harga_beli']); ?></td>
            <td><?= $row['stok']; ?></td>
            <td>
                <a class="btn" href="index.php?page=user/edit&id=<?= $row['id_barang']; ?>">Edit</a>
                <a class="btn btn-danger" onclick="confirmDelete('index.php?page=user/delete&id=<?= $row['id_barang']; ?>')">Hapus</a>
            </td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>
