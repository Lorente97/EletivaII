@extends('layout')
@section('titulo', 'Exercício 8')
@section('conteudo')
        <h1>Exercicio 8</h1>
        <form method="post" action="/exer8resp">
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
        @isset($area)
            <p>A área do retângulo é: {{ $area }}</p>
        @endisset
@endsection