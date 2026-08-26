@extends('layout')
@section('titulo', 'Exercício 19')
@section('conteudo')
        <h1>Exercicio 19</h1>
        <form method="post" action="/exer19resp">
            <div class="mb-3">
                <label for="dias" class="form-label">Informe o valor em dias:</label>
                <input type="number" id="dias" name="dias" class="form-control" step="0.01" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($horas)
            <p>O valor em horas é: {{ $horas }}</p>
            <p>O valor em minutos é: {{ $minutos }}</p>
            <p>O valor em segundos é: {{ $segundos }}</p>
        @endisset
@endsection