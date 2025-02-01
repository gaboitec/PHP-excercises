<?php

// 1. Bubble Sort (Ordenamiento Descendente)
function bubbleSort($lista)
{
    $n = count($lista);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($lista[$j] < $lista[$j + 1]) {

                $temp = $lista[$j];
                $lista[$j] = $lista[$j + 1];
                $lista[$j + 1] = $temp;
            }
        }
    }
    return $lista;
}

// Ejemplos de uso
$numeros = [64, -3, 34, 25, 12, 22, 11, -10];
echo "Números antes de Bubble Sort: " . implode(", ", $numeros) . "\n";
$numerosOrdenados = bubbleSort($numeros);
echo "Números después de Bubble Sort: " . implode(", ", $numerosOrdenados) . "\n\n";

//-------------------------------------------------------------------------

// 2. Merge Sort (Ordenamiento Alfabético de Palabras)
function mergeSort($lista) {
    $n = count($lista);
    
    if ($n <= 1) {
        return $lista;
    }
    
    $mitad = floor($n / 2);
    $izquierda = array_slice($lista, 0, $mitad);
    $derecha = array_slice($lista, $mitad);
    
    $izquierda = mergeSort($izquierda);
    $derecha = mergeSort($derecha);
    
    return merge($izquierda, $derecha);
}

function merge($izquierda, $derecha) {
    $resultado = [];
    $i = $j = 0;
    
    while ($i < count($izquierda) && $j < count($derecha)) {
        if (strtolower($izquierda[$i]) <= strtolower($derecha[$j])) {//strtolowe -> convertir a minusculas
            $resultado[] = $izquierda[$i];
            $i++;
        } else {
            $resultado[] = $derecha[$j];
            $j++;
        }
    }
    
    while ($i < count($izquierda)) {
        $resultado[] = $izquierda[$i];
        $i++;
    }
    
    while ($j < count($derecha)) {
        $resultado[] = $derecha[$j];
        $j++;
    }
    
    return $resultado;
}

// Ejemplos de uso
$palabras = ["manzana", "banana", "cereza", "albaricoque", "dátil"];
echo "Palabras antes de Merge Sort: " . implode(", ", $palabras) . "\n";
$palabrasOrdenadas = mergeSort($palabras);
echo "Palabras después de Merge Sort: " . implode(", ", $palabrasOrdenadas) . "\n\n";

//-------------------------------------------------------------------------

// 3. Insertion Sort (Ordenamiento Alfabético de Nombres)
function insertionSort($lista) {
    $n = count($lista);
    
    for ($i = 1; $i < $n; $i++) {
        $nombreActual = $lista[$i];
        $j = $i - 1;
        //strtolowe -> convertir a minusculas
        while ($j >= 0 && strtolower($lista[$j]) > strtolower($nombreActual)) {
            $lista[$j + 1] = $lista[$j];
            $j--;
        }
        
        $lista[$j + 1] = $nombreActual;
    }
    
    return $lista;
}

// Ejemplo de uso
$nombres = ["Juan", "Ana", "Carlos", "María", "Pedro"];
echo "Nombres antes de Insertion Sort: " . implode(", ", $nombres) . "\n";
$nombresOrdenados = insertionSort($nombres);
echo "Nombres después de Insertion Sort: " . implode(", ", $nombresOrdenados) . "\n";
