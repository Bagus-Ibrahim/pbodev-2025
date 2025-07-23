<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder {
    public function run(): void {
        Supplier::create(['name' => 'PT Jaya Abadi', 'email' => 'jaya@abadi.com']);
        Supplier::create(['name' => 'CV Makmur Sentosa', 'email' => 'makmur@sentosa.com']);
    }
}