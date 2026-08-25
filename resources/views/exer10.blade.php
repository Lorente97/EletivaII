@extends('layout')
@section('titulo', 'Exercício 10')
@section('conteudo')
        <h1>Exercicio 10</h1>
        <form method="post" action="/exer10resp">
            <div class="mb-3">
                <label for="largura" class="form-label">Informe a largura do retângulo:</label>
                <input type="number" id="largura" name="largura" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Informe a altura do retângulo:</label>
                <input type="number" id="altura" name="altura" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($perimetro)
            <p>O perímetro do retângulo é: {{ $perimetro }}</p>
        @endisset
@endsection