<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Classrom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Schema;

class ClassromSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1.eloquent ORM(rekomendasi)
        //disable foreignkey
        Schema::disableForeignKeyConstraints();
        //mengosongkan isi table
        ClassRom::truncate();
        //enable foreignkey
        Schema::enableForeignKeyConstraints();
        $data=[
            [
                'nama'=>'12 RPL A',
            ],
            [
                'nama'=>'12 RPL B',
            ],
            [
                'nama'=>'12 RPL C',
            ],
        ];
        //multiple insert
        foreach ($data as $value) {
            Classrom::insert([
                'nama' => $value['nama'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        Classrom::insert([
            'nama'=>'12TKJ C',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // 2.query builder
        // DB::table('class')->insert([
        //     'nama' => '12 TKJ D',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // 3.raw queery
        //membuat data untuk table class

    }
}
