<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ini halaman detail<h/1>
        <h2>Ini adalah detail produk dari ID {{ $data['id'] }}</h2>
        <table>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td>{{$data['id']}}</td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td>{{$data['nama_produk']}}</td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>{{$data['harga']}}</td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td>{{$data['stok']}}</td>
            </tr>
        </table>
</body>
</html>
