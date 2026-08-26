@extends('layout')
@section('titulo', 'Exercício 16')
@section('conteudo')
        <h1>Exercicio 16</h1>
        <form method="post" action="/exer16resp">
            <div class="mb-3">
                <label for="preco" class="form-label">Informe o preço:</label>
                <input type="number" id="preco" name="preco" class="form-control" step="0.01" required="">
            </div>
            <div class="mb-3">
                <label for="desconto" class="form-label">Informe o percentual de desconto:</label>
                <input type="number" id="desconto" name="desconto" class="form-control" step="0.01" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        @isset($precoDesconto)
            <p>O preço com desconto é: {{ $precoDesconto }}</p>
        @endisset
@endsection