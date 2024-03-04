@extends('layout')

@section('content')
<section class="container mt-5">
    <h1> Reserva de Quarto </h1>
    <form class="row g-3" method="POST" action="{{ route('envia-banco-reserva') }}">
 
@csrf

  <div class="col-md-3">
    <label for="inputCodigoFuncionario" class="form-label">Digite o Código do Funcionário:</label>
    <input type="text" class="form-control" id="inputCodigoFuncionario" name="CodigoFuncionario">
  </div>

  <div class="col-md-3">
    <label for="inputNomeFuncionario" class="form-label">Digite o Nome do Funcionário:</label>
    <input type="text" class="form-control" id="inputNomeFuncionario" name="NomeFuncionario">
  </div>

  <div class="col-md-3">
    <label for="inputCodigoCliente" class="form-label">Digite o Código do Cliente:</label>
    <input type="text" class="form-control" id="inputCodigoCliente" name="CodigoCliente">
  </div>

  <div class="col-md-9">
    <label for="inputNomeCliente" class="form-label">Digite o Nome do cliente:</label>
    <input type="email" class="form-control" id="inputNomeCliente" nome="NomeCliente">
  </div>

  <div class="col-md-9">
    <label for="inputNumeroQuarto" class="form-label">Digite o numero do quarto:</label>
    <input type="text" class="form-control" id="inputNumeroQuarto" name="NumeroQuarto">
  </div>

  <div class="col-md-4">
    <label for="inputTipoQuarto" class="form-label"> Tipo:</label>
    <input type="text" class="form-control" id="inputTipoQuarto" name="TipoQuarto">
  </div>

  <div class="col-md-4">
    <label for="inputTipoQuarto" class="form-label"> Valor da Diária:</label>
    <input type="text" class="form-control" id="inputValor Diaria" name="ValorDiaria">
  </div>

  <div class="col-md-4">
    <label for="inputDataEntrada" class="form-label"> Data da Entrada:</label>
    <input type="date" class="form-control" id="DataEntrada" name="DataEntrada">
  </div>

  <div class="col-md-3">
    <label for="inputDataSaida" class="form-label">Data de Saída:</label>
    <input type="date" class="form-control" id="DataSaida" name="DataSaida">
  </div>

  <div class="col-md-3">
    <label for="inputTotal" class="form-label">Valor Total:</label>
      <div class="input-group md-3">
        <span class="input-group-text">R$</span>
      </div>
    <input type="text" class="form-control" id="inputZip">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    </form>
</section>
@endsection