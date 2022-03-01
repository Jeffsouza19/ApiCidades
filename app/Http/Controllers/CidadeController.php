<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Cidade;
use Illuminate\Support\Arr;

class CidadeController extends Controller
{
    public function adicionar(Request $request){
        $array = ['error' =>''];

        $rules = [
            'estado'=>'required',
            'nome'=>'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            $array['error'] = $validator->messages();
            return $array;
        }

        $nome = $request->input('nome');
        $estado = $request->input('estado');
        $uf = $request->input('estado');

        switch ($uf) {
            case 'Acre': $uf = 'AC'; break;
            case 'Alagoas': $uf = 'AL'; break;
            case 'Amazonas': $uf = 'AM'; break;
            case 'Amapa': $uf = 'AP'; break;
            case 'Bahia': $uf = 'BA'; break;
            case 'Ceará': $uf = 'CE'; break;
            case 'Distrito Federal': $uf = 'DF'; break;
            case 'Espirito Santo': $uf = 'ES'; break;
            case 'Goias': $uf = 'GO'; break;
            case 'Maranhao': $uf = 'MA'; break;
            case 'Minas Gerais': $uf = 'MG'; break;
            case 'Mato Grosso do Sul': $uf = 'MS'; break;
            case 'Mato Grosso': $uf = 'MT'; break;
            case 'Para': $uf = 'PA'; break;
            case 'Paraiba': $uf = 'PB'; break;
            case 'Pernambuco': $uf = 'PE'; break;
            case 'Piaui': $uf = 'PI'; break;
            case 'Parana': $uf = 'PR'; break;
            case 'Rio de Janeiro': $uf = 'RJ'; break;
            case 'Rio Grande do Norte': $uf = 'RN'; break;
            case 'Rondonia': $uf = 'RO'; break;
            case 'Roraima': $uf = 'RR'; break;
            case 'Rio Grande do Sul': $uf = 'RS'; break;
            case 'Santa Catarina': $uf = 'SC'; break;
            case 'Sergipe': $uf = 'SE'; break;
            case 'São Paulo': $uf = 'SP'; break;
            case 'Tocantins': $uf = 'TO'; break;

        }


        switch ($estado) {
            case 'Acre': $estado = 1; break;
            case 'Alagoas': $estado = 2; break;
            case 'Amazonas': $estado = 3; break;
            case 'Amapa': $estado = 4; break;
            case 'Bahia': $estado = 5; break;
            case 'Ceará': $estado = 6; break;
            case 'Distrito Federal': $estado = 7; break;
            case 'Espirito Santo': $estado = 8; break;
            case 'Goias': $estado = 9; break;
            case 'Maranhao': $estado = 10; break;
            case 'Minas Gerais': $estado = 11; break;
            case 'Mato Grosso do Sul': $estado = 12; break;
            case 'Mato Grosso': $estado = 13; break;
            case 'Para': $estado = 14; break;
            case 'Paraiba': $estado = 15; break;
            case 'Pernambuco': $estado = 16; break;
            case 'Piaui': $estado = 17; break;
            case 'Parana': $estado = 18; break;
            case 'Rio de Janeiro': $estado = 19; break;
            case 'Rio Grande do Norte': $estado = 20; break;
            case 'Rondonia': $estado = 21; break;
            case 'Roraima': $estado = 22; break;
            case 'Rio Grande do Sul': $estado = 23; break;
            case 'Santa Catarina': $estado = 24; break;
            case 'Sergipe': $estado = 25; break;
            case 'São Paulo': $estado = 26; break;
            case 'Tocantins': $estado = 27; break;

        }

        if(is_string($estado)){
            $array['error'] = 'estado inexistente';
            return $array;
        }

        $cidade = new Cidade();
        $cidade->estado = $estado;
        $cidade->uf = $uf;
        $cidade->nome = $nome;
        $cidade->save();



        return $array;
    }

    public function list(){
        $array = ['error'=>''];

        $list = Cidade::paginate(10);
        if($list){
            $array['list'] = $list;

        }else{
            $array['error'] = 'Nao tem cidade cadastrada';
            return $array;
        }


        return $array;
    }

    public function editar($id, Request $request){
        $array = ['error'=>''];


        $rules = [
            'nome'=>'min:4',
            'estado'=>'min:3'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            $array['error'] = $validator->messages();
            return $array;
        }

        $nome = $request->input('nome');
        $estado = $request->input('estado');
        $uf = $request->input('estado');

        switch ($uf) {
            case 'Acre': $uf = 'AC'; break;
            case 'Alagoas': $uf = 'AL'; break;
            case 'Amazonas': $uf = 'AM'; break;
            case 'Amapa': $uf = 'AP'; break;
            case 'Bahia': $uf = 'BA'; break;
            case 'Ceará': $uf = 'CE'; break;
            case 'Distrito Federal': $uf = 'DF'; break;
            case 'Espirito Santo': $uf = 'ES'; break;
            case 'Goias': $uf = 'GO'; break;
            case 'Maranhao': $uf = 'MA'; break;
            case 'Minas Gerais': $uf = 'MG'; break;
            case 'Mato Grosso do Sul': $uf = 'MS'; break;
            case 'Mato Grosso': $uf = 'MT'; break;
            case 'Para': $uf = 'PA'; break;
            case 'Paraiba': $uf = 'PB'; break;
            case 'Pernambuco': $uf = 'PE'; break;
            case 'Piaui': $uf = 'PI'; break;
            case 'Parana': $uf = 'PR'; break;
            case 'Rio de Janeiro': $uf = 'RJ'; break;
            case 'Rio Grande do Norte': $uf = 'RN'; break;
            case 'Rondonia': $uf = 'RO'; break;
            case 'Roraima': $uf = 'RR'; break;
            case 'Rio Grande do Sul': $uf = 'RS'; break;
            case 'Santa Catarina': $uf = 'SC'; break;
            case 'Sergipe': $uf = 'SE'; break;
            case 'São Paulo': $uf = 'SP'; break;
            case 'Tocantins': $uf = 'TO'; break;

        }


        switch ($estado) {
            case 'Acre': $estado = '01'; break;
            case 'Alagoas': $estado = '02'; break;
            case 'Amazonas': $estado = '03'; break;
            case 'Amapa': $estado = '04'; break;
            case 'Bahia': $estado = '05'; break;
            case 'Ceará': $estado = '06'; break;
            case 'Distrito Federal': $estado = '07'; break;
            case 'Espirito Santo': $estado = '08'; break;
            case 'Goias': $estado = '09'; break;
            case 'Maranhao': $estado = '10'; break;
            case 'Minas Gerais': $estado = '11'; break;
            case 'Mato Grosso do Sul': $estado = '12'; break;
            case 'Mato Grosso': $estado = '13'; break;
            case 'Para': $estado = '14'; break;
            case 'Paraiba': $estado = '15'; break;
            case 'Pernambuco': $estado = '16'; break;
            case 'Piaui': $estado = '17'; break;
            case 'Parana': $estado = '18'; break;
            case 'Rio de Janeiro': $estado = '19'; break;
            case 'Rio Grande do Norte': $estado = '20'; break;
            case 'Rondonia': $estado = '21'; break;
            case 'Roraima': $estado = '22'; break;
            case 'Rio Grande do Sul': $estado = '23'; break;
            case 'Santa Catarina': $estado = '24'; break;
            case 'Sergipe': $estado = '25'; break;
            case 'São Paulo': $estado = '26'; break;
            case 'Tocantins': $estado = '27'; break;

        }

        $cidade = Cidade::find($id);
        if($cidade){
            if($nome){
                $cidade->nome = $nome;
            }
            if($estado>= 01 && $estado<=27){
                $cidade->estado = $estado;
                $cidade->uf = $uf;
            }else{
                $array['error'] = 'Nome do Estado incorreto!';
            }
            $cidade->save();
            $array['sucess'] = 'Cidade alterada';
        }else{
            $array['error'] = 'Cidade'.$id.'não cadastrada ainda!';
        }
        return $array;
    }

    public function deletar($id){
        $array = ['error'=>''];

        $cidade = Cidade::find($id);
        if($cidade){
            $cidade -> delete();
            $array['sucess'] = 'Cidade deletada';
        }else{
            $array['error'] = 'Cidade nao cadastrada';
        }

        return $array;
    }

    public function verificar(Request $request){
        $array = ['error'=>''];

        $rules = [
            'cidade'=>'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            $array['error'] = $validator->messages();
            return $array;
        }
            $cidade = $request->input('cidade');

            $findCidade = Cidade::where('nome', 'LIKE', $cidade)->count();

            if($findCidade){
               $findCidade = Cidade::where('nome', 'LIKE', $cidade)->get();
               $array = $findCidade;
            }else{
               $array = '0';
            }


        return $array;
    }


    public function cidade(Request $request){
        $array = ['error' => ''];
        $rules = [
            'cidade'=>'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            $array['error'] = $validator->messages();
            return $array;
        }
        $cidade = $request->input('cidade');

        $idCidade = Cidade::where('nome', 'LIKE', $cidade)->get('id');

        if($idCidade){

            return $idCidade;

        }
        $array['error'] = 'Cidade nao encontrada';


        return $array;

    }
}
