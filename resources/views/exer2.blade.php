@extends('layout')
@section('titulo', 'Exercício 2')
@section('conteudo')
        <h1>Exercicio 2</h1>
        <form method="post" action="/exer2resp">
            <div class="mb-3">
                <label for="valor1" class="form-label">Informe o primeiro valor:</label>
                <input type="number" id="valor1" name="valor1" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="valor2" class="form-label">Informe o segundo valor para ser subtraído do valor 1:</label>
                <input type="number" id="valor2" name="valor2" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($subtracao)
            <p>Após a subtração o resultado é esse: {{ $subtracao }}</p>
        @endisset
@endsection