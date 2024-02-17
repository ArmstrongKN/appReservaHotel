<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function showhome(){
        return view("home");
    }
    public function showFormularioCadastro(Request $request){
        return view("formularioCadastroCliente");
    }
}
