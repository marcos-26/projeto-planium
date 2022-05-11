<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Beneficiario;
use Illuminate\Http\Request;

class PlaniumController extends Controller
{
    public function getOrcamento(Request $request) {
        $Beneficiario = new Beneficiario;
        $Beneficiario->quantidade = $request->quantidade;
        $Beneficiario->idade = $request->idade;
        $Beneficiario->name = $request->name;
        $Beneficiario->registro = $request->registro;

        return response()->Json(['mensagem'=>'ok'], 200);

      }

}
