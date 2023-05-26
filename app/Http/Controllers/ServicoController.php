<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class ServicoController extends Controller
{
    public function consulta()
    {
        $servicos = Servico::query()->get();

        return view('consulta', ['servicos' => $servicos]);
        
    }

    public function create(){

        return view('index');

    }

    public function salvar(Request $request)
    {

        Servico::query()->create($request->all());

        return back();

    }

    public function destroy($id)
    {

        $servico = Servico::query()->findOrFail($id);

        $servico->delete();

        return back();

    }

    public function alterar($id)
    {

        $servico = Servico::query()->findOrFail($id);

        return view('alterar', ['servico' => $servico]);

    }

    public function update(Request $request, $id)
    {

        if(!$request->observacao){

            unset($request['observacao']);

        }

        $servico = Servico::query()->findOrFail($id);

        $servico->update($request->all());

        $servicos = Servico::query()->get();

        return view('consulta', ['servicos' => $servicos]);


    }
}
