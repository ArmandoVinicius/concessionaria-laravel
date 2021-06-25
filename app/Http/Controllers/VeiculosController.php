<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\veiculos;
use Illuminate\Support\Facades\DB;

class VeiculosController extends Controller
{
    public function index() {
        $veiculos = veiculos::all();
        
        return view("index")->with('veiculos', $veiculos);
    }

    public function list() {
        $veiculos = veiculos::all();
        
        return view("Veiculos.veiculos")->with('veiculos', $veiculos);
    }

    public function create() {
        return view("Veiculos.add");
    }

    public function store(Request $request) {
        $modelo_car = $request->input('modelo_car');
        $fabricante_car = $request->input('fabricante_car');
        $cor_car = $request->input('cor_car');
        $ano_car = $request->input('ano_car');
        $preco_car = $request->input('preco_car');
        $chassi_car = $request->input('chassi_car');

        DB::table('veiculos')->insertGetId([
            'modelo_carro' => $modelo_car,
            'fabricante_carro' => $fabricante_car,
            'cor_carro' => $cor_car,
            'ano_carro' => $ano_car,
            'preco_carro' => $preco_car,
            'chassi_carro' => $chassi_car
        ]);

        return redirect("/");
    }

    public function delete($id) {
        DB::table('veiculos')->where('id', $id)->delete();
        return redirect("/");
    }

    public function show($id) {
        $veiculos = DB::table('veiculos')->where('id', $id)->select('*')->get();

        return view("Veiculos.update")->with('veiculos', $veiculos);
    }

    public function update(Request $request, $id) {
        $modelo_car = $request->input('modelo_car');
        $fabricante_car = $request->input('fabricante_car');
        $cor_car = $request->input('cor_car');
        $ano_car = $request->input('ano_car');
        $preco_car = $request->input('preco_car');
        $chassi_car = $request->input('chassi_car');

        DB::table('veiculos')->where('id', $id)->update(
            [
                'modelo_carro' => $modelo_car,
                'fabricante_carro' => $fabricante_car,
                'cor_carro' => $cor_car,
                'ano_carro' => $ano_car,
                'preco_carro' => $preco_car,
                'chassi_carro' => $chassi_car
            ]
        );

        return redirect("/");
    }
}
