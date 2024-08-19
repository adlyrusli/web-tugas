@extends('layouts.mainLayout')
@section('content')
    <h1>Ini halaman Contact</h1>
    <h2>Nama Siswa : {{ $nama_siswa }}</h2>
    <h2>Kelas : {{ $kelas }}</h2>
    <h2>Alamat : {{ $alamat }}</h2>
    <h2>Telpon : {{ $telpn }}</h2>
@endsection
