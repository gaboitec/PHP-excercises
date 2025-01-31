<?php

// #1. Problema de Lista Invertida
function invertirLista($lista)
{
    $listaInvertida = [];
    for ($i = count($lista) - 1; $i >= 0; $i--) {
        $listaInvertida[] = $lista[$i];
    }
    return $listaInvertida;
}

// Ejemplo de uso
$numeros = [1, 2, 3, 4, 5];
$listaInvertida = invertirLista($numeros);
print_r($listaInvertida);

//--------------------------------------------------------------

// #2. Problema de Suma de Números Pares
function sumarNumerosPares($lista)
{
    $suma = 0;
    foreach ($lista as $numero) {
        if ($numero % 2 == 0) {
            $suma += $numero;
        }
    }
    return $suma;
}

// Ejemplo de uso
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumaPares = sumarNumerosPares($numeros);
echo "Suma de números pares: " . $sumaPares . "\n";

//--------------------------------------------------------------

// #3. Problema de Frecuencia de Caracteres
function frecuenciaCaracteres($cadena)
{
    $frecuencia = [];
    $caracteres = str_split($cadena);

    foreach ($caracteres as $caracter) {
        $frecuencia[$caracter] = array_key_exists($caracter, $frecuencia)
            ? $frecuencia[$caracter] + 1
            : 1;
    }

    return $frecuencia;
}

// Ejemplo de uso
$texto = "hola mundo";
$frecuencia = frecuenciaCaracteres($texto);
print_r($frecuencia);

//--------------------------------------------------------------

// #4. Problema de Bucle Anidado: Pirámide de Asteriscos
function imprimirPiramide($altura)
{
    for ($i = 1; $i <= $altura; $i++) {
        // Espacios en blanco
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo " ";
        }

        // Asteriscos
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        echo "\n";
    }
}

// Ejemplo de uso
imprimirPiramide(5);
