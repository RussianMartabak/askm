<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kategori')->insert([
            'nama_kategori' => 'About Life',
            'keterangan' => '',
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'Foreign Affairs',
            'keterangan' => '',
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'Gaming',
            'keterangan' => '',
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'Programming',
            'keterangan' => '',
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'Military and Warfare',
            'keterangan' => '',
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'Politics',
            'keterangan' => '',
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'Career',
            'keterangan' => '',
        ]);
        DB::table('kategori')->insert([
            'nama_kategori' => 'Politics',
            'keterangan' => '',
        ]);
    }
}
