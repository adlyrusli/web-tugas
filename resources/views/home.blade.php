@extends('layouts.mainLayout')


@section('tile', 'data siswa')
@section('content')
        <div class="mt-5">
            <h1>Ini Halaman Home</h1>
            <h3>Selamat datang, {{$nama}}, Role anda adalah {{$role}}</h3>
            @if ($role == 'admin')
                <a href="#">Menuju halaman admin</a>
            @elseif ($role == 'petugas')
                <!-- Tambahkan konten untuk petugas di sini -->
            @else
                role tidak tersedia
            @endif
            <br>
            <h2>DATA SISWA</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">NIS</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">Tingkat</th>
                    <th scope="col">Eskul</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $siswa)
                        <tr>
                            <td>{{$siswa['nis']}}</td>
                            <td>{{$siswa['nama_siswa']}}</td>
                            <td>{{$siswa['jurusan']}}</td>
                            <td>{{$siswa['tingkat']}}</td>
                            <td>{{$siswa['eskul']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

@endsection
