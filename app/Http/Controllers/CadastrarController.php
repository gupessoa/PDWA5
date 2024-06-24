<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Celular;

class CadastrarController extends Controller
{
    // regras de negócios
    public function salvar(Request $request){
        $request->validate([
            "marca" => "required|min:3|max:20",
            "modelo" => "required",
            "ano_lancamento" => "required|date",
            "tamanho_tela" => "required|decimal:2",
            "processador" => "required"
        ],
        [
            "marca.required" => "O campo Marca deve ser informado",
            "marca.min" => "O campo Marca deve ter no minimo um tamnho de 3 caracteres",
            "marca.max" => "O campo Marca deve ter no maximo um tamnho de 50 caracteres",
            "modelo.required" => " O campo modelo deve ser preenchido",
            "ano_lancamento.required" => " O campo ano de lançamento deve ser preenchido",
            "tamanho_tela.decimal" => " O campo tamanho da tela deve ter duas casas decimais",
            "processador.required" => " O campo tamanho da tela deve ser preenchido",
        ]);
        $celular = new Celular();
        $celular->fill($request->all());
        $celular->save();

        return view('cadastrosalvo');
    }
}
