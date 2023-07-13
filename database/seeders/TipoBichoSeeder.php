<?php

namespace Database\Seeders;

use App\Models\TipoBicho;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoBichoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tipos = [
            "Aracnideos",
            "Mamiferos",
            "Insetos",
            "Moluscos",
            "Virus",
            "Bacterias"
        ];

        foreach ($tipos as $tipo) {
            TipoBicho::create(['descricao' => $tipo]);
        }
    }
}
