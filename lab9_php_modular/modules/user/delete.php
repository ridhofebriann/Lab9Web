<?php
$id = $_GET['id'];

$sql = "DELETE FROM data_barang WHERE id_barang = $id";

mysqli_query($conn, $sql);

echo "<script>alert('Data dihapus'); 
window.location='index.php?page=user/list';</script>";
?>
