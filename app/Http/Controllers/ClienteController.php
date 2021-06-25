<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cliente;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    public function index() {
        $clientes = cliente::all();
        
        return view("Clientes.clientes_table")->with('clientes', $clientes);
    }

    public function create() {
        return view("Clientes.add_cliente");
    }

    public function store(Request $request) {
        $nome_cli = $request->input('nome_cli');
        $email_cli = $request->input('email_cli');
        $cpf_cli = $request->input('cpf_cli');
        $telefone_cli = $request->input('telefone_cli');
        $rg_cli = $request->input('rg_cli');
        $cidade_cli = $request->input('cidade_cli');
        $estado_cli = $request->input('estado_cli');
        $cnh_cli = $request->input('cnh_cli');

        DB::table('clientes')->insertGetId([
            'nome_cli' => $nome_cli,
            'email_cli' => $email_cli,
            'cpf_cli' => $cpf_cli,
            'telefone_cli' => $telefone_cli,
            'rg_cli' => $rg_cli,
            'cidade_cli' => $cidade_cli,
            'estado_cli' => $estado_cli,
            'cnh_cli' => $cnh_cli
        ]);

        return redirect("/clientes_table");
    }

    public function delete($id) {
        DB::table('clientes')->where('id', $id)->delete();
        return redirect("/clientes_table");
    }

    public function show($id) {
        $clientes = DB::table('clientes')->where('id', $id)->select('*')->get();

        return view("Clientes.update_cli")->with('clientes', $clientes);
    }

    public function update(Request $request, $id) {
        $nome_cli = $request->input('nome_cli');
        $email_cli = $request->input('email_cli');
        $cpf_cli = $request->input('cpf_cli');
        $telefone_cli = $request->input('telefone_cli');
        $rg_cli = $request->input('rg_cli');
        $cidade_cli = $request->input('cidade_cli');
        $estado_cli = $request->input('estado_cli');
        $cnh_cli = $request->input('cnh_cli');

        DB::table('clientes')->where('id', $id)->update(
            [
                'nome_cli' => $nome_cli,
                'email_cli' => $email_cli,
                'cpf_cli' => $cpf_cli,
                'telefone_cli' => $telefone_cli,
                'rg_cli' => $rg_cli,
                'cidade_cli' => $cidade_cli,
                'estado_cli' => $estado_cli,
                'cnh_cli' => $cnh_cli
            ]
        );

        return redirect("/clientes_table");
    }
}
