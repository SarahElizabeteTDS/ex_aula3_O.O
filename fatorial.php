<?php

    function fatorial ($num)
    {
        $fatorial = 1;
        for ($i = $num; $i > 1; $i--) 
        { 
            $fatorial *= $i;
        }
        return $fatorial;
    }

    do 
    {
        $numero = readline("Insira um número para receber o seu fatorial: \n");
        print fatorial($numero) . "\n";
    } while ($numero != 0);
        


    
