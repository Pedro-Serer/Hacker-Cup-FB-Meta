<?php
    function teste_1(string $string): int
    {
        $contador = 0;
        $pilha = new splStack();
        
        for ($i=0; $i<strlen($string); $i++) {
            if ($string[$i] == "X" or $string[$i] == "O") {
                if (!$pilha->isEmpty() and $pilha->top() !== $string[$i]) $contador += 1;
                $pilha->push($string[$i]);
            }
        }
        return $contador;
    }
    
    /*Testes*/
	$strings = ["O", "XFO", "FFOFF", "FXXFXFOOXF", "XFOFXFOFXFOFX"];
	
	foreach ($strings as $index) echo teste_1($index) . "\n";
