@extends('layouts.main')

@section('title', 'Agendamento de Serviço - Alterar')

@section('content')

    <form action="{{url("/atualizar/$servico->id")}}" method="POST">

        @csrf
        @method('put')

        <fieldset> <b id="FormTitle"> Alterar - Agendamento de Pontenciais Clientes </b> </fieldset>
        Sistema utilizado para editar agendamento de serviços.
        <br>
        <br>
        <div class="mb-3">
            <label for="InputName" class="form-label" id="InputTitle"> Nome: </label>
            <input name="nome" value="{{$servico->nome}}" type="text" class="form-control" id="InputName">
        </div>

        <div class="mb-3">
            <label for="InputTelefone" class="form-label" id="InputTitle"> Telefone: </label>
            <input name="telefone" value="{{$servico->telefone}}" type="text" class="form-control" id="InputTelefone" placeholder="(XX) XXXXX-XXXX">
        </div>

        <label for="InputOrigem" class="form-label" id="InputTitle"> Origem: </label>
        <select name="origem" value="{{$servico->origem}}" class="form-select">
            <option value="telefone celular">Telefone Celular</option>
            <option value="telefone comercial">Telefone Comercial</option>
            <option value="telefone residencial">Telefone Residencial</option>
        </select>
        <br>

        <div class="mb-3">
            <label for="InputData" class="form-label" id="InputTitle"> Data: </label>
            <input name="data" value="{{$servico->data->format('Y-m-d')}}" type="date" class="form-control" id="InputData">
        </div>
        
        <label for="InputObs" class="form-label" id="InputTitle"> Observação: </label> <br>
        <textarea class="border" name="observacao" value="{{$servico->observacao}}" id="InputObs"></textarea>
        <br>
        <br>
        <button type="submit" class="btn btn-primary"> Alterar </button>

    </form>

@endsection