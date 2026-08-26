@extends('layout')
@section('titulo', 'Exercício 14')
@section('conteudo')
        <h1>Exercicio 14</h1>
        <form method="post" action="/exer14resp">
            <div class="mb-3">
                <label for="quilometros" class="form-label">Informe o valor em quilômetros:</label>
                <input type="number" id="quilometros" name="quilometros" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($milhas)
            <p>O valor em milhas é: {{ $milhas }}</p>
        @endisset
@endsection