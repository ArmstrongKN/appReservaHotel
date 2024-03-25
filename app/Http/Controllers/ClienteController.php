<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function showHome()
    {
        return view('home');
    }
     
    public function showFormularioCadastro(Request $request){
        return view("formularioCadastroCliente");
    }

    public function cadCliente(Request $request){
       
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);

        Cliente::create($dadosValidos);
        return Redirect::route('home');
    }
    
    public function mostrarGerenciarClienteId($id) {
        $cliente = Cliente::find($id);
    
        if ($cliente) {
            return view('xxxxxxxx', ['registroClientes' => $cliente]);
        } else {
            return redirect()->back()->with('error', 'Cliente não encontrado.');
        }
    }
    
    
  

    public function gerenciarCliente(Request $request){
        $dadosCliente = Cliente::query();
        $dadosCliente->when($request->nome,function($query,$valor){
        $query->where('nome','like','%'.$valor.'%');
        });
        $dadosCliente = $dadosCliente->get();
        return view('gerenciarCliente',['registrosClientes' => $dadosCliente]);
    }


    public function destroy(Cliente $id){
          $id->delete();
          return Redirect::route('home');
    }
    public function alterarClienteBanco(Cliente $id,Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);
        $id->fill($dadosValidos);
        $id->save();
        return Redirect::route('home');
    }
}
