<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function mostrarDados(){
        return "Estou na classe FuncionárioController!!";
    }

    public function infoFuncionario(){
        $dados = array(
            "nome"=>"Pedro", 
            "idade" => 19, 
            "salário" => 2700);
        dd($dados);
    }
}
