<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\EstadoCivil;

class EstadoCivilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EstadoCivil::create(
            [
                'estado_civil' => 'Solteiro'
            ]
        );

        EstadoCivil::create(
            [
                'estado_civil' => 'Casado'
            ]
        );

        EstadoCivil::create(
            [
                'estado_civil' => 'Divorciado'
            ]
        );

        EstadoCivil::create(
            [
                'estado_civil' => 'União de facto'
            ]
        );
    }
}
