<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <h2>ini halaman siswa berdasarkan NIS {{$data ['nis']}}</h2>
    <table>
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td>{{$data ['nis']}}</td>
        </tr>
        <tr>
            <td>Nama Siswa</td>
            <td>:</td>
            <td>{{$data ['nama_siswa']}}</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>{{$data ['jurusan']}}</td>
        </tr>
        <tr>
            <td>Tingkat</td>
            <td>:</td>
            <td>{{$data ['tingkat']}}</td>
        </tr>
        <tr>
            <td>Eskul</td>
            <td>:</td>
            <td>{{$data ['eskul']}}</td>
        </tr>
    </table>
</body>
</html>
