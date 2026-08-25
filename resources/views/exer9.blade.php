@extends('layout')
@section('titulo', 'Exercício 9')
@section('conteudo')
        <h1>Exercicio 9</h1>
        <form method="post" action="/exer9resp">
            <div class="mb-3">
                <label for="raio" class="form-label">Informe o raio do círculo:</label>
                <input type="number" id="raio" name="raio" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($area)
            <p>A área do círculo é: {{ $area }}</p>
        @endisset
@endsection