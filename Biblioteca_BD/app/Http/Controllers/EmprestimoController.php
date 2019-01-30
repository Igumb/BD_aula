<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emprestimo;
class EmprestimoController extends Controller
{
    public function create(Request $request){
		$emprestimo = new Emprestimo;
		$emprestimo->status = $request->status;
		$emprestimo->dataDeInicio = $request->dataDeTermino;
		$emprestimo->dataDeTermino = $request->dataDeTermino;
		$emprestimo->clientesId = $request->clientesId;
		$emprestimo->livrosId = $request->livrosId;
		$emprestimo->save();
		return response()->json([$emprestimo]);
	}
}
