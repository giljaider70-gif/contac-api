<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact; // Asegúrate de importar tu modelo

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        // Genera 10 contactos falsos usando el factory
        Contact::factory(10)->create();
    }
}