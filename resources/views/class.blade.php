@extends('layouts.mainLayout')

@section('title','Class')

@section('content')
        <h2>Halo Ini Halaman Data Class</h2>
        <table class="table">
            <tr >
                <th>No</th>
                <th>id</th>
                <th>Nama</th>
            </tr>
            @foreach ( $kelas as $data )
            <tr>
                <th>{{$loop->iteration}}</th>
                <th>{{$data ['id']}}</th>
                <th>{{$data ['nama']}}</th>
            </tr>
            @endforeach
        </table>
@endsection
