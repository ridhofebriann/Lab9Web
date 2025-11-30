<?php
$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM data_barang WHERE id_barang = $id");
$row = mysqli_fetch_assoc($data);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    $sql = "UPDATE data_barang SET 
            nama='$nama', 
            kategori='$kategori', 
            harga_jual='$harga_jual',
            harga_beli='$harga_beli',
            stok='$stok'
            WHERE id_barang=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil diperbarui');
        window.location='index.php?page=user/list';</script>";
    }
}
?>

<h2>Edit Data</h2>

<form method="POST">
    <label>Nama</label>
    <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br>

    <label>Kategori</label>
    <input type="text" name="kategori" value="<?= $row['kategori']; ?>" required><br>

    <label>Harga Jual</label>
    <input type="number" name="harga_jual" value="<?= $row['harga_jual']; ?>" required><br>

    <label>Harga Beli</label>
    <input type="number" name="harga_beli" value="<?= $row['harga_beli']; ?>" required><br>

    <label>Stok</label>
    <input type="number" name="stok" value="<?= $row['stok']; ?>" required><br>

    <button type="submit">Update</button>
</form>
