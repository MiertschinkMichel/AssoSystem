<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AssociadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'tipo_associado' => \App\Models\Associado::PESSOA_FISICA,
            'cpf_cnpj' => '12345678901',
            'ie_rg' => rand(0, 6),
            'orgao_expedidor' => 'ssp',
            'dt_expedicao' => $this->faker->date(),
            'sexo' => rand(1,10) % 2 == 0 ? 'm' : 'f',
            'estado_civil' => rand(1,3),
            'dt_nascimento' => $this->faker->date(),
            'indicacao' => '',
            'nome_cobranca' => '',
            'logradouro' => $this->faker->streetName,
            'numero' => $this->faker->buildingNumber,
            'bairro' => $this->faker->citySuffix,
            'cidade' => $this->faker->city,
            'uf' => $this->faker->state,
            'cep' => $this->faker->postcode,
            //'telefone' => $this->faker->phone,
            'celular' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'protesta_titulo' => \rand (0,1),
            'rateio_bloqueado' => \rand (0,1), 
            'dt_saida' => $this->faker->date()
        ];
    }
}
