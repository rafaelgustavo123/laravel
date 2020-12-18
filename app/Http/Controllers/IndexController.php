<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        $empresas = DB::table('empresas')->paginate(10);
		$funcionarios = DB::table('funcionarios')->paginate(10);


        return view('index', [
		'empresas' => $empresas,
		'funcionarios' => $funcionarios
		
		]);
		
    }
}