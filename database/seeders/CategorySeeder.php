<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
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
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Rohani', 'Programming', 'Hardware', 'Bisnis-Investasi', 'Akuntansi'
        ];

        foreach ($data as $data) {
            Category::insert([
                'name' => $data
            ]);
        }
    }
}
