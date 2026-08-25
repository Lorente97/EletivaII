<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    
    public function abrirFormExer1(){
        return view('exer1');
    }

    public function respostaExer1(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $soma = $valor1 + $valor2;
        return view('exer1', ['soma' => $soma]);

    }

    public function abrirFormExer2(){
        return view('exer2');
    }

    public function respostaExer2(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $subtracao = $valor1 - $valor2;
        return view('exer2', ['subtracao' => $subtracao]);

    }

    public function abrirFormExer3(){
        return view('exer3');
    }

    public function respostaExer3(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $multiplicacao = $valor1 * $valor2;
        return view('exer3', ['multiplicacao' => $multiplicacao]);
    }

    public function abrirFormExer4(){
        return view('exer4');
    }

    public function respostaExer4(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        if($valor2 == 0){
            $erro = "Não é possível dividir por zero.";
            return view('exer4', ['erro' => $erro]);
        }

        $divisao = $valor1 / $valor2;
        return view('exer4', ['divisao' => $divisao]);
    }

    public function abrirFormExer5(){
        return view('exer5');
    }

    public function respostaExer5(Request $request){
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;

        $media = ($nota1 + $nota2 + $nota3) / 3;

        return view('exer5', ['media' => $media]);
    }

    public function abrirFormExer6(){
        return view('exer6');
    }

    public function respostaExer6(Request $request){
        $celsius = $request->celsius;
        $fahrenheit = ($celsius * 9 / 5) + 32;

        return view('exer6', ['fahrenheit' => $fahrenheit]);
    }

    public function abrirFormExer7(){
        return view('exer7');
    }

    public function respostaExer7(Request $request){
        $fahrenheit = $request->fahrenheit;
        $celsius = ($fahrenheit - 32) * 5 / 9;

        return view('exer7', ['celsius' => $celsius]);
    }

    public function abrirFormExer8(){
        return view('exer8');
    }

    public function respostaExer8(Request $request){
        $largura = $request->largura;
        $altura = $request->altura;
        $area = $largura * $altura;

        return view('exer8', ['area' => $area]);
    }

}