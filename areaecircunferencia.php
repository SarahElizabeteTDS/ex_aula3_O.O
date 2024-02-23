<?php

    function area($r)
    {
        $area = 0;
        $pi = 3.14;
        $area = $pi * ($r * $r);
        return $area;
    }

    function circunferencia($r)
    {
        $cincunferencia = 0;
        $pi = 3.14;
        $cincunferencia = 2 * $pi * $r;
        return $cincunferencia;
    }

    for ($i = 0; $i < 3; $i++) 
    { 
        $raio = readline("Informe o valor do raio de três círculos (em centímetros): \n");
        print "A área do seu círculo é de: " . area($raio) . "cm\n" . "A circunferência do círculo é de: " . circunferencia($raio) . "cm\n";
    }

