@extends('layout')
@section('titulo', 'Exercício 15')
@section('conteudo')
        <h1>Exercicio 15</h1>
        <form method="post" action="/exer15resp">
            <div class="mb-3">
                <label for="peso" class="form-label">Informe seu peso em kg:</label>
                <input type="number" id="peso" name="peso" class="form-control" step="0.01" required="">
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Informe sua altura em metros:</label>
                <input type="number" id="altura" name="altura" class="form-control" step="0.01" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($imc)
            <p>O seu IMC é: {{ $imc }}</p>
        @endisset
@endsection