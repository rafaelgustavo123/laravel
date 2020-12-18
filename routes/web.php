<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\AuthController::class, 'dashboard'])->name('admin');
Route::get('/admin/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('/admin/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('admin.logout');
Route::post('/admin/login/do', [App\Http\Controllers\AuthController::class, 'login'])->name('admin.login.do');

Route::get('/admin/empresas', [App\Http\Controllers\EmpresaController::class, 'showEmpresas'])->name('admin.empresas');
Route::get('/admin/funcionarios', [App\Http\Controllers\FuncionarioController::class, 'showFuncionarios'])->name('admin.funcionarios');

Route::get('/admin/criaempresa', [App\Http\Controllers\EmpresaController::class, 'criaEmpresa'])->name('criaempresa');
Route::get('/admin/criafuncionario', [App\Http\Controllers\FuncionarioController::class, 'criaFuncionario'])->name('criafuncionario');

Route::post('/admin/addempresa', [App\Http\Controllers\EmpresaController::class, 'create'])->name('addempresa');
Route::post('/admin/addfuncionario', [App\Http\Controllers\FuncionarioController::class, 'create'])->name('addfuncionario');

Route::middleware("auth")->group(function ($router) {
    $router->delete('/funcionario/{func}', [App\Http\Controllers\FuncionarioController::class, 'destroy'])->name('funcionariodestroy');
});
Route::middleware("auth")->group(function ($router) {
    $router->delete('/empresa/{emp}', [App\Http\Controllers\EmpresaController::class, 'destroy'])->name('empresadestroy');
});

Route::get('/admin/edit_empresa/{id}', [App\Http\Controllers\EmpresaController::class, 'edit'])->name('edit');
Route::post('/admin/update', [App\Http\Controllers\EmpresaController::class, 'update'])->name('update');

Route::get('/admin/edit_func/{id}', [App\Http\Controllers\FuncionarioController::class, 'edit'])->name('edit');
Route::post('/admin/update2', [App\Http\Controllers\FuncionarioController::class, 'update'])->name('update');

Route::get('/jsonempresa', [App\Http\Controllers\EmpresaController::class, 'jsonEmpresa'])->name('jsonempresa');
Route::get('/jsonfuncionario', [App\Http\Controllers\FuncionarioController::class, 'jsonFuncionario'])->name('jsonfuncionario');