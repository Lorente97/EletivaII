@extends('layout')
@section('titulo', 'Exercício 18')
@section('conteudo')
        <h1>Exercicio 18</h1>
        <form method="post" action="/exer18resp">
            <div class="mb-3">
                <label for="capital" class="form-label">Informe o capital:</label>
                <input type="number" id="capital" name="capital" class="form-control" step="0.01" required="">
            </div>
            <div class="mb-3">
                <label for="taxa" class="form-label">Informe a taxa de juros:</label>
                <input type="number" id="taxa" name="taxa" class="form-control" step="0.01" required="">
            </div>
            <div class="mb-3">
                <label for="periodo" class="form-label">Informe o período:</label>
                <input type="number" id="periodo" name="periodo" class="form-control" step="0.01" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($montante)
            <p>O montante com juros compostos é: {{ $montante }}</p>
        @endisset
@endsection