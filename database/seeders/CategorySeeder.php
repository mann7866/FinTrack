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
            'name'=>'uang saku',
        ],);
        Category::create([
            'name'=>'uang bensin',
        ],);
        Category::create([
            'name'=>'uang makan',
        ],);
        Category::create([
            'name'=>'uang maling',
        ],);
    }
}
