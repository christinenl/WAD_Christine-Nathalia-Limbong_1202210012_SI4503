<?php
require 'function.php';

if (isset($_POST['submit'])) {
    $gambar_bunga = $_POST["gambar_bunga"];
    $nama_bunga = $_POST["nama_bunga"];
    $kode_bunga = $_POST["kode_bunga"];
    $harga_bunga = $_POST["harga_bunga"];
    $stok_bunga = $_POST["stok_bunga"];

    insert_bunga($gambar_bunga, $nama_bunga, $kode_bunga, $harga_bunga, $stok_bunga);
} elseif (isset($_POST['cancel'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Bunga di Ainsley Florist Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1>Update Data Bunga Ainsley Florist Store</h1>
    <form method="post">
        <ul>
            <li>
                <label for="gambar_bunga">Gambar Bunga : </label>
                <input type="text" name="gambar_bunga" id="gambar_bunga">
            </li>
            <li>
                <label for="nama_bunga">Nama Bunga : </label>
                <input type="text" name="nama_bunga" id="nama_bunga">
            </li>
            <li>
                <label for="kode_bunga">Kode Bunga : </label>
                <input type="text" name="kode_bunga" id="kode_bunga">
            </li>
            <li>
                <label for="harga_bunga">Harga Bunga : </label>
                <input type="text" name="harga_bunga" id="harga_bunga">
            </li>
            <li>
                <label for="stok_bunga">Stok Bunga : </label>
                <input type="text" name="stok_bunga" id="stok_bunga">
            </li>
        </ul>
        <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
        <button type="cancel" name="cancel" class="btn btn-outline-secondary">Cancel</button>
    </form>
</body>

</html>