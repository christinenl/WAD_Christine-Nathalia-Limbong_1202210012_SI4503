<?php


$SERVER = 'localhost:3308';
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'ainsleyfloriststore';
$connect = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DATABASE);

function query($query)
{

    global $connect;

    $result = mysqli_query($connect, $query);

    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function insert_bunga($nama_bunga, $kode_bunga, $gambar_bunga, $harga_bunga, $stok_bunga)
{
    global $connect;

    $query = "INSERT INTO Ainsley Florist Store (nama_bunga, kode_bunga, gambar_bunga, harga_bunga, stok_bunga)
                VALUES ('$nama_bunga', '$kode_bunga', '$gambar_bunga', '$harga_bunga', '$stok_bunga')";
    mysqli_query($connect, $query);


    // header("Location: index.php");
    // exit();
}

function update_bunga($nama_bunga, $kode_bunga, $gambar_bunga, $harga_bunga, $stok_bunga)
{
    global $connect;

    $query = "UPDATE Ainsley Florist Store SET  
    nama_bunga = '$nama_bunga', 
    gambar_bunga = '$gambar_bunga', 
    harga_bunga = '$harga_bunga', 
    stok_bunga = '$stok_bunga',
    WHERE kode_bunga = '$kode_bunga'";


    mysqli_query($connect, $query);


    // header("Location: index.php");
    // exit();
}


function delete_bunga($kode_bunga)
{
    global $connect;

    $query = "DELETE FROM Ainsley Florist Store WHERE kode_bunga = '$kode_bunga'";

    mysqli_query($connect, $query);

    // header("Location: index.php");
    // exit();
}