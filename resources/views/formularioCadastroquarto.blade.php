@extends('layout')
@section('content')
<section class="container mt-5">
<form class="row g-3" method="Post" action="{{ route('envia-banco-quarto') }}">
    @csrf
  

  <div class="col-md-9">
    <label for="inputQuarto" class="form-label" id=>Quarto:</label>
    <input type="text" class="form-control" id="inputQuarto" placeholder="Numero do quarto">
  </div>



  <div class="col-3">
    <label for="inputTipo" class="form-label">Tipo</label>
    <input type="text" class="form-control" id="inputCity">
  </div>

  <div class="col-md-4">
    <label for="inputNome" class="form-label">Digite o número do quarto:</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>c
  </div>

  <div class="col-md-2">
    <label for="inputZip" class="form-label">Tipo:</label>
    <input type="text" class="form-control" id="inputZip">
  </div>

  <div class="col-md-2">
    <label for="inputZip" class="form-label">Valor da diária:</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Data Entrada:</label>
    <input type="text" class="form-control" id="inputZip">
  </div>

  <div class="col-md-2">
    <label for="inputZip" class="form-label">Data Saída:</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Situação:</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  
  <div class="col-md-3">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</section>
@endsection