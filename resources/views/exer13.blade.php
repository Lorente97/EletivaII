@extends('layout')
@section('titulo', 'Exercício 13')
@section('conteudo')
        <h1>Exercicio 13</h1>
        <form method="post" action="/exer13resp">
            <div class="mb-3">
                <label for="metros" class="form-label">Informe o valor em metros:</label>
                <input type="number" id="metros" name="metros" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($centimetros)
            <p>O valor em centímetros é: {{ $centimetros }}</p>
        @endisset
@endsection