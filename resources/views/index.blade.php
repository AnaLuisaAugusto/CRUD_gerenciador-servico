@extends('layouts.main')

@section('title', 'Cadastro de Clientes')

@section('content')

    <form method="POST" action="salvar" id="formCadastro" name="form">

        @csrf
        <fieldset> <b id="FormTitle"> Cadastrar - Agendamento de Pontenciais Clientes </b> </fieldset>
          Sistema utilizado para agendamento de serviços.
        <br>
        <br> 
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input name="nome" type="text" class="form-control" id="txtNome" required placeholder="Insira seu nome">
        </div>
        <div class="mb-3">
            <label for="txtTel" class="form-label">Telefone:</label>
            <input name="telefone" type="tel" class="form-control" id="txtTel" required placeholder="(xx) xxxxx-xxxx">
        </div>

        <label for="optionOrigem" class="form-label" id="InputTitle"> Origem: </label>
        <select name="origem" class="form-select">
            <option value="telefone celular">Telefone Celular</option>
            <option value="telefone comercial">Telefone Comercial</option>
            <option value="telefone residencial">Telefone Residencial</option>
        </select>
        <br>
        <div class="mb-3">
            <label for="txtDtContato">Data do Contato:</label>
            <input name="data" type="date" class="form-control" id="inputField" required name="txtDtContato">
        </div>
        <div class="mb-3">
            <label for="txtObs" id="inputField" class="form-label">Observação:</label>
            <textarea class="form-control" name="observacao" id="txtObs" rows="3"></textarea>
        </div>
        <button type="submit" id="btnCadastrar" class="btn btn-primary">Cadastrar</button>

    </form>

@endsection