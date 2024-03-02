@extends('layout')
@section('content')
<section class="container mt-5">
<h1> Reserva de Quarto </h1>
<form class="row g-3" method="Post" action="{{route('envia-banco-reserva')}}">
</div>
@csrf
  <div class="col-md-3">
    <label for="inputNomeFuncionario" class="form-label">Digite o Código do Funcionário:</label>
    <input type="text" class="form-control" id="inputNomeFuncionario" name="nome" placeholder="123">
  </div>

  <div class="col-md-9">
    <label for="inputNomeFuncionario" class="form-label">Digite o Nome do Funcionário:</label>
    <input type="text" class="form-control" id="inputNomeCliente">
  </div>

  <div class="col-md-3">
    <label for="inputNomeCliente" class="form-label">Digite o Código do Funcionário:</label>
    <input type="text" class="form-control" id="inputNomeCliente" name="nome" placeholder="123">
  </div>

  <div class="col-md-9">
    <label for="inputNomeCliente" class="form-label">Digite o Nome do cliente:</label>
    <input type="email" class="form-control" id="inputEmail" nome="email" placeholder="Paulo@gmaul.com">
  </div>

  <div class="col-md-9">
    <label for="inputEmail" class="form-label">Email:</label>
    <input type="text" class="form-control" id="inputNomeCliente">
  </div>

  <div class="col-md-2">
    <label for="inputNumeroquarto" class="form-label">Digite o número do quarto:</label>
    <input type="text" class="form-control" id="inputNumeroquarto" name="numeroquarto" placeholder="123">
  </div>

    <div class="col-3">
    <label for="inputCity" class="form-label">Tipo</label>
    <input type="text" class="form-control" id="inputCity">
  </div>

  <div class="col-md-9">
    <label for="inputEmail" class="form-label" id=>Valor da Diária:</label>
    <input type="text" class="form-control" id="inputEmail" placeholder="Dig. seu email">
  </div>

  <div class="col-md-9">
    <label for="inputEmail" class="form-label" id=>Data de Entrada:</label>
    <input type="text" class="form-control" id="inputEmail" placeholder="Dig. seu email">
  </div>

  <div class="col-md-9">
    <label for="inputEmail" class="form-label" id=>Data de Saida:</label>
    <input type="text" class="form-control" id="inputEmail" placeholder="Dig. seu email">
  </div>

  <div class="col-md-9">
    <label for="inputNomeCliente" class="form-label">valor total:</label>
    <input type="text" class="form-control" id="inputNomeCliente">
  </div>

  <div class="col-md-9">
    <label for="inputNomeCliente" class="form-label">Digite o numero do quarto:</label>
    <input type="text" class="form-control" id="inputNomeCliente">
  </div>

  <div class="col-md-9">
    <label for="inputNomeCliente" class="form-label">Digite o numero do quarto:</label>
    <input type="text" class="form-control" id="inputNomeCliente">
  </div>

 

  <div class="col-md-4">
    <label for="inputTipoQuarto" class="form-label"> Tipo:</label>
    <input type="text" class="form-control" id="inputTipoQuarto" name="TipoQuarto">
  </div>


  <div class="col-md-4">
    <label for="inputDataEntrada" class="form-label"> Data da Entrada:</label>
    <input type="text" class="form-control" id="DataEntrada" name="DataEntrada">
  </div>

  <div class="col-md-3">
    <label for="inputDataSaida" class="form-label">Data de Saída:</label>
    <input type="text" class="form-control" id="DataSaida" name="DataSaida">
  </div>
  <div class="col-md-3">
    <label for="inputTotal" class="form-label">Total:</label>
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