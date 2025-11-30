<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];

    $sql = "INSERT INTO data_barang (nama, kategori, harga_jual, harga_beli, stok)
            VALUES ('$nama', '$kategori', '$harga_jual', '$harga_beli', '$stok')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Data berhasil ditambahkan'); 
        window.location='index.php?page=user/list';</script>";
    }
}
?>

<h2>Tambah Data</h2>

<form id="formData" method="POST">

    <label>Nama</label>
    <input type="text" name="nama" required><br>

    <label>Kategori</label>
    <input type="text" name="kategori" required><br>

    <label>Harga Jual</label>
    <input type="number" name="harga_jual" required><br>

    <label>Harga Beli</label>
    <input type="number" name="harga_beli" required><br>

    <label>Stok</label>
    <input type="number" name="stok" required><br>

    <button type="submit">Simpan</button>
</form>

<script>
validateForm("formData");
</script>
