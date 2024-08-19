<?php

use App\Models\ClassRom;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassRomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
});

//membuat route
Route::get('/student',[StudentController::class,'index']);
Route::get('/class',[ClassRomController::class,'index']);

Route::get('/contact', function () {
    return view ('contact', [
        'nama_siswa' => 'Adly',
        'kelas' => '12 RPL C',
        'alamat' => 'Bandung',
        'telpn' => '08914141414'
    ]);
});

Route::get('product/{id}', function ($id) {
    return 'Ini produk dengan ID produk : '.$id;
});

Route::get('product/{id}', function ($id) {
    return view ('product.detail', [
        'id' => $id
    ]);
});

Route::get('/Nama' , function () {
    return 'Nama saya adly';
});

Route::get('/Tambah' , function () {
    return 5+5;
});

Route::get('/Kurang' , function () {
    return 5-5;
});

Route::get('/Kali' , function () {
    return 5*5;
});

Route::get('/Bagi' , function () {
    return 5/5;
});
Route::prefix('admin')->group(function () {
    Route::get('/profil' , function () {
        return 'profil petugas';
    });
    Route::get('/contact' , function () {
        return 'contact petugas';
    });
    Route::get('/biodata' , function () {
        return 'biodata petugas';
    });
    Route::get('/home' , function () {
        return 'home petugas';
    });

});

Route::get('product/{id}', function ($id) {
   $produk = [
    [
    'id' => 1,
    'nama_produk' => 'Iphone 15 pro',
    'harga' => 200000000,
    'stok' => 10
    ],
    [
    'id' => 2,
    'nama_produk' => 'Samsung 15 pro',
    'harga' => 300000000,
    'stok' => 20
    ],
    [
    'id' => 3,
    'nama_produk' => 'Asus 15 pro',
    'harga' => 400000000,
    'stok' => 30
    ],
   ];
   $cari_produk = collect($produk)->where('id',$id)->first();
   return view('product.detail',[
    'data' => $cari_produk
   ]);
});

Route::get('siswa/{nis}', function ($nis) {
    $siswa = [
        [
            'nis' => 10211,
            'nama_siswa' => 'Richard',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul'=> 'Futsal'
        ],
        [
            'nis' => 10212,
            'nama_siswa' => 'Kido',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul'=> 'Osis'
        ],
        [
            'nis' => 10213,
            'nama_siswa' => 'Adly',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul'=> 'Futsal'
        ],
        [
            'nis' => 10214,
            'nama_siswa' => 'Steven',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul'=> 'Silat'
        ],
    ];
    $cari_siswa= collect($siswa)->where('nis',$nis)->first();
    return view('siswa.detail',[
        'data' => $cari_siswa
    ]);
});

Route::get('/home', function () {
    $siswa = [
        [
            'nis' => 10211,
            'nama_siswa' => 'Richard',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul'=> 'Futsal'
        ],
        [
            'nis' => 10212,
            'nama_siswa' => 'Kido',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul'=> 'Osis'
        ],
        [
            'nis' => 10213,
            'nama_siswa' => 'Adly',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul'=> 'Futsal'
        ],
        [
            'nis' => 10214,
            'nama_siswa' => 'Steven',
            'jurusan' => 'RPL',
            'tingkat' => 12,
            'eskul'=> 'Silat'
        ],
    ];
    return view('home', [
    'nama' => 'Adly rusly',
    'role' => 'admin',
    'data' => $siswa
    ]);
});

