<?php

namespace App\Http\Controllers;

use App\Models\Empresas;

use Illuminate\Http\Request;
use App\empresaInsert;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

class EmpresaController extends Controller {

    public function insert(){
        $urlData = getURLList();
        return view('stud_create');
    }
	
    public function create(Request $request){
        $rules = [
			'empresa' => 'required|string|min:2|max:255',
			'email' => 'required|string|email|max:255',
			'site' => 'required|string|min:2|max:255'
		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return redirect('admin/criaempresa')
			->withInput()
			->withErrors($validator);
		}
		else{
            $data = $request->input();
			try{
				$empresa = new empresaInsert;
                $empresa->nome = $data['empresa'];
                $empresa->email = $data['email'];
				$empresa->website = $data['site'];
				$empresa->logo = $data['logo'];
				$empresa->save();
				return redirect('admin/empresas')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('admin/empresas')->with('failed',"operation failed");
			}
		}
    }
	
	public function showEmpresas() {
		
		if(Auth::check() === true) {
			$empresas = DB::table('empresas')->paginate(10);
			return view('admin.empresas', ['empresas' => $empresas]);
		}
		return redirect()->route('admin.login');
		
	}

	public function criaEmpresa() {
		
		if(Auth::check() === true) {
			return view('admin.CriaEmpresa');
		}
		return redirect()->route('admin.login');
		
	}
	
	function edit($id) {
		if(Auth::check() === true) {
			$data = Empresas::find($id);
			return view('admin.editEmpresa', ['data'=>$data]);
		}
		return redirect()->route('admin.login');
	}
	
	function update(Request $req) {
		if(Auth::check() === true) {
			$data = Empresas::find($req->id);
			$data->nome=$req->nome;
			$data->email=$req->email;
			$data->website=$req->site;
			$data->logo=$req->logo;
			$data->save();
			return redirect()->route('admin.empresas');
		}
		return redirect()->route('admin.login');
	}
	
	public function destroy(Empresas $emp) {
        $emp->delete();
		return redirect()->route('admin.empresas');
    }
	
	public function jsonEmpresa() {
		$emp = Empresas::all();
		return $emp->toJson();
		return $emp->toJson(JSON_PRETTY_PRINT);
	}
	
	
}