@extends('layout')
@section('content')
<section class="container mt-5">
 <form class="row g-3" method="Post" action="{{route(envia-banco-reserva')}}">
@csrf
  <div class="col-md-12">
    <label for="inputNome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome">
  </div>

  <div class="col-md-12">
    <label for="inputEmail" class="form-label">Email:</label>
    <input type="text" class="form-control" id="inputEmail" placeholder="Dig. seu email">
  </div>

  <div class="col-3">
    <label for="inputFone" class="form-label">Fone</label>
    <input type="text" class="form-control" id="inputCity">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</section>
@endsection