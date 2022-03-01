<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadosSeeder extends Seeder
{
    static $estados = [
        [1, 'AC', 'Acre'],
        [2, 'AL', 'Alagoas'],
        [3, 'AM', 'Amazonas'],
        [4, 'AP', 'Amapá'],
        [5, 'BA', 'Bahia'],
        [6, 'CE', 'Ceará'],
        [7, 'DF', 'Distrito Federal'],
        [8, 'ES', 'Espírito Santo'],
        [9, 'GO', 'Goiás'],
        [10, 'MA', 'Maranhão'],
        [11, 'MG', 'Minas Gerais'],
        [12, 'MS', 'Mato Grosso do Sul'],
        [13, 'MT', 'Mato Grosso'],
        [14, 'PA', 'Pará'],
        [15, 'PB', 'Paraíba'],
        [16, 'PE', 'Pernambuco'],
        [17, 'PI', 'Piauí'],
        [18, 'PR', 'Paraná'],
        [19, 'RJ', 'Rio de Janeiro'],
        [20, 'RN', 'Rio Grande do Norte'],
        [21, 'RO', 'Rondônia'],
        [22, 'RR', 'Roraima'],
        [23, 'RS', 'Rio Grande do Sul'],
        [24, 'SC', 'Santa Catarina'],
        [25, 'SE', 'Sergipe'],
        [26, 'SP', 'São Paulo'],
        [27, 'TO', 'Tocantins']
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$estados as $estado){
            DB::table('tb_estados')->insert([
                'id'=> $estado[0],
                'uf'=>$estado[1],
                'nome'=>$estado[2]
            ]);
        }
    }
}
