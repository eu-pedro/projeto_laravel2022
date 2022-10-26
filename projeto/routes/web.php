 <?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Criando a minha rota
//1 - o caminho da rota e 2 - a função que será executada
Route::get("usuario/{id}", function ($id) {
    return "Você está na página usuário o valor digitado é: {$id}";
});

Route::get("cliente", function (){
    
    $resultado = [
        
        "nome" => "Pedro Henrique",
        "endereco" => "Rua 100",
        "cpf" => "123.456.789.21",
    ];
    
    dd($resultado); // este método significa dump and die
    
});

Route::get("teste", function (Request $requisicao){
    $resposta = $requisicao->ip();
    dd($resposta);
});

Route::get("funcionario", [App\Http\Controllers\FuncionarioController::class, "mostrarDados"]);

Route::get("infofuncionario", [App\Http\Controllers\FuncionarioController:: class, "infoFuncionario"]);

Route::get("funcionarioView", function () {
    return view('funcionario');
}); 