<?php

$nama = $_POST['nama'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

include 'kartu.php';

$kartu = new Kartu($nama, $produk, $jumlah);
$kartumember = $kartu->kartumember();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" style="width:100%; text-align: center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Belanja</th>
                <th>Status Member</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><?=$kartu->getNama() ?></td>
                <td><?=$kartu->getProduk() ?></td>
                <td><?=$kartu->getJumlah() ?></td>
                <td><?=$kartu->getTotal() ?></td>
                <td><?=$kartu->kartumember() ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>