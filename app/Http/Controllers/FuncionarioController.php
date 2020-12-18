<?php

namespace App\Http\Controllers;

use App\Models\Funcionarios;

use Illuminate\Http\Request;
use App\funcionarioInsert;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

class FuncionarioController extends Controller {

    public function insert(){
        $urlData = getURLList();
        return view('stud_create');
    }
	
    public function create(Request $request){
        $rules = [
			'nome' => 'required|string|min:2|max:255',
			'email' => 'required|string|email|max:255',
			'telefone' => 'required|string|min:2|max:255',
			'cpf' => 'required|string|min:2|max:255',
			'empresa' => 'required|string|min:1|max:255'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			echo "error";
		}
		else{
            $data = $request->input();
			try{
				$funcionario = new funcionarioInsert;
                $funcionario->nome = $data['nome'];
                $funcionario->email = $data['email'];
				$funcionario->telefone = $data['telefone'];
				$funcionario->cpf = $data['cpf'];
				$funcionario->empresa_id = $data['empresa'];
				$funcionario->website = $data['website'];
				$funcionario->save();
				return redirect('admin/funcionarios')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('admin/funcionarios')->with('failed',"operation failed");
			}
		}
    }

	public function showFuncionarios() {
			$funcionarios = DB::table('funcionarios')->paginate(10);
			return view('admin.funcionarios', ['funcionarios' => $funcionarios]);
	}
	
	public function criaFuncionario() {
		if(Auth::check() === true) {
			$empresas = DB::table('empresas')->paginate(1000); // pega até 1000 empresas para o select
			return view('admin.criaFuncionario', ['empresas' => $empresas]);
		}
		return redirect()->route('admin.login');
	}
	
	function edit($id) {
		if(Auth::check() === true) {
			$data = Funcionarios::find($id);
			
			$empresas = DB::table('empresas')->paginate(1000);
			return view('admin.editFuncionario', ['data'=>$data, 'empresas' => $empresas]);
		}
		return redirect()->route('admin.login');
	}
	
	function update(Request $req) {
		if(Auth::check() === true) {
			$data = Funcionarios::find($req->id);
			$data->nome=$req->nome;
			$data->email=$req->email;
			$data->telefone=$req->telefone;
			$data->cpf=$req->cpf;
			$data->website=$req->website;
			$data->empresa_id=$req->empresa;
			$data->save();
			return redirect()->route('admin.funcionarios');
		}
		return redirect()->route('admin.login');
	}
	
	public function destroy(Funcionarios $func) {
        $func->delete();
		return redirect()->route('admin.funcionarios');
    }
	
	public function jsonFuncionario(Request $request) { // jsonfuncionario?id=2 id da empresa
		$func = Funcionarios::where('empresa_id', $request->id)->get();
		return $func->toJson();
		return $func->toJson(JSON_PRETTY_PRINT);
	}
	
}