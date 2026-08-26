@extends('layout')
@section('titulo', 'Exercício 20')
@section('conteudo')
        <h1>Exercicio 20</h1>
        <form method="post" action="/exer20resp">
            <div class="mb-3">
                <label for="distancia" class="form-label">Informe a distância:</label>
                <input type="number" id="distancia" name="distancia" class="form-control" step="0.01" required="">
            </div>
            <div class="mb-3">
                <label for="tempo" class="form-label">Informe o tempo:</label>
                <input type="number" id="tempo" name="tempo" class="form-control" step="0.01" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($velocidade)
            <p>A velocidade média é: {{ $velocidade }}</p>
        @endisset
@endsection