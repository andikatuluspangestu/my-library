<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeders harus mengosongkan tabel dahulu baru diinsert data
        Schema::disableForeignKeyConstraints();
        User::truncate();
        // Schema::enableForeignKeyConstraints();

        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'phone' => '0283888111',
            'address' => 'Perpustakaan UBSI',
            'status' => 'active',
            'role_id' => '1',
        ]);

        DB::table('users')->insert([
            'username' => 'client',
            'password' => Hash::make('client'),
            'phone' => '0283888222',
            'address' => 'UBSI Kota Tegal',
            'status' => 'active',
            'role_id' => '2',
        ]);

        DB::table('users')->insert([
            'username' => 'husni',
            'password' => Hash::make('husni'),
            'phone' => '0283888112',
            'address' => 'UBSI Kota Tegal',
            'status' => 'inactive',
            'role_id' => '2',
        ]);
    }
}
