<?php
require 'function.php';
$kode_bunga = $_GET['id'];

if (isset($_POST['submit'])) {
    // $kode_bunga = $_POST['id'];
    // echo $kode_bunga;
    delete_bunga($kode_bunga);
    header("Location: index.php");
    exit();
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
    <title>Delete Bunga di Ainsley Florist Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <form method="post">
        <h1>Delete Data Bunga Ainsley Florist Store</h1>
        <p>Are You Sure Want To Delete?</p>
        <button type="submit" name="submit" class="btn btn-outline-primary">Submit</button>
        <button type="cancel" name="cancel" class="btn btn-outline-secondary">Cancel</button>
    </form>
</body>

</html>