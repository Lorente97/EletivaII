@extends('layout')
@section('titulo', 'Exercício 11')
@section('conteudo')
        <h1>Exercicio 11</h1>
        <form method="post" action="/exer11resp">
            <div class="mb-3">
                <label for="raio" class="form-label">Informe o raio do círculo:</label>
                <input type="number" id="raio" name="raio" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($perimetro)
            <p>O perímetro do círculo é: {{ $perimetro }}</p>
        @endisset
@endsection