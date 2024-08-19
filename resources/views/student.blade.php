@extends('layouts.mainLayout')

@section('title','Student')

@section('content')
        <h2>Halo Ini Halaman Data Siswa</h2>
        <table class="table">
            <tr >
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Gender</th>
                <th>NIS</th>
                <th>Kelas</th>
            </tr>
            @foreach ( $siswa as $data )
            <tr>
                <th>{{$loop->iteration}}</th>
                <th>{{$data ['nama_siswa']}}</th>
                <th>{{$data ['gender']}}</th>
                <th>{{$data ['nis']}}</th>
                <th>{{$data ['class_id']}}</th>
            </tr>
            @endforeach
        </table>
@endsection
