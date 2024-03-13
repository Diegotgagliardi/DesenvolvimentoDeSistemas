<?php
    echo "<h3> Funções Uteis </h3>";
    echo "Potencia: " . pow($raio, 4);
    echo "Modulo ABS: " . abs($raio); // |-4| e |4| => 4
    echo "Raiz quadrada: " . sqrt($raio);
    
    echo "<br>Arredondar normal: " . round($raio);
    echo "<br>Arredondar para baixo: " . floor($raio);
    echo "<br>Arredondar para cima: " . ceil($raio);
    echo "<br>Parte inteira: " . intval($raio);

    echo "<h3> Mini matematica </h3>";

    $a = 1;
    $b = 3;
    $c = $a + $b;

    $c = $c + 5;
    $c += 1;
    $c++;

    $b = $b - 1;
    $b -= 1;
    $b--;

    $var = 80;
    $var++;

    echo "<br>Var: " . $var;
    echo "<br>Var: " . ++$var;
    echo "<br>Var: " . $var;

    $var = 80;
    echo "<br>Var: " . $var--;
    echo "<br>Var: " . $var;
    echo "<br>Var: " . --$var;

    $var = "Vanderley";
    $$var = 10;
?>