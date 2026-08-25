@extends('layout')
@section('titulo', 'Exercício 7')
@section('conteudo')
        <h1>Exercicio 7</h1>
        <form method="post" action="/exer7resp">
            <div class="mb-3">
                <label for="fahrenheit" class="form-label">Informe a temperatura em Fahrenheit:</label>
                <input type="number" id="fahrenheit" name="fahrenheit" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($celsius)
            <p>A temperatura em Celsius é: {{ $celsius }}</p>
        @endisset
@endsection