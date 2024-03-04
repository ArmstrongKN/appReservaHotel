@extends('layout')
@section('content')
<section class="container mt-5">
<form class="row g-3" method="Post" action="{{ route('envia-banco-funcionario') }}">
@csrf
  <div class="col-md-12">
    <label for="inputNome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome">
  </div>

  <div class="col-md-12">
    <label for="inputFuncao" class="form-label">Função:</label>
    <input type="text" class="form-control" id="inputFuncao" placeholder="Dig. sua função">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</section>
@endsection