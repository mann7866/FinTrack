<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'user_id' => '1',
            'name'=>'uang saku',
        ],);
        Category::create([
            'user_id' => '1',
            'name'=>'uang bensin',
        ],);
        Category::create([
            'user_id' => '1',
            'name'=>'uang makan',
        ],);
        Category::create([
            'user_id' => '1',
            'name'=>'uang maling',
        ],);
    }
}
