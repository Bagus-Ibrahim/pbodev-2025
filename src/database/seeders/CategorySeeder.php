<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder {
    public function run(): void {
        Category::create(['name' => 'Elektronik', 'description' => 'Perangkat elektronik konsumer']);
        Category::create(['name' => 'ATK', 'description' => 'Alat Tulis Kantor']);
    }
}