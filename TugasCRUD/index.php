<?php
require 'function.php';

$flwr = query("SELECT * FROM ainsleyfloriststore");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ainsley Florist Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <a href="add.php" class="btn btn-outline-success mx-5 my-3" type="button">Insert</a>
        </div>
    </nav>

    <div class="container">
        <h1>Daftar Bunga Ainsley Florist Store</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Bunga</th>
                    <th scope="col">Kode Bunga</th>
                    <th scope="col">Harga Bunga</th>
                    <th scope="col">Stok Bunga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $index = 1;
                foreach ($flwr as $item) : ?>
                    <tr>
                        <td><?= $index++ ?></td>
                        <td><img src="image/<?= $item['gambar_bunga']; ?>" width="50"></td>
                        <td><?= $item['nama_bunga'] ?></td>
                        <td><?= $item['kode_bunga'] ?></td>
                        <td><?= $item['harga_bunga'] ?></td>
                        <td><?= $item['stok_bunga'] ?></td>
                        <td>
                            <a href="update.php?id=<?= $item['kode_bunga'] ?>">Update</a>
                            <a href="delete.php?id=<?= $item['kode_bunga'] ?>">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>