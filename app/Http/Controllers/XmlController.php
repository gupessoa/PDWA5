<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Celular;

class XmlController extends Controller
{
    //gerando o xml com todos os dados
    public function gerarXml(){

        $dados = Celular::all();

        return response()->view('data-xml', ['registros' => $dados])->header('Content-Type', 'application/xml');
    }
}
