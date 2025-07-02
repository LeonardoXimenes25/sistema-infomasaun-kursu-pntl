<?php

namespace Database\Factories;

use App\Models\kursu;
use App\Models\partisipante;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\partisipante>
 */
class PartisipanteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kursu_id' => kursu::factory(),
            'naran'=> $this->faker->name(),
            'diviza'=> $this->faker->randomElement([
                'Ajente',
                'Ajente Prinsipal',
                'Ajente Xefe',
                'Sarjento',
                'Primeiru Sarjentu',
                'Sarjentu Xefe',
                'Inspetor Asistente',
                'Inspetor',
                'Inspetor Xefe',
                'Supertemdemte Asistente',
                'Supertendente',
                'Supertendente Xefe',
                'Komisariu'
            ]),
            'unidade'=>$this->faker->randomElement([
                'Unidade Espesial Polisia (UEP)',
                'Unidade Intervens Rapida (UIR)',
                'Unidade Patrulhamento Fronteira (UPF)',
                'Unidade Maritima',
                'Unidade Pesoal Vuneravel (VPU)',
                'Unidade Reservista Polisia'
            ]),
            'departamentu'=>$this->faker->randomElement([
                'Departamentu Opersaun',
                'Departamentu Investigassaun',
                'Departamentu Tranzitu/Trafiku',
                'Departamentu Fronteira',
                'Departamentu Intelejensia',
                'Departamentu Logistika',
                'Departamentu Formasaun',
                'Departamentu Relasaun Komunitaria',
            ])
        ];
    }
}
